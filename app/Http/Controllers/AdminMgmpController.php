<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MataPelajaran;
use Illuminate\Support\Facades\Hash;

class AdminMgmpController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAdminMgmp()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->get();

        return view("admin-mgmp.index", compact(["users", "mp"]));
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
            "role"              => 3,
        ]);

        $user->mata_pelajaran()->associate($request->mata_pelajaran);
        $user->save();

        return redirect("admin/admin-mgmp")->withSuccess("Admin Mgmp berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("admin/admin-mgmp")->withSuccess("Admin Mgmp berhasil dihapus");
    }
}
