<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{

    public function create()
    {
        $visiMisi = VisiMisi::first();
        
        return view("visi-misi.index", compact("visiMisi"));
    }

    public function store(Request $request)
    {
        VisiMisi::query()->truncate();

        VisiMisi::create([
            "deskripsi"     => $request->deskripsi,
        ]);

        return redirect("/admin/profil/visi-misi")->withSuccess("Visi Misi berhasil diperbarui");;
    }
}
