<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Siswa;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SiswaRegisterRequest;
use App\Http\Requests\SiswaLoginRequest;

class SiswaAuthController extends Controller
{
    public function loginView()
    {
        return view("auth.loginSiswa");
    }

    public function login(SiswaLoginRequest $request)
    {
        $request->validated();

        $siswa = Siswa::where("email", $request->email)->first();
        
        if (!empty($siswa) ) {
            if(Hash::check($request->password, $siswa->password)) {   
                if (Auth::guard("siswa")->attempt(["email" => $request->email, "password" => $request->password, "status" => 1])) {
                        return redirect()->intended('/');
                } else return back()->withErrors("akun anda belum aktif")->withInput();
            } else return back()->withErrors("password anda tidak valid")->withInput();
        } else return back()->withErrors("email anda belum terdaftar")->withInput();
        
    }

    public function register(SiswaRegisterRequest $request)
    {
      $data = $request->validated();
      $data["password"] = Hash::make($request->password);
      $data["token"]    = sha1(time());

      $siswa = Siswa::create($data);

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
