<?php

namespace App\Http\Controllers;

use App\Lembaga;
use App\MataPelajaran;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view("menu.index");
    }

    public function home()
    {
        return view("menu.home");
    }

    public function profil()
    {
        return view("menu.profil");
    }

    public function sekolah()
    {
        $lembaga = Lembaga::get();
        
        return view("menu.sekolah", compact("lembaga"));
    }

    public function forum_kkm()
    {
        $lembaga        = Lembaga::get();
        $mata_pelajaran = MataPelajaran::get();

        return view("menu.forum-kkm", compact(["mata_pelajaran", "lembaga"]));
    }

    public function forum_mgmp()
    {
        $lembaga = Lembaga::get();
        $mata_pelajaran = MataPelajaran::get();

        return view("menu.forum-mgmp", compact(["mata_pelajaran", "lembaga"]));
    }

    public function unit()
    {
        return view("menu.unit");
    }

    public function publikasi()
    {
        return view("menu.publikasi");
    }

    public function kerja_sama()
    {
        return view("menu.kerja-sama");
    }

}
