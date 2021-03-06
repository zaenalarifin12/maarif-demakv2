<?php

namespace App\Http\Controllers;

use App\CategoryEprint;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryEprintStoreRequest;

class CategoryEprintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_eprint = CategoryEprint::latest()->get();

        return view("category-eprint.index", compact("category_eprint"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryEprintStoreRequest $request)
    {
        $data = $request->validated();

        CategoryEprint::create($data);

        return redirect("/admin/category-eprint")->withSuccess("kategori eprint berhasil ditambahkan");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryEprint  $categoryEprint
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryEprintStoreRequest $request, $id)
    {
        $data = $request->validated();

        $category = CategoryEprint::findOrFail($id);

        $category->update($data);

        return redirect("/admin/category-eprint")->withSuccess("kategori eprint berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryEprint  $categoryEprint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryEprint::findOrFail($id);
        $category->delete();

        return redirect("/admin/category-eprint")->withSuccess("kategori eprint berhasil dihapus");
    }
}
