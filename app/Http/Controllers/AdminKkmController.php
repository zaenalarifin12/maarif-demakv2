<?php

namespace App\Http\Controllers;

use App\User;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminKkmStoreRequest;
use App\Http\Requests\AdminKkmUpdateRequest;

class AdminKkmController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAdminKkm()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->isKkm()->get();

        return view("admin-kkm.index", compact(["users", "mp"]));
    }    

    public function store(AdminKkmStoreRequest $request)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);
        $data["role"]      = 4;

        $user = User::create($data);

        $user->mata_pelajaran()->associate($request->mata_pelajaran);
        $user->save();

        return redirect("admin/admin-kkm")->withSuccess("Admin KKM berhasil ditambahkan");
    }

    public function edit($uuid)
    {
        $user = User::where("uuid", $uuid)->firstOrFail();

        return view("admin-kkm.edit", compact("user"));
    }

    public function update(AdminKkmUpdateRequest $request, $uuid)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);

        $user = User::where("uuid", $uuid)->firstOrFail();

        $user->update($data);

        return redirect("/admin/admin-kkm")->withSuccess("Akun $user->email berhasil diedit");
    }

    public function destroy($uuid)
    {
        $user = User::where("uuid", $uuid)->firstOrFail();
        $user->delete();

        return redirect("admin/admin-kkm")->withSuccess("Admin KKM berhasil dihapus");
    }

}
