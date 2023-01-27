<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SiswaStoreRequest;
use App\Http\Requests\SiswaUpdateRequest;


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

    public function store(SiswaStoreRequest $request)
    {
        $data = $request->validated();
        $data["password"] = Hash::make($request->password);

        Siswa::create($data);

        return redirect("/siswa")->withSuccess("akun berhasil dibuat");
    }

    public function edit($no_induk)
    {
        $siswa = Siswa::where("no_induk", "=",$no_induk)->firstOrFail();

        return view("siswa.edit", compact("siswa"));
    }

    public function update(SiswaUpdateRequest $request, $no_induk)
    {
        $data = $request->validated();

        $data["password"]      = Hash::make($request->password);
        
        $siswa = Siswa::where("no_induk", "=",$no_induk)->firstOrFail();
    
        $siswa->update($data);

        return redirect("/siswa")->withSuccess("akun berhasil diperbarui");

    }

    public function destroy($no_induk)
    {

        $siswa = Siswa::where("no_induk", "=",$no_induk)->firstOrFail();

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
        $siswa = Siswa::where("no_induk", "=",$no_induk)->firstOrFail();
        $siswa->update(["status" => 1]);

        return redirect("/siswa")->withSuccess("siswa dengan no induk $no_induk berhasil diaktifkan");
    }

    public function disapprove($no_induk)
    {
        $siswa = Siswa::where("no_induk", "=",$no_induk)->firstOrFail();
        $siswa->update(["status" => 0]);

        return redirect("/siswa")->withSuccess("siswa dengan no induk $no_induk berhasil dinonaktifkan");
    }

    //TODO NONAKTIFKAN PER INDIVIDU / PILIH

}
