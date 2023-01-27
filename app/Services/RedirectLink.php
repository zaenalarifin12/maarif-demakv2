<?php

namespace App\Services;

use App\MataPelajaran;
use App\CategoryProgramKegiatan;
use Illuminate\Support\Facades\Redirect;

class RedirectLink {

    public static function checkValidation($request, $id_category, $mata_pelajaran = 0)
    {
        $data = $request->validated(); 

        CategoryProgramKegiatan::findOrFail($id_category);

        $data["category_program_kegiatan_id"] = $id_category;

        $data["mata_pelajaran_id"] = ($mata_pelajaran == 0) ? 0 : $mata_pelajaran; // TODO UBAH DARI NULL KE 0 

        return $data;
    }

    public static function redirect($id_mata_pelajaran, $id_category, $data, $jenis)
    {
        $category       = CategoryProgramKegiatan::findOrFail($id_category);

        if ($id_mata_pelajaran == 0 || $id_mata_pelajaran == null) {

            $data;

            return Redirect::to("/admin/unit/0/category/$id_category/$jenis");
        
        } else {
        
            $mata_pelajaran = MataPelajaran::findOrFail($id_mata_pelajaran);
            
            $data; 

            // TODO JIKA FORUM KKM/FORUM MGMP MAKA REDIRECT |||  DIAMBIL DARI DB
            
            return Redirect::to("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$category->id/$jenis");
        }
    }

    /**
     * fungsi untuk mengecek , apakah mata pelajaranya ada atau ga?
     * DEPRECATED
     */
    public static function checkMataPelajaran($id_mata_pelajaran)
    {
        if ($id_mata_pelajaran == 0) {
            return null;
        }else{
            $mata_pelajaran   = MataPelajaran::findOrFail($id_mata_pelajaran);
            return $mata_pelajaran;
        }
    }

    public static function checkMataPelajaranDanCategory($id_mata_pelajaran, $id_category)
    {
        $category = CategoryProgramKegiatan::findOrFail($id_category);
        if ($id_mata_pelajaran == 0) {
            return [
                "mata-pelajaran"    => null,
                "category"          => $category
            ];
        }else{
            $mata_pelajaran   = MataPelajaran::findOrFail($id_mata_pelajaran);
            return [
                "mata-pelajaran"    => $mata_pelajaran,
                "category"          => $category
            ];
        }
    }



}