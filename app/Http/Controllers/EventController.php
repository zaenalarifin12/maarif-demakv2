<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Event;
use App\MataPelajaran;
use App\Http\Requests\EventRequest;
use App\CategoryProgramKegiatan;
use App\Services\UploadFileServices;

class EventController extends Controller
{
    public function index($idmp, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        if ($idmp == 0 ) {
            $mata_pelajaran = null;
            
            $event = Event::where("mata_pelajaran_id", $mata_pelajaran)
                ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        } else  {
            $mata_pelajaran = MataPelajaran::findOrFail($idmp);

            $event = Event::where("mata_pelajaran_id", $idmp)
            ->where("category_program_kegiatan_id", $id_category)->latest()->get();
        }
                
        return view("event.index", compact([
            "mata_pelajaran", 
            "event",
            "category",
        ]));
    }

    public function create($idmp, $id_category)
    {
        ($idmp == 0) ? $mata_pelajaran = null : $mata_pelajaran = MataPelajaran::findOrFail($idmp);
        
        $category = CategoryProgramKegiatan::findOrFail($id_category);

        return view("event.create", compact(["mata_pelajaran", "category"]));
    }

    public function store(EventRequest $request ,$id_mp, $id_category)
    {
        $validated = $request->validated();
    
        $nama = UploadFileServices::image($request, "banner");
        
        if ($id_mp == 0) {

            $event = Event::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/unit/0/category/$id_category/event")
            ->withSuccess("Event berhasil ditambahkan");
        } else {

            $mata_pelajaran = MataPelajaran::findOrFail($id_mp);

            $event = Event::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $id_mp,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$id_category/event")
            ->withSuccess("Event berhasil ditambahkan");
        }

        
    }

    public function show($idmp, $idc, $id)
    {
        $mata_pelajaran   = MataPelajaran::findOrFail($idmp);

        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $event           = Event::findOrfail($id);
        
        return view("event.show", compact([
            "mata_pelajaran",
            "event",
            "category",
        ]));
    }

    public function edit(Request $request, $idmp, $idc, $id)
    {
        $mata_pelajaran     = MataPelajaran::findOrFail($idmp);

        $category           = CategoryProgramKegiatan::findOrfail($idc);

        $event              = Event::findOrfail($id);

        return view("event.edit", compact([
            "mata_pelajaran",
            "event",
            "category"
        ]));
    }

    public function update(Request $request, $idmp, $idc, $id)
    {
        $mata_pelajaran = MataPelajaran::findOrFail($idmp);
    
        $category         = CategoryProgramKegiatan::findOrfail($idc);

        $event           = Event::findOrfail($id);

        if ($idmp == 0) {

            if($request->has("banner"))
            {
                $nama = UploadFileServices::image($request, "banner");

                $event->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => null,
                    "category_program_kegiatan_id"  => $id_category
                ]);
            }else{
                $event->update([
                   
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

                $event->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => $idmp,
                    "category_program_kegiatan_id"  => $idc
                ]);
            }else{
                $event->update([
                   
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                    "mata_pelajaran_id"             => $idmp,
                    "category_program_kegiatan_id"  => $idc
                ]);
            }

        }

        return redirect("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$idc/event")
            ->withSuccess("Event berhasil diedit");
    }

    public function destroy($idmp, $idc ,$id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect("/admin/forum-mgmp/mata-pelajaran/$idmp/category/$idc/event")
            ->withSuccess("Event berhasil dihapus");
    }

}
