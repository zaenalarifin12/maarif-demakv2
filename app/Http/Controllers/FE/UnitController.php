<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryProgramKegiatan;
use App\Galeri;
use App\Event;
use App\Informasi;

class UnitController extends Controller
{
    public function jajaran($slug)
    {
        $cpk = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        dd("jajaran");
    }   
    
    public function galeri($slug)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $galeri = Galeri::where("category_program_kegiatan_id", $cpk->id)->latest()->get();

        return view("fe.unit.galeri", compact([
            "cpk", "galeri"
        ]));
    }   

    public function event($slug)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $event = Event::where("category_program_kegiatan_id", $cpk->id)->latest()->paginate(10);

        return view("fe.unit.event", compact([
            "cpk", "event"
        ]));
    }

    public function informasi($slug)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $informasi = Informasi::where("category_program_kegiatan_id", $cpk->id)->latest()->paginate(10);

        return view("fe.unit.informasi", compact([
            "cpk", "informasi"
        ]));
    }
}
