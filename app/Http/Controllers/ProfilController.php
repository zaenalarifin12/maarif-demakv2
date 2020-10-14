<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JajaranPengurus;
use App\JajaranPengurusOrang;
use App\Services\UploadFileServices;

class ProfilController extends Controller
{
    public function index()
    {
        $jajaran = JajaranPengurus::get();

        return view("menu.profil.jajaran.index", compact("jajaran"));
    }

    public function store(Request $request, $uuid)
    {
        $request->validate([
            "nama"          => "required",
            "foto"          => "required"
        ]); 

        $jajaran = JajaranPengurus::where("uuid", $uuid)->firstOrFail();

        $nama = UploadFileServices::image($request, "foto");

        $orang = new JajaranPengurusOrang([
            "nama" => $request->nama,
            "foto" => $nama,
        ]);

        $jajaran->jajaranPengurusOrang()->save($orang);

        return redirect("/admin/profil/jajaran")->withSuccess("foto $jajaran->nama berhasil disimpan");
    }

    public function destroy($uuid)
    {
        $j = JajaranPengurusOrang::where("uuid", $uuid)->first();

        $jabatan = $j->jajaranPengurus->nama;
        
        $j->delete();

        return redirect("/admin/profil/jajaran")->withSuccess("foto $jabatan berhasil dihapus");
    }
}
