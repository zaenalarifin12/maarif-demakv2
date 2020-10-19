<?php

namespace App\Http\Controllers;

use App\User;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AnggotaStoreRequest;

class AnggotaController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAnggota()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->get();

        return view("anggota-mgmp.index", compact(["users", "mp"]));
    }    

    public function store(AnggotaStoreRequest $request)
    {
        $data = $request->validated();


        $data["password"]  = Hash::make($request->password);
        $data["role"]      = 2;

        $user = User::create($data);

        $user->mata_pelajaran()->associate($request->mata_pelajaran);
        $user->save();

        return redirect("admin/anggota-mgmp")->withSuccess("Anggota Mgmp berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("admin/anggota-mgmp")->withSuccess("Anggota Mgmp berhasil dihapus");
    }
}
