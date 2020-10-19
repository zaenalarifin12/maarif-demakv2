<?php

namespace App\Http\Controllers;

use App\BannerHome;
use App\Http\Requests\BannerHomeRequest;
use Illuminate\Support\Facades\Storage;
use App\Services\UploadFileServices;
use Illuminate\Http\Request;

class BannerHomeController extends Controller
{

    public function index()
    {
        $banner = BannerHome::get();

        return view("menu.home.banner.index", compact("banner"));
    }

    public function create()
    {
        return view("menu.home.banner.create");
    }

    public function store(BannerHomeRequest $request)
    {
        $data = $request->validated();

        $nama = UploadFileServices::image($request, "gambar");

        BannerHome::create($data);

        return redirect("/admin/home/banner")->withSuccess("foto berhasil diupload");
    }

    public function destroy($id)
    {
        $banner = BannerHome::findOrFail($id);

        Storage::delete($banner->gambar);
        
        $banner->delete();

        return redirect("/admin/home/banner")->withSuccess("foto berhasil dihapus");
    }
}
