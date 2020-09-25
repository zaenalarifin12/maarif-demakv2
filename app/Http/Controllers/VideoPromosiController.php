<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoPromosiController extends Controller
{
    public function index()
    {
        $video = Video::first();
        return view("menu.home.video.index", compact("video"));
    }

    public function store(Request $request)
    {
        Video::query()->truncate();

        Video::create([
            "link"  => $request->link  
        ]);

        return redirect("/admin/video-promosi")->withSuccess("video promosi berhasil diperbarui");
    }
}
