<?php

namespace App\Services;

class UploadFileServices {
    
    public static function image($request, $name, $type = 1){
        
        $originName = $request->file($name)->getClientOriginalName();
        $fileName = pathinfo(trim($originName), PATHINFO_FILENAME);
        $extension = $request->file($name)->getClientOriginalExtension();
        $fileName = trim($fileName).'_'.time().'.'.$extension;

        if($type == 0)
        {
            $a = $request->file($name)->storeAs(
                "public/files", $fileName
            );
        }else{
            $a = $request->file($name)->storeAs(
                "public", $fileName
            );
        }

        return $fileName;
    }
}