<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BannerFasilitas;
use App\Fasilitas;
use App\VisiMisi;
use App\JajaranPengurus;

class ProfilController extends Controller
{
    public function visi_misi()
    {
        $visiMisi = VisiMisi::first();
        return view("fe.profil.visiMisi", compact("visiMisi"));
    }

    public function jajaran()
    {
        $jajaran = JajaranPengurus::get();

        return view("fe.profil.jajaran", compact("jajaran"));
    }

    public function fasilitas()
    {
        $banner = BannerFasilitas::first();
        $fasilitas = Fasilitas::get();
        
        return view("fe.profil.fasilitas", compact([
            "banner",
            "fasilitas"
        ]));
    }
}
