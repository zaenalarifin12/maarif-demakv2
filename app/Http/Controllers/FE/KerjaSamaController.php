<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KerjaSama;

class KerjaSamaController extends Controller
{
    public function kerjaSama()
    {
        $kerja_sama = KerjaSama::get();

        return view("fe.kerja-sama", compact("kerja_sama"));
    }    
}
