<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lembaga;
use App\MataPelajaran;
use App\Galeri;
use App\CategoryProgramKegiatan;
use App\Eprint;
use App\CategoryEprint;
use App\Digital;
use App\Event;
use App\ProgramKegiatan;

class ForumMGMPController extends Controller
{
    public function forum($id_l)
    {
        $mp      = MataPelajaran::where("lembaga_id", $id_l)->get();
        $lembaga = Lembaga::findOrFail($id_l);

        return view("fe.forum-mgmp.menu", compact([
            "mp", "lembaga"
        ]));
    }

    public function program($id_l, $id_mp)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);
        
        $c       = CategoryProgramKegiatan::findOrFail(1);
        $program   = Programkegiatan::where("mata_pelajaran_id", $id_mp)
                    ->where("category_program_kegiatan_id", $c->id)->first();
        
        return view("fe.forum-mgmp.program", compact([
            "program", "lembaga", "mp"
        ]));
    }

    public function galeri($id_l, $id_mp)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);

        $c      = CategoryProgramKegiatan::findOrFail(1);
        $galeri = Galeri::where("mata_pelajaran_id", $id_mp)->where("category_program_kegiatan_id", $c->id)->get();

        return view("fe.forum-mgmp.galeri", compact([
            "galeri", "lembaga", "mp"
        ]));
    }    

    public function eprint($id_l, $id_mp)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);

        $c      = CategoryProgramKegiatan::findOrFail(1);
        $eprint = Eprint::where("mata_pelajaran_id", $id_mp)->where("category_program_kegiatan_id", $c->id)->latest()->paginate(10);

        $ce     = CategoryEprint::orderBy("nama", "asc")->get();

        return view("fe.forum-mgmp.eprint", compact([
            "eprint", "lembaga", "mp", "ce"
        ]));
    }

    public function digital($id_l, $id_mp)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);

        $c      = CategoryProgramKegiatan::findOrFail(1);
        
        $digital = Digital::where("mata_pelajaran_id", $id_mp)
                    ->where("category_program_kegiatan_id", $c->id)->paginate(10);

        return view("fe.forum-mgmp.digital", compact([
            "digital", "lembaga", "mp"
        ]));
    }

    public function event($id_l, $id_mp)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);
        
        $c       = CategoryProgramKegiatan::findOrFail(1);
        $event   = Event::where("mata_pelajaran_id", $id_mp)
                    ->where("category_program_kegiatan_id", $c->id)->latest()->paginate(3);
        
        return view("fe.forum-mgmp.event", compact([
            "event", "lembaga", "mp"
        ]));
    }

    public function eventShow($id_l, $id_mp, $id)
    {
        $lembaga = Lembaga::findOrFail($id_l);
        $mp      = MataPelajaran::findOrFail($id_mp);
        
        $c       = CategoryProgramKegiatan::findOrFail(1);
        $event   = Event::where("mata_pelajaran_id", $id_mp)
                    ->where("category_program_kegiatan_id", $c->id)->findOrFail($id);
        
        return view("fe.forum-mgmp.eventShow", compact([
            "event", "lembaga", "mp"
        ]));
    }
}
