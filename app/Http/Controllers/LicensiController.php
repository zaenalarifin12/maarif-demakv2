<?php

namespace App\Http\Controllers;

use App\Licensi;
use Illuminate\Http\Request;

class LicensiController extends Controller
{

    public function create()
    {
        
        $licensi = Licensi::first();
        
        return view("licensi.index", compact("licensi"));
    }

    public function store(Request $request)
    {
        Licensi::query()->truncate();

        Licensi::create([
            "nama"      => $request->nama,
            "alamat"    => $request->alamat,
            "email"     => $request->email,
            "telepone"  => $request->telepone,
            "jadwal"    => $request->jadwal,
            "hotline"   => $request->hotline,
            "facebook"  => $request->facebook,
            "instagram" => $request->instagram,
            "youtube"   => $request->youtube,
            "twitter"   => $request->twitter,
        ]);

        return redirect("/admin/licensi")->withSuccess("licensi berhasil diperbarui");;
    }
}
