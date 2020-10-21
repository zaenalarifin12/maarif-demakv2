<?php

namespace App\Http\Controllers;

use App\Eprint;
use App\MataPelajaran;
use App\CategoryEprint;
use Illuminate\Http\Request;

use App\Services\RedirectLink;
use App\CategoryProgramKegiatan;
use App\Http\Requests\EprintRequest;
use App\Services\UploadFileServices;
use App\Http\Requests\EprintStoreRequest;
use App\Http\Requests\EprintUpdateRequest;

class EprintController extends Controller
{
    public function index($idmp, $id_category)
    {

        $result = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category = $result["category"];

        $eprint = Eprint::where("mata_pelajaran_id", $mata_pelajaran->id ?? null)
            ->where("category_program_kegiatan_id", $category->id)->latest()->get();
                
        return view("e-print.index", compact([
            "mata_pelajaran", 
            "eprint",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        $result = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category = $result["category"];

        $categoryEprint = CategoryEprint::get();

        return view("e-print.create", compact(["mata_pelajaran", "category", "categoryEprint"]));
    }

    public function store(EprintStoreRequest $request ,$id_mp, $id_category)
    {
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        //file foto
        $foto = UploadFileServices::image($request, "cover");
        // file pdf
        $nama = UploadFileServices::image($request, "banner");


        $data["cover"] = $foto;
        $data["banner"] = $nama;
        $data["category_program_kegiatan_id"] = $id_category;

        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
        
        Eprint::create($data) , "eprint")
        
        ->withSuccess("Produk E-Print berhasil ditambahkan");
    }

    public function show($id_mp, $id_category, $id)
    {
        $mata_pelajaran     = RedirectLink::checkMataPelajaran($id_mp);
        
        $category           = CategoryProgramKegiatan::findOrfail($id_category);

        $eprint             = Eprint::findOrFail($id);
        
        return view("e-print.show", compact([
            "mata_pelajaran",
            "eprint",
            "category",
        ]));
    }

    public function edit($id_mp, $id_category, $id)
    {
        $mata_pelajaran   = RedirectLink::checkMataPelajaran($id_mp);

        $category         = CategoryProgramKegiatan::findOrfail($id_category);

        $eprint           = Eprint::findOrfail($id);
        
        $categoryEprint   = CategoryEprint::get();

        return view("e-print.edit", compact([
            "mata_pelajaran",
            "eprint",
            "category",
            "categoryEprint",
        ]));
    }

    public function update(EprintUpdateRequest $request, $id_mp, $id_category, $id)
    {

        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        // TODO , TAMBAHKAN FILE COVER DAN FILE PDF
        
        $eprint           = Eprint::findOrFail($id);

        // $data["banner"] = $data["gambar"];
        // unset($data["gambar"]);

        $data["category_program_kegiatan_id"] = $id_category;

        if($request->has("banner") && $request->has("cover"))
        {
            $nama = UploadFileServices::image($request, "banner");
            $data["banner"] = $nama;

            $nama2 = UploadFileServices::image($request, "cover");
            $data["cover"] = $nama2;

            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $eprint->update($data) , "eprint")->withSuccess("Produk E-Print berhasil diedit");
        
        }elseif($request->has("banner")){

            $nama = UploadFileServices::image($request, "banner");
            $data["banner"] = $nama;

            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $eprint->update($data) , "eprint")->withSuccess("Produk E-Print berhasil diedit");
        
        }elseif($request->has("cover")){

            $nama = UploadFileServices::image($request, "cover");
            $data["cover"] = $nama;
            
            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $eprint->update($data) , "eprint")->withSuccess("Produk E-Print berhasil diedit");
        }
        
        else{
            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $eprint->update($data) , "eprint")->withSuccess("Produk E-Print berhasil diedit");
        }
        
    }

    public function destroy($id_mp, $id_category ,$id)
    {
        $eprint = Eprint::findOrFail($id);

        return RedirectLink::redirect($id_mp, $id_category, $eprint->delete(), "eprint")->withSuccess("Produk E-Print berhasil dihapus");
    }

}
