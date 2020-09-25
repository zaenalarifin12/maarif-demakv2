<?php

namespace App\Http\Controllers;

use App\BannerFasilitas;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;
use Illuminate\Support\Facades\Storage;

class BannerFasilitasController extends Controller
{
    public function index()
    {
        $banner = BannerFasilitas::first();

        return view("menu.profil.banner.index", compact("banner"));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required|mimes:jpeg,png|max:10240',
        ]);

        $nama = UploadFileServices::image($request, "gambar");
        
        $a = BannerFasilitas::first();

        BannerFasilitas::query()->truncate();
        
        BannerFasilitas::create([
            "banner_fasilitas" => $nama
        ]);

        return redirect("/admin/profil/banner-fasilitas")->withSuccess("gambar berhasil diperbarui");
    }
}
