<?php

namespace App\Http\Controllers;

use App\KerjaSama;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;
use App\Http\Requests\KerjaSamaStoreRequest;

class KerjaSamaController extends Controller
{

    public function index()
    {
        $kerjaSama = KerjaSama::get();

        return view("menu.kerja-sama.index", compact("kerjaSama"));
    }

    public function create()
    {
        return view("menu.kerja-sama.create");
    }

    public function store(KerjaSamaStoreRequest $request)
    {
        $data = $request->validated();

        $nama = UploadFileServices::image($request, "gambar");
        
        $data["gambar"] = $nama;

        KerjaSama::create($data);

        return redirect("admin/kerja-sama")->withSuccess("Logo Kerja sama berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $kerjaSama = KerjaSama::findOrFail($id);
        $kerjaSama->delete();

        return redirect("/admin/kerja-sama")->withSuccess("Logo Kerja sama berhasil dihapus");
    }
}
