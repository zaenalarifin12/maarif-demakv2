<?php

namespace App\Http\Controllers;

use App\User;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminMgmpStoreRequest;
use App\Http\Requests\AdminMgmpUpdateRequest;

class AdminMgmpController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAdminMgmp()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->isMgmp()->get();

        return view("admin-mgmp.index", compact(["users", "mp"]));
    }    

    public function store(AdminMgmpStoreRequest $request)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);
        $data["role"]      = 2;

        $user = User::create($data);

        $user->mata_pelajaran()->associate($request->mata_pelajaran);
        $user->save();

        return redirect("admin/admin-mgmp")->withSuccess("Admin Mgmp berhasil ditambahkan");
    }

    public function edit($uuid)
    {
        $user = User::where("uuid", $uuid)->firstOrFail();

        return view("admin-mgmp.edit", compact("user"));
    }

    public function update(AdminMgmpUpdateRequest $request, $uuid)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);

        $user = User::where("uuid", $uuid)->firstOrFail();

        $user->update($data);

        return redirect("/admin/admin-mgmp")->withSuccess("Akun $user->email berhasil diedit");
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("admin/admin-mgmp")->withSuccess("Admin Mgmp berhasil dihapus");
    }
}
