<?php

namespace App\Http\Controllers;


use App\Event;
use App\MataPelajaran;
use Illuminate\Http\Request;
use App\Services\RedirectLink;
use App\CategoryProgramKegiatan;
use App\Http\Requests\EventRequest;
use App\Services\UploadFileServices;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;

class EventController extends Controller
{
    public function index($idmp, $id_category)
    {
        $result         = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category       = $result["category"];

        $event          = Event::where("mata_pelajaran_id", $mata_pelajaran->id ?? null)
                            ->where("category_program_kegiatan_id", $category->id)->latest()->get();
                                
        return view("event.index", compact([
            "mata_pelajaran", 
            "event",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        $result = RedirectLink::checkMataPelajaranDanCategory($idmp, $id_category);
        
        $mata_pelajaran = $result["mata-pelajaran"];

        $category = $result["category"];

        return view("event.create", compact(["mata_pelajaran", "category"]));
    }

    public function store(EventStoreRequest $request ,$id_mp, $id_category)
    {
        
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $nama = UploadFileServices::image($request, "gambar");
        
        $data["banner"] = $data["gambar"];
        unset($data["gambar"]);
        $data["banner"] = $nama;
        $data["category_program_kegiatan_id"] = $id_category;


        return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, 
        
        Event::create($data) , "event")
        
        ->withSuccess("Event berhasil ditambahkan");
    
    }

    public function show($idmp, $idc, $id)
    {
        if($idmp == 0) {
            $mata_pelajaran = null;
        }  else {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);
        } 

        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $event           = Event::findOrFail($id);
        
        return view("event.show", compact([
            "mata_pelajaran",
            "event",
            "category",
        ]));
    }

    public function edit($id_mp, $id_category, $id)
    {
        $mata_pelajaran   = RedirectLink::checkMataPelajaran($id_mp);

        $category         = CategoryProgramKegiatan::findOrFail($id_category);

        $event              = Event::findOrFail($id);

        return view("event.edit", compact([
            "mata_pelajaran",
            "event",
            "category"
        ]));
    }

    public function update(EventUpdateRequest $request, $id_mp, $id_category, $id)
    {
        $data = RedirectLink::checkValidation($request, $id_category, $id_mp);

        $event           = Event::findOrFail($id);

        // $data["banner"] = $data["gambar"];
        // unset($data["gambar"]);

        $data["category_program_kegiatan_id"] = $id_category;

        if($request->has("gambar"))
        {
            $nama = UploadFileServices::image($request, "gambar");
            $data["banner"] = $data["gambar"];
            unset($data["gambar"]);
            $data["banner"] = $nama;

            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $event->update($data) , "event")->withSuccess("Event berhasil diedit");
        }else{
            return RedirectLink::redirect($data["mata_pelajaran_id"], $id_category, $event->update($data) , "event")->withSuccess("Event berhasil diedit");
        }

    }

    public function destroy($id_mp, $id_category ,$id)
    {
        $event = Event::findOrFail($id);

        return RedirectLink::redirect($id_mp, $id_category, $event->delete(), "event")->withSuccess("Event berhasil dihapus");
    }

}
