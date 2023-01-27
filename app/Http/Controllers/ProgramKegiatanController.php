<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use App\ProgramKegiatan;
use Illuminate\Http\Request;
// use App\Http\Requests\DigitalRequest;
use App\Services\RedirectLink;
use App\CategoryProgramKegiatan;
use App\Http\Requests\ProgramKegiatanStoreRequest;

class ProgramKegiatanController extends Controller
{
    public function index($idmp, $id_category)
    {
        $result         = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category       = $result["category"];

        $program        = ProgramKegiatan::where("mata_pelajaran_id", $mata_pelajaran->id ?? null)
                        ->where("category_program_kegiatan_id", $category->id)->first();
        
        return view("program.index", compact([
            "mata_pelajaran", 
            "program",
            "category"
        ]));
    }

    public function create($idmp, $id_category)
    {

        $result = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category = $result["category"];

        $program = ProgramKegiatan::where("mata_pelajaran_id", $mata_pelajaran->id ?? null)
                ->where("category_program_kegiatan_id", $category->id)->first();

        return view("program.create", compact([
            "mata_pelajaran",
            "category",
            "program"
        ]));
    }

    public function store(ProgramKegiatanStoreRequest $request, $id_mp,  $id_category)
    {
        $validated = $request->validated();
        
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $data["category_program_kegiatan_id"] = $id_category;

        ProgramKegiatan::where("category_program_kegiatan_id", $data["category_program_kegiatan_id"])
        ->where("mata_pelajaran_id", $data["mata_pelajaran_id"])
        ->delete();

        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
        
        ProgramKegiatan::create($data) , "program")
        
        ->withSuccess("Program Kegiatan berhasil diedit");
       
    }

}
