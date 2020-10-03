<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IsiLembaga;
use App\Lembaga;

class IsiLembagaController extends Controller
{
    public function index($id_lembaga)
    {
        $lembaga = Lembaga::findOrFail($id_lembaga);
        $isi_lembaga = IsiLembaga::where("lembaga_id", $id_lembaga)->first();

        return view("lembaga.index", compact(["isi_lembaga", "lembaga"]));
    }

    public function create($id_lembaga)
    {
        $lembaga = Lembaga::findOrFail($id_lembaga);
        $isi_lembaga = IsiLembaga::where("lembaga_id", $id_lembaga)->first();

        return view("lembaga.create", compact(["isi_lembaga", "lembaga"]));
    }

    public function store(Request $request, $id_lembaga)
    {
        $request->validate([
            "deskripsi" => "required"
        ]);

        $lembaga = Lembaga::findOrFail($id_lembaga);
        
        $isi_lembaga = IsiLembaga::where("lembaga_id", $id_lembaga)->delete();
        
        $isi_lembaga = IsiLembaga::create([
            "deskripsi"     => $request->deskripsi,
            "lembaga_id"    => $lembaga->id,
        ]);
        return redirect("/admin/lembaga/$id_lembaga/isi-lembaga")->withSuccess("isi lembaga $lembaga->nama berhasil diedit");
    }
}
