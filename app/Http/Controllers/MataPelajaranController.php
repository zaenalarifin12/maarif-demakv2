<?php

namespace App\Http\Controllers;

use App\Lembaga;
use App\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index($id_lembaga)
    {
        
        $lembaga =  Lembaga::findOrFail($id_lembaga);
        $mata_pelajaran = MataPelajaran::where("lembaga_id", $id_lembaga)->get();        

        return view("mata-pelajaran.index", compact(["mata_pelajaran", "lembaga"]));
    }

    public function create()
    {
        // return view("menu.forum-mgmp.mata-pelajaran.create");
    }

    public function store(Request $request, $id_lembaga)
    {
        $lembaga =  Lembaga::findOrFail($id_lembaga);

        MataPelajaran::create([
            "nama"          => $request->nama,
            "lembaga_id"    => $id_lembaga
        ]);

        return redirect("/admin/forum-mgmp/lembaga/$lembaga->id/mata-pelajaran");
    }

    public function update(Request $request, $id_lembaga, $id)
    {
        Lembaga::findOrFail($id_lembaga);
        $mata = MataPelajaran::findOrFail($id);
        $mata->update([
            "nama"  => $request->nama
        ]);

        return redirect("/admin/forum-mgmp/lembaga/$id_lembaga/mata-pelajaran")->withSuccess("berhasil mengedit mata pelajaran");
    }

    public function destroy($id_lembaga, $id)
    {
        Lembaga::findOrFail($id_lembaga);
        $mata = MataPelajaran::findOrFail($id);
        $mata->delete();

        return redirect("/admin/forum-mgmp/lembaga/$id_lembaga/mata-pelajaran")->withSuccess("berhasil menghapus mata pelajaran");
    }
}
