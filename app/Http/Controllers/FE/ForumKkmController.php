<?php

namespace App\Http\Controllers\FE;

use App\Lembaga;
use App\MataPelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumKkmController extends Controller
{
    public function forum($id_l)
    {
        $mp      = MataPelajaran::where("lembaga_id", $id_l)->isKkm()->get();
        $lembaga = Lembaga::findOrFail($id_l);

        return view("fe.forum-kkm.menu", compact([
            "mp", "lembaga"
        ]));
    }

}
