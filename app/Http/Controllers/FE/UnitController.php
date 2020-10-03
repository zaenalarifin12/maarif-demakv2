<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryProgramKegiatan;
use App\Galeri;
use App\Event;
use App\Informasi;
use App\ProgramKegiatan;

class UnitController extends Controller
{
    public function jajaran($slug)
    {
        $cpk = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        dd("jajaran");
    }   

    public function program($slug)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $program = ProgramKegiatan::where("category_program_kegiatan_id", $cpk->id)->latest()->paginate(10);

        return view("fe.unit.program", compact([
            "cpk", "program"
        ]));
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

    public function eventShow($slug, $id)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $event = Event::where("category_program_kegiatan_id", $cpk->id)
                ->where("id", $id)->firstOrFail();

        return view("fe.unit.eventShow", compact([
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

    public function informasiShow($slug, $id_slug)
    {
        $cpk    = CategoryProgramKegiatan::where("slug", $slug)->firstOrFail();

        $informasi = Informasi::where("category_program_kegiatan_id", $cpk->id)
                ->where("slug", $id_slug)->firstOrFail();

        return view("fe.unit.informasiShow", compact([
            "cpk", "informasi"
        ]));
    }
}
