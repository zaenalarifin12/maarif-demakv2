<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::get();
        
        return view("siswa.index", compact("siswa"));
    }

    public function create()
    {
        return view("siswa.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama"          => "required",
            "no_induk"      => 'required',
            "asal_sekolah"  => "required",
            "email"         => "required|string|email|unique:siswas,email",
            "password"     =>  "required|string|min:8"
        ]);

        Siswa::create([
            "nama"          => $request->nama,
            "no_induk"      => $request->no_induk,
            "asal_sekolah"  => $request->asal_sekolah,
            "email"         => $request->email,
            "password"      => Hash::make($request->password)
        ]);

    return redirect("/siswa")->withSuccess("akun berhasil dibuat");
    }

    public function edit($no_induk)
    {
        $siswa = Siswa::findOrFail($no_induk);

        return view("siswa.edit", compact("siswa"));
    }

    public function update(Request $request, $no_induk)
    {
        $request->validate([
            "nama"          => "required",
            "no_induk"      => 'required',
            "asal_sekolah"  => "required",
            // "email"         => "required|string|email",
            "password"     =>  "nullable|string|min:8"
        ]);

        $siswa = Siswa::findOrFail($no_induk);
    
        $siswa->update([
            "nama"          => $request->nama,
            "no_induk"      => $request->no_induk,
            "asal_sekolah"  => $request->asal_sekolah,
            // "email"         => $request->email, FIXME EMAIL TIDAK USAH DIUPDATE
            "password"      => Hash::make($request->password)
        ]);

        return redirect("/siswa")->withSuccess("akun berhasil diperbarui");

    }

    public function destroy($no_induk)
    {
        $siswa = Siswa::findOrFail($no_induk);
        $siswa->delete();

        return redirect("/siswa")->withSuccess("siswa berhasil dihapus");
    }

    public function approve_all(Request $request)
    {
        Siswa::where("status", 0)->update(["status" => 1]);

        return redirect("/siswa")->withSuccess("semua siswa berhasil diaktifkan");
    }

    // setujui individu
    public function approve($no_induk)
    {
        $siswa = Siswa::findOrFail($no_induk);
        $siswa->update(["status" => 1]);

        return redirect("/siswa")->withSuccess("siswa dengan no induk $no_induk berhasil diaktifkan");
    }

    public function disapprove($no_induk)
    {
        $siswa = Siswa::findOrFail($no_induk);
        $siswa->update(["status" => 0]);

        return redirect("/siswa")->withSuccess("siswa dengan no induk $no_induk berhasil dinonaktifkan");
    }

    //TODO NONAKTIFKAN PER INDIVIDU / PILIH

}
