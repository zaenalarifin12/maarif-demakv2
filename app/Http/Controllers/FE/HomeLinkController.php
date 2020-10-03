<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Informasi;

class HomeLinkController extends Controller
{
    public function informasi()
    {
        $informasi = Informasi::where("category_program_kegiatan_id", 4)->latest()->paginate(10);

        return view("fe.home.link.informasi-blk", compact([
            "informasi"
        ]));
    }

    public function event()
    {
        $event = Event::with(["mata_pelajaran", "mata_pelajaran.lembaga"])->where("mata_pelajaran_id", "!=", null)->latest()->simplePaginate(10);

        return view("fe.home.link.event-mgmp", compact("event"));
    }    
}
