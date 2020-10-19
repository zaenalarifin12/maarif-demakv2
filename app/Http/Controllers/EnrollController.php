<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MataPelajaran;
use App\User;

// FIXME APAKAH MASIH ADA
class EnrollController extends Controller
{
    public function index()
    {
        $user = User::whereIn("id", [2,3])->get();
        $mp = MataPelajaran::orderBy("lembaga_id")->get();

        return view("enroll.index", compact("user", "mp"));
    }

    public function enroll(Request $request)
    {
        $this->validate($request, [
            "id"                => "required",
            "mata_pelajaran"    => "required"
        ]);

        $user = User::findOrFail($request->id);

        /**
         * TODO
         */
        // if adminmgmp maka attach > 1
        // else anggota maka hanya 1
        $user->mata_pelajarans()->sync($request->mata_pelajaran);

        return redirect("/admin/enroll")->withSuccess("pengguna berhasil dienroll");

    }
}
