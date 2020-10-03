<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Siswa;
use Illuminate\Support\Facades\Hash;

class SiswaAuthController extends Controller
{
    public function loginView()
    {
        return view("auth.loginSiswa");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email"     => "required",
            "password"  => "required"
        ]);

        $siswa = Siswa::where("email", $request->email)->first();
        
        if (!empty($siswa) ) {
            if(Hash::check($request->password, $siswa->password)) {   
                if (Auth::guard("siswa")->attempt(["email" => $request->email, "password" => $request->password, "status" => 1])) {
                        return redirect()->intended('/');
                } else return back()->withErrors("akun anda belum aktif")->withInput();
            } else return back()->withErrors("password anda tidak valid")->withInput();
        } else return back()->withErrors("email anda belum terdaftar")->withInput();
        
    }
}
