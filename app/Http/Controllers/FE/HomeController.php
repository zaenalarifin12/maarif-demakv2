<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use App\KerjaSama;
use App\Video;
use App\BannerHome;

class HomeController extends Controller
{
    public function index()
    {
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
