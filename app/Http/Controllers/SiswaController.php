<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SiswaController extends Controller
{
    public function index()
    {
        $user = User::isSiswa()->get();
        
        return view("siswa.index", compact("user"));
    }

    public function approve(Request $request)
    {
        User::isSiswa()->where("status", 0)->update(["status" => 1]);

        return redirect("/admin/siswa")->withSuccess("semua siswa berhasil diaktifkan");
    }

    //TODO NONAKTIFKAN PER INDIVIDU / PILIH

}
