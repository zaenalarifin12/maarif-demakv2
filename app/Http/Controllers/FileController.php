<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($filename)
    {
        try {
            return response()->download(Storage_path("app/public/". $filename), null, [], null);
        } catch (\Exception $th) {
            return "File not found";
        }
        
    }
}
