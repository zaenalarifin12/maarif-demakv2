<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Services\UploadFileServices;


class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = urlencode($request->search);

        $category = Category::get();

        if(!empty($search))
            $article = Article::where("category_id", $search)->get();
        else
            $article = Article::get();

        return view("article.index", compact(["article", "category"]));
    }

    public function create()
    {
        $category = Category::get();

        return view("article.create", compact("category"));
    }

    public function store(ArticleRequest $request)
    {
        // masih belum validaasi

        // 'gambar' => 'required|mimes:jpeg,png|max:10240',

        $category = Category::findOrFail($request->category);
        
        $nama = UploadFileServices::image($request, "banner");

        
        Article::create([
            "banner"        => $nama,
            "judul"         => $request->judul,
            "deskripsi"     => $request->deskripsi,
            "category_id"      => $request->category
        ]);

        return redirect("/admin/article")->withSuccess($category->nama . " berhasil ditambahkan");
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view("article.show", compact(["article"]));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        $category = Category::get();

        return view("article.edit", compact(["article", "category"]));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $category = Category::findOrFail($request->category);

        if ($request->hasFile("banner")) {
            $nama = UploadFileServices::image($request, "banner");
        
            $article->update([
                "banner"        => $nama,
                "judul"         => $request->judul,
                "deskripsi"     => $request->deskripsi,
                "category_id"   => $request->category
            ]);
        } else {
            $article->update([
                "judul"         => $request->judul,
                "deskripsi"     => $request->deskripsi,
                "category_id"   => $request->category
            ]);
        }

        return redirect("/admin/article/$article->id")->withSuccess("$category->nama berhasil diedit");
   
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect("/admin/article")->withSuccess("article berhasil ditambahkan");
    }
}
