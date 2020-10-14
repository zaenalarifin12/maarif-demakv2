<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Siswa;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\VerifyEmail;

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


    public function register(Request $request)
    {
        $request->validate([
            "nama"          => "required",
            "no_induk"      => 'required|numeric|unique:siswas,no_induk',
            "asal_sekolah"  => "required",
            "email"         => "required|string|email|unique:siswas,email",
            "password"     =>  "required|string|min:8"
        ]);

        $siswa = Siswa::create([
            "nama"          => $request->nama,
            "no_induk"      => $request->no_induk,
            "asal_sekolah"  => $request->asal_sekolah,
            "email"         => $request->email,
            "password"      => Hash::make($request->password),
            "token"         => sha1(time())
        ]);

        Mail::to($siswa->email)->send(new VerifyEmail($siswa));

        return redirect("/loginSiswa")->withStatus("Silahkan Check Email Anda");
    }

    public function verifyUser($token)
    {
        $verifyUser = Siswa::where('token', $token)->first();
        if(isset($verifyUser) ){
          $user = $verifyUser->user;
          if(!$user) {
            $verifyUser->status = 1;
            $verifyUser->save();
            $status = "Your e-mail is verified. You can now login.";
          } else {
            $status = "Your e-mail is already verified. You can now login.";
          }
        } else {
          return redirect('/loginSiswa')->with('warning', "Sorry your email cannot be identified.");
        }
        return redirect('/loginSiswa')->with('status', $status);
      }
}
