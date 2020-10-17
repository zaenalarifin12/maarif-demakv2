<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramKegiatan;
use App\MataPelajaran;
// use App\Http\Requests\DigitalRequest;
use App\CategoryProgramKegiatan;

class ProgramKegiatanController extends Controller
{
    public function index($idmp, $id_category)
    {
        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $program = ProgramKegiatan::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->first();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $program = ProgramKegiatan::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->first();
        }
        
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("program.index", compact([
            "mata_pelajaran", 
            "program",
            "category"
        ]));
    }

    public function create($idmp, $id_category)
    {

        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $program = ProgramKegiatan::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->first();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $program = ProgramKegiatan::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->first();
        }

        return view("program.create", compact([
            "mata_pelajaran",
            "category",
            "program"
        ]));
    }

    public function store(Request $request, $idmp,  $id_category)
    {
        // $validated = $request->validated();
        
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0) {
        
            $d = ProgramKegiatan::where("category_program_kegiatan_id", $id_category)->delete();    

            $program = ProgramKegiatan::create([
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/unit/0/category/$id_category/program")
            ->withSuccess("program kegiatan berhasil ditambahkan");

        }else{
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $d = ProgramKegiatan::where("category_program_kegiatan_id", $id_category)
                        ->where("mata_pelajaran_id", $idmp)
                        ->delete();
            
            $digital = ProgramKegiatan::create([
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $idmp,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/forum-mgmp/mata-pelajaran/$idmp/category/$id_category/program")
            ->withSuccess("program kegiatan berhasil ditambahkan");
        }

    }

}
