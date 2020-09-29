<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\CategoryProgramKegiatan;
use App\Services\UploadFileServices;
use App\Informasi;
use Illuminate\Support\Str;

class InformasiController extends Controller
{

    private function slug($r_judul)
    {
        $judul = Str::slug($r_judul, "-");
        
        $informasi = Informasi::where("slug", $judul)->first();

        if (!empty($informasi)) {
            $judul = $judul . "-" . time();
        }

        return $judul;
    }

    public function index($idmp, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $informasi = Informasi::where("category_program_kegiatan_id", $id_category)->latest()->get();
        } 
                
        return view("informasi.index", compact([
            "mata_pelajaran", 
            "informasi",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        if ($idmp == 0) 
            $mata_pelajaran = null;
        
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("informasi.create", compact(["mata_pelajaran", "category"]));
    }

    public function store(Request $request ,$id_mp, $id_category)
    {
    
        $request->validate([
            "gambar"        => "required|mimes:jpeg,png|max:60000",
            "judul"         => "required",
            "deskripsi"     => "required",
        ]);

       
        $slug = $this->slug($request->judul);
        
        if ($id_mp == 0) {

            $nama = UploadFileServices::image($request, "gambar");

            $informasi = Informasi::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "slug"                         => $slug,
                "deskripsi"                     => $request->deskripsi,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/unit/0/category/$id_category/informasi")
            ->withSuccess("Informasi berhasil ditambahkan");
        }
        
    }

    public function show($idmp, $idc, $slug)
    {
        $category           = CategoryProgramKegiatan::findOrfail($idc);

        $informasi           = Informasi::where("slug", $slug)->firstOrFail();
        
        return view("informasi.show", compact([
            "informasi",
            "category",
        ]));
    }

    public function edit(Request $request, $idmp, $idc, $slug)
    {

        $category           = CategoryProgramKegiatan::findOrfail($idc);

        $informasi           = Informasi::where("slug", $slug)->firstOrFail();

        return view("informasi.edit", compact([
            "informasi",
            "category"
        ]));
    }

    public function update(Request $request, $idmp, $id_category, $slug)
    {
            
        $request->validate([
            // "gambar"        => "required|mimes:jpeg,png|max:60000",
            "judul"         => "required",
            "deskripsi"     => "required",
        ]);
        
        $category         = CategoryProgramKegiatan::findOrfail($id_category);

        $informasi           = Informasi::where("slug", $slug)->firstOrFail();

        if ($idmp == 0) {

            if($request->has("banner"))
            {
                $nama = UploadFileServices::image($request, "banner");

                $informasi->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "category_program_kegiatan_id"  => $id_category
                ]);
            }else{
                $informasi->update([
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "category_program_kegiatan_id"  => $id_category
                ]);
            }

        } 

        return redirect("admin/unit/0/category/$category->id/informasi")
            ->withSuccess("Informasi berhasil diedit");
    }

    public function destroy($idmp, $id_category ,$slug)
    {
        $event = Informasi::where("slug", $slug)->firstOrFail();
        $event->delete();

        return redirect("/admin/unit/0/category/$id_category/informasi")
        ->withSuccess("Informasi berhasil dihapus");

    }

}
