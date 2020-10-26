<?php

namespace App\Http\Controllers;

use App\Eprint;
use App\MataPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function download($filename)
    {
        // return Auth::check();
        // die();
        try {
            // return response()->download(Storage_path("app/public/files". $filename), null, [], null);
            return response()->download("storage/$filename", null, [], null);
        } catch (\Exception $th) {
            return "File not found";
        }
        
    }

    public function downloadMgmp($filename)
    {
        
        //==== logika


        /**
         *  jika user adalah admin || user mata pelajaran ttd boleh mendownload
         *  jika user tidak sama dengan id mata pelajaran maka retur login/403
         * 
         * 
         * 
         */

        $e = Eprint::where("banner", $filename)->firstOrFail();
        if(Auth::check()){
            
            if (Auth::user()->checkIsAdmin() || Auth::user()->mata_pelajaran->id == $e->mata_pelajaran->id) {
                try {
                    // return response()->download(Storage_path("app/public/files". $filename), null, [], null);
                    return response()->download("storage/$filename", null, [], null);
                } catch (\Exception $th) {
                    return "File not found";
                }
            }else{
                
                // return redirect()->back();
                return redirect()->back()->withWarning('Anda Tidak Boleh Melihat File Ini');
            }
        }else{
            return redirect("/login")->with(["warning"=>"Success!"]);
        }
        
        
        
    }
}
