<?php

namespace App\Http\Controllers;

use App\User;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AnggotaStoreRequest;
use App\Http\Requests\AnggotaMgmpUpdateRequest;

class AnggotaController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAnggotaMgmp()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->isMgmp()->get();

        return view("anggota-mgmp.index", compact(["users", "mp"]));
    }    

    public function store(AnggotaStoreRequest $request)
    {
        $data = $request->validated();


        $data["password"]  = Hash::make($request->password);
        $data["role"]      = 3;

        $user = User::create($data);

        $user->mata_pelajaran()->associate($request->mata_pelajaran);
        $user->save();

        return redirect("admin/anggota-mgmp")->withSuccess("Anggota Mgmp berhasil ditambahkan");
    }

    public function edit($uuid)
    {
        $user = User::where("uuid", $uuid)->firstOrFail();

        return view("anggota-mgmp.edit", compact("user"));
    }

    public function update(AnggotaMgmpUpdateRequest $request, $uuid)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);

        $user = User::where("uuid", $uuid)->firstOrFail();

        $user->update($data);

        return redirect("/admin/anggota-mgmp")->withSuccess("Akun $user->email berhasil diedit");
    }

    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("admin/anggota-mgmp")->withSuccess("Anggota Mgmp berhasil dihapus");
    }
}
