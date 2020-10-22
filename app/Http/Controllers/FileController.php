<?php

namespace App\Http\Controllers;

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
}
