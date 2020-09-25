<?php

namespace App\Http\Controllers;

use App\Eprint;
use App\MataPelajaran;
use App\CategoryEprint;
use App\CategoryProgramKegiatan;

use Illuminate\Http\Request;
use App\Http\Requests\EprintRequest;
use App\Services\UploadFileServices;

class EprintController extends Controller
{
    public function index($idmp, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $eprint = Eprint::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $eprint = Eprint::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        }
                
        return view("e-print.index", compact([
            "mata_pelajaran", 
            "eprint",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($idmp);

        $category = CategoryProgramKegiatan::findOrFail($id_category);

        $categoryEprint = CategoryEprint::get();

        return view("e-print.create", compact(["mata_pelajaran", "category", "categoryEprint"]));
    }

    public function store(EprintRequest $request ,$id_mp, $id_category)
    {
        $validated = $request->validated();
     
        $nama = UploadFileServices::image($request, "banner");

        $mata_pelajaran = MataPelajaran::findOrFail($id_mp);
        

        if ($id_mp == 0) {

            $eprint = Eprint::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

        } else {
        
            $eprint = Eprint::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $id_mp,
                "category_program_kegiatan_id"  => $id_category
            ]);

        }

        $eprint->category_eprints()->sync($request->categoryEprint);

        return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$id_category/eprint")
            ->withSuccess("eprint berhasil ditambahkan");
    }

    public function show($idmp, $idc, $id)
    {
        $mata_pelajaran   = MataPelajaran::findOrFail($idmp);

        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $eprint           = Eprint::findOrfail($id);
        
        return view("e-print.show", compact([
            "mata_pelajaran",
            "eprint",
            "category",
        ]));
    }

    public function edit(Request $request, $idmp, $idc, $id)
    {
        $mata_pelajaran   = MataPelajaran::findOrFail($idmp);

        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $eprint           = Eprint::findOrfail($id);
        
        $categoryEprint = CategoryEprint::get();

        return view("e-print.edit", compact([
            "mata_pelajaran",
            "eprint",
            "category",
            "categoryEprint",
        ]));
    }

    public function update(Request $request, $idmp, $idc, $id)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($idmp);
    
        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $eprint           = Eprint::findOrfail($id);

        if ($idmp == 0) {

            if($request->has("banner"))
            {
                $nama = UploadFileServices::image($request, "banner");

                $eprint->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => null,
                    "category_program_kegiatan_id"  => $id_category
                ]);
            }else{
                $eprint->update([
                   
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => null,
                    "category_program_kegiatan_id"  => $id_category
                ]);
            }

        } else {
        
            if($request->has("banner"))
            {
                $nama = UploadFileServices::image($request, "banner");

                $eprint->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => $idmp,
                    "category_program_kegiatan_id"  => $idc
                ]);
            }else{
                $eprint->update([
                   
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => $idmp,
                    "category_program_kegiatan_id"  => $idc
                ]);
            }

        }

        $eprint->category_eprints()->sync($request->categoryEprint);

        return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$idc/eprint")
            ->withSuccess("eprint berhasil diedit");
    }

    public function destroy($idmp, $idc ,$id)
    {
        $eprint = Eprint::findOrFail($id);
        $eprint->delete();

        return redirect("/admin/forum-mgmp/mata-pelajaran/$idmp/category/$idc/eprint")
            ->withSuccess("eprint berhasil dihapus");
    }

}
