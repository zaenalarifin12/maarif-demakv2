<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lembaga;
use App\IsiLembaga;

class LembagaController extends Controller
{
    public function index($id)
    {
        $lembaga = Lembaga::findOrFail($id);
        $isiLembaga = IsiLembaga::where("lembaga_id", $id)->first();

        return view("fe.lembaga.sekolah", compact([
            "lembaga", "isiLembaga"
        ]));
    }
}
