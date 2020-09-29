<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\MataPelajaran;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAnggota()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->get();

        return view("anggota-mgmp.index", compact(["users", "mp"]));
    }    

    public function store(Request $request)
    {
        $this->validate($request, [
            "name"              => "required",
            "email"             => "required|email|unique:users",
            "password"          => "required|string|min:8",
            "mata_pelajaran"    => "required"
        ]);

        $user = User::create([
            "name"              => $request->name,
            "email"             => $request->email,
            "password"          => Hash::make($request->password),
            "role"              => 2,
        ]);

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
