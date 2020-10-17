<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramKegiatan;
use App\MataPelajaran;
// use App\Http\Requests\EventRequest;
use App\CategoryProgramKegiatan;
use App\Services\UploadFileServices;
use Illuminate\Support\Str;
use App\Digital;

class DigitalController extends Controller
{
    public function index($idmp, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $digital = Digital::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $digital = Digital::where("mata_pelajaran_id", $idmp)
                ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        }
                
        return view("digital.index", compact([
            "mata_pelajaran", 
            "digital",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        if ($idmp == 0 ) {
            $mata_pelajaran = null;
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);
        }

        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("digital.create", compact(["mata_pelajaran", "category"]));
    }

    public function store(Request $request ,$id_mp, $id_category)
    {
        $request->validate([
            "judul"         => "required",
            "deskripsi"     => "required",
            // "gambar"        => "required"
        ]); 
    
        // $nama = UploadFileServices::image($request, "gambar");
        
        // $slug = Str::slug($request->judul);
        // $program = ProgramKegiatan::where("slug", $slug)->first();
        
        // if(!empty($program))
        //     $slug .= "-" . time();

        if ($id_mp == 0) {

            Digital::create([
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/unit/0/category/$id_category/digital")
            ->withSuccess("Produk Digital berhasil ditambahkan");
        } else {

            $mata_pelajaran = MataPelajaran::findOrFail($id_mp);

            Digital::create([
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $id_mp,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$id_category/digital")
            ->withSuccess("Program Kegiatan berhasil ditambahkan");
        }
    }

    // FIXME HAPUS SAJA
    public function show($id_mp, $idc, $slug)
    {
        if ($id_mp == 0) {
            $mata_pelajaran   = null;
        } else {
            $mata_pelajaran   = MataPelajaran::findOrFail($id_mp);
        }

        $category         = CategoryProgramKegiatan::findOrFail($idc);

        $program           = ProgramKegiatan::where("slug", $slug)->firstOrFail();
        
        return view("program.show", compact([
            "mata_pelajaran",
            "program",
            "category",
        ]));
    }

    public function edit(Request $request, $id_mp, $idc, $id)
    {

        if ($id_mp == 0) {
            $mata_pelajaran   = null;
        } else {
            $mata_pelajaran   = MataPelajaran::findOrFail($id_mp);
        }

        $category           = CategoryProgramKegiatan::findOrfail($idc);

        $digital          = Digital::where("id", $id)->firstOrFail();

        return view("digital.edit", compact([
            "mata_pelajaran",
            "digital",
            "category"
        ]));
    }

    public function update(Request $request, $id_mp, $id_category, $id)
    {
        if ($id_mp == 0) {
            $mata_pelajaran   = null;
        } else {
            $mata_pelajaran   = MataPelajaran::findOrFail($id_mp);
        }

        $category         = CategoryProgramKegiatan::findOrFail($id_category);

        $digital          = Digital::where("id", $id)->firstOrFail();

        if ($id_mp == 0) {

                $digital->update([
                    
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => null,
                    "category_program_kegiatan_id"  => $id_category
                ]);

            return redirect("/admin/unit/0/category/$id_category/digital")
                ->withSuccess("Produk Digital berhasil diedit");

        } else {
        
         
                $digital->update([
                   
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => $id_mp,
                    "category_program_kegiatan_id"  => $id_category
                ]);
        }
        

        return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$id_category/digital")
            ->withSuccess("Program Kegiatan berhasil diedit");
    }

    public function destroy($id_mp, $id_category ,$id)
    {
        $informasi  = Digital::where("id", $id)->firstOrFail();
        $informasi->delete();
         
        if ($id_mp == 0) {
            return redirect("/admin/unit/0/category/$id_category/digital")
            ->withSuccess("Produk Digital berhasil dihapus");
        } else {
            return redirect("/admin/forum-mgmp/mata-pelajaran/$id_mp/category/$id_category/digital")
            ->withSuccess("Produk Digital berhasil dihapus");
        }

    }

}



