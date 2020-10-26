<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;


class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search = urlencode($request->search);

        $category = Category::latest()->get();

        if(!empty($search))
            $article = Article::where("category_id", $search)->latest()->get();
        else
            $article = Article::latest()->get();

        return view("article.index", compact(["article", "category"]));
    }

    public function create()
    {
        $category = Category::get();

        return view("article.create", compact("category"));
    }

    public function store(ArticleStoreRequest $request)
    {
        $data = $request->validated();

        $nama = UploadFileServices::image($request, "gambar");

        $data["banner"] = $data["gambar"];
        unset($data["gambar"]);
        $data["banner"] = $nama;

        Article::create($data);

        $category = Category::findOrFail($request->category_id);

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

    public function update(ArticleUpdateRequest $request, $id)
    {

        $data = $request->validated();

        $article = Article::findOrFail($id);

        $category = Category::findOrFail($request->category_id);
        
        if ($request->hasFile("gambar")) {
            $nama = UploadFileServices::image($request, "gambar");
            
            $data["banner"] = $data["gambar"];
            unset($data["gambar"]);
            $data["banner"] = $nama;

            $article->update($data);

        } else {

            $article->update($data);

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
