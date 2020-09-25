<?php

namespace App\Http\Controllers;

use App\KerjaSama;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'      => 'required',
            'gambar'    => 'required|mimes:jpeg,png|max:10240',
        ]);

        $nama = UploadFileServices::image($request, "gambar");

        KerjaSama::create([
            "nama"      => $request->nama,
            "gambar"    => $nama
        ]);

        return redirect("admin/kerja-sama")->withSuccess("data kerja sama berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $kerjaSama = KerjaSama::findOrFail($id);
        $kerjaSama->delete();

        return redirect("/admin/kerja-sama")->withSuccess("data kerja sama berhasil dihapus");
    }
}
