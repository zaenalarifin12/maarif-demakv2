<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = "/admin";
    // protected function authenticated(Request $request, $user)
    // {
    //     if(Auth::guard('web')->check()){
    //         if (    $user->checkisAdmin() || 
    //                 $user->checkIsAdminMgmp() || 
    //                 $user->checkIsAnggotaMgmp() ||
    //                 $user->checkIsAdminKkm() ||
    //                 $user->checkIsAnggotaKkm()
    //                 ) {
                        
    //             return redirect("/admin");
    //             // jika role == 1 , maka ia siswa
    //         }
    //     }
        
    //     return redirect("/");
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
