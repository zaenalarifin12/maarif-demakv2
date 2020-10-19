<?php

namespace App\Http\Controllers;

use App\Fasilitas;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FasilitasStoreRequest;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::get();

        return view("menu.profil.fasilitas.index", compact("fasilitas"));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FasilitasStoreRequest $request)
    {
        $data = $request->validated();

        $nama = UploadFileServices::image($request, "gambar");

        $data["gambar"] = $nama;
        Fasilitas::create($data);

        return  redirect("/admin/profil/fasilitas")->withSuccess("fasilitas berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * TODO
     * EDIT FASILITAS BELUM DIBUAT
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        Storage::delete($fasilitas->gambar);

        $fasilitas->delete();

        return redirect("/admin/profil/fasilitas")->withSuccess("fasilitas berhasil dihapus");
    }
}
