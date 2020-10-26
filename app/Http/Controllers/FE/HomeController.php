<?php

namespace App\Http\Controllers\FE;

use App\Video;
use App\Article;
use App\KerjaSama;
use App\BannerHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        Alert::alert('Title', 'Message', 'Type');
        $berita     = Article::isBerita()->take(4)->latest()->get();
        $pengumuman = Article::isPengumuman()->take(2)->latest()->get();
        $agenda     = Article::isAgenda()->take(2)->latest()->get();
        $video      = Video::first();
        $kerjaSama  = KerjaSama::get();
        $banner     = BannerHome::get();         

        return view("fe.home.index", compact([
            "berita",
            "pengumuman",
            "agenda",
            "video",
            "kerjaSama",
            "banner"
        ]));
    }
}
