<?php

namespace App\Http\Controllers;

use App\Eprint;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function public($filename)
    {
        try {
            return response()->download("storage/$filename", null, [], null);
        } catch (\Exception $th) {
            return abort(404);
        }
        
    }

    public function siswa($filename)
    {   
        try {
            // TODO protek folder untuk supaya tidak bisa mengganti url
            return response()->download("storage/$filename", null, [], null);
        } catch (\Exception $th) {
            return abort(404);
        }
    }

    public function anggota($filename)
    {
        $e = Eprint::where("banner", $filename)->firstOrFail();
            
        if (Auth::user()->checkIsAdmin() || Auth::user()->mata_pelajaran->id == $e->mata_pelajaran->id) {
            try {
                return response()->download("storage/$filename", null, [], null);
            } catch (\Exception $th) {
                return abort(404);
            }

        }else{

            return redirect()->back()->withWarning('Anda Tidak Boleh Melihat File Ini');
        
        }

    }
}
