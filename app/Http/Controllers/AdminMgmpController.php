<?php

namespace App\Http\Controllers;

use App\User;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminMgmpStoreRequest;

class AdminMgmpController extends Controller
{
    public function index()
    {
        $users = User::with("mata_pelajaran")->isAdminMgmp()->latest()->get();

        $mp = MataPelajaran::orderBy("lembaga_id")->get();

        return view("admin-mgmp.index", compact(["users", "mp"]));
    }    

    public function store(AdminMgmpStoreRequest $request)
    {
        $data = $request->validated();

        $data["password"]  = Hash::make($request->password);
        $data["role"]      = 3;

        $user = User::create($data);

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
