<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Lembaga;
use App\MataPelajaran;
use Illuminate\Http\Request;

use App\Services\RedirectLink;
use App\CategoryProgramKegiatan;
use App\Http\Requests\GaleriRequest;
use App\Services\UploadFileServices;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GaleriStoreRequest;
use App\Http\Requests\GaleriUpdateRequest;

class GaleriController extends Controller
{
    public function index($id_mp, $id_category)
    {

        $result         = RedirectLink::checkMataPelajaranDanCategory($id_mp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category       = $result["category"];
        
        $galeri = Galeri::where("mata_pelajaran_id", $mata_pelajaran->id ?? null)->where("category_program_kegiatan_id", $category->id)->paginate(10);            

        return view("galeri.index", compact([
            "mata_pelajaran", 
            "galeri", 
            "category"
        ]));
    }


    public function store(GaleriStoreRequest $request, $id_mp, $id_category)
    {
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $nama = UploadFileServices::image($request, "banner");
        
        // $data["banner"] = $data["gambar"];
        // unset($data["gambar"]);
        $data["banner"] = $nama;
        $data["category_program_kegiatan_id"] = $id_category;


        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
        
        Galeri::create($data) , "galeri")
        
        ->withSuccess("Galeri berhasil ditambahkan");
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriUpdateRequest $request, $id_mp, $id_category, $id)
    {

        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $galeri           = Galeri::findOrFail($id);

        $data["category_program_kegiatan_id"] = $id_category;

        $galeri = Galeri::findOrFail($id);


        if($request->has("banner"))
        {
            $nama = UploadFileServices::image($request, "banner");
            // $data["banner"] = $data["gambar"];
            // unset($data["gambar"]);
            $data["banner"] = $nama;

            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $galeri->update($data) , "galeri")->withSuccess("Galeri berhasil diedit");
        }else{
            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $galeri->update($data) , "galeri")->withSuccess("Galeri berhasil diedit");
        }
        
        // Storage::delete($galeri->banner);
    }

    public function destroy($id_mp, $id_category ,$id)
    {
        $galeri = Galeri::findOrFail($id);

        return RedirectLink::redirect($id_mp, $id_category, $galeri->delete(), "galeri")->withSuccess("Galeri berhasil dihapus");
  
    }
}
