<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BannerFasilitas;
use App\Fasilitas;
use App\VisiMisi;

class ProfilController extends Controller
{
    public function visi_misi()
    {
        $visiMisi = VisiMisi::first();
        return view("fe.profil.visiMisi", compact("visiMisi"));
    }

    public function jajaran()
    {
        return view("fe.profil.jajaran");
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
