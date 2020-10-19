<?php

namespace App\Http\Controllers;

use App\Digital;
use App\MataPelajaran;
use App\ProgramKegiatan;
// use App\Http\Requests\EventRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\RedirectLink;
use App\CategoryProgramKegiatan;
use App\Http\Requests\DigitalStoreRequest;

class DigitalController extends Controller
{
    public function index($idmp, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        $mata_pelajaran = RedirectLink::checkMataPelajaran($idmp);

        $digital = Digital::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->latest()->get();
                
        return view("digital.index", compact([
            "mata_pelajaran", 
            "digital",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        $mata_pelajaran = RedirectLink::checkMataPelajaran($idmp);

        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("digital.create", compact(["mata_pelajaran", "category"]));
    }

    public function store(DigitalStoreRequest $request ,$id_mp, $id_category)
    {
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
        
        Digital::create($data) , "digital")
        
        ->withSuccess("Produk Digital berhasil ditambahkan");

    }

    public function edit($id_mp, $idc, $id)
    {
        $mata_pelajaran     = RedirectLink::checkMataPelajaran($id_mp);
        
        $category           = CategoryProgramKegiatan::findOrfail($idc);

        $digital            = Digital::where("id", $id)->firstOrFail();

        return view("digital.edit", compact([
            "mata_pelajaran",
            "digital",
            "category"
        ]));
    }

    public function update(DigitalStoreRequest $request, $id_mp, $id_category, $id)
    {
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $digital          = Digital::where("id", $id)->firstOrFail();

        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
                
        $digital->update($data) , "digital")
        
        ->withSuccess("Produk Digital berhasil Diedit");
    }

    public function destroy($id_mp, $id_category ,$id)
    {
        $digital          = Digital::where("id", $id)->firstOrFail();

        return RedirectLink::redirect($id_mp, $id_category, 
                
        $digital->delete() , "digital")
        
        ->withSuccess("Produk Digital berhasil Dihapus");

    }
}



