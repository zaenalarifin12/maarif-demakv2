<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::isNotAdmin()->latest()->get();

        return view("users.index", compact("user"));
    }    

    public function store(UserRequest $request)
    {
        $request->validated();
        
        User::create([
            "email"     => $request->email,
            "name"      => $request->name,
            "role"      => $request->role,
            "status"    => 1,
            "password"  => $request->password
        ]);

        return redirect("admin/users")->withSuccess("pengguna berhasil ditambahkan");
    }

    //update

    public function destroy($id)
    {
        // validasi request
        // TODO
        $user = User::findOrFail($id);
        $user->delete();

        return redirect("admin/users")->withSuccess("pengguna berhasil dihapus");
    }

    
}
