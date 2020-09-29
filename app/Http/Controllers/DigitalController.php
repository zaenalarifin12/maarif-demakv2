<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Digital;
use App\MataPelajaran;
use App\Http\Requests\DigitalRequest;
use App\CategoryProgramKegiatan;

class DigitalController extends Controller
{
    public function index($idmp, $id_category)
    {
        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $digital = Digital::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->first();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $digital = Digital::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->first();
        }
        
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("digital.index", compact([
            "mata_pelajaran", 
            "digital",
            "category"
        ]));
    }

    public function create($idmp, $id_category)
    {

        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $digital = Digital::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->first();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $digital = Digital::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->first();
        }

        return view("digital.create", compact([
            "mata_pelajaran",
            "category",
            "digital"
        ]));
    }

    public function store(DigitalRequest $request , $idmp, $id_category)
    {
        $validated = $request->validated();
     
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0) {
        
            $d = Digital::where("category_program_kegiatan_id", $id_category)->delete();    

            $digital = Digital::create([
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/unit/0/category/$id_category/digital")
            ->withSuccess("product digital berhasil ditambahkan");

        }else{
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $d = Digital::where("category_program_kegiatan_id", $id_category)
                        ->where("mata_pelajaran_id", $idmp)
                        ->delete();
        
            
            $digital = Digital::create([
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $idmp,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/forum-mgmp/mata-pelajaran/$idmp/category/$id_category/digital")
            ->withSuccess("product digital berhasil ditambahkan");
        }

    }

}
