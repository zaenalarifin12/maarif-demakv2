<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Article;

class InformasiController extends Controller
{
    public function index($id)
    {
        /**
         * TODO
         * GANTI MENJADI SLUG
         *  */        
        $category = Category::findOrFail($id);
        
        $article = Article::where("category_id", $id)->latest()->paginate(4);
        
        return view("fe.informasi.index", compact(["article", "category"]));
    }

    public function show($idc, $id)
    {
        /**
         * TODO
         * GANTI MENJADI SLUG
        
         *  */        
        
        $category = Category::findOrFail($idc);

        $article = Article::where("id", $id)->where("category_id", $idc)->firstOrFail();

        // FIXME NEXT AND PREV
        return view("fe.informasi.show", compact(["article", "category"]));
    }
}
