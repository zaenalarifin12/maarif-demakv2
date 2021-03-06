<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eprint;
use App\CategoryEprint;
use App\KaryaIlmiah;
use App\CategoryProgramKegiatan;
use App\Digital;

class PublikasiController extends Controller
{
    public function eprint()
    {
        $c      = CategoryProgramKegiatan::findOrFail(5);
        $eprint = Eprint::where("category_program_kegiatan_id", $c->id)->latest()->paginate(10);

        $ce     = CategoryEprint::orderBy("nama", "asc")->get();

        return view("fe.publikasi.eprint", compact([
            "eprint", "ce"
        ]));
        
    }

    public function digital()
    {
        
        $c       = CategoryProgramKegiatan::findOrFail(5);
        $digital = Digital::where("category_program_kegiatan_id", $c->id)->first();

        return view("fe.publikasi.digital", compact([
            "digital"
        ]));
    }

    public function karyaIlmiah()
    {
        $karyaIlmiah = KaryaIlmiah::latest()->paginate(10);

        return view("fe.publikasi.karya", compact("karyaIlmiah"));
    }
}
