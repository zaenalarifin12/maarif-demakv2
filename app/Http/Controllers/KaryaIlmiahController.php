<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Services\UploadFileServices;
use Illuminate\Http\Request;
use App\KaryaIlmiah;
// use App\

class KaryaIlmiahController extends Controller
{
    public function index()
    {
        $karya = KaryaIlmiah::latest()->get();
        return view("karya.index", compact("karya"));
    }

    public function create()
    {
        return view("karya.create");
    }

    public function store(Request $request)
    {
        // TODO VALIDASI
        $nama = UploadFileServices::image($request, "banner", 0);

        KaryaIlmiah::create([
            "banner"    => $nama,
            "judul"     => $request->judul,
            "pengarang" => $request->pengarang,
            "deskripsi" => $request->deskripsi
        ]);

        return redirect("admin/karya")->withSuccess("karya ilmiah berhasil diupload");
    }

    public function show($id)
    {
        $karya = KaryaIlmiah::findOrFail($id);

        return view("karya.show", compact("karya"));
    }

    public function edit($id)
    {
        $karya = KaryaIlmiah::findOrFail($id);

        return view("karya.edit", compact("karya"));
    }

    public function update(Request $request, $id)
    {
        // TODO VALIDASI
        $karya = KaryaIlmiah::findOrFail($id);
        
        if($request->has("banner")){
            $nama = UploadFileServices::image($request, "banner", 0);

            $karya->update([
                "banner"    => $nama,
                "judul"     => $request->judul,
                "pengarang" => $request->pengarang,
                "deskripsi" => $request->deskripsi
            ]);

        }else{
            $karya->update([
                "judul"     => $request->judul,
                "pengarang" => $request->pengarang,
                "deskripsi" => $request->deskripsi
            ]);
        }
    
        return redirect("/admin/karya")->withSuccess("karya ilmiah sudah berhasil diperbarui");
    }

    public function destroy($id)
    {
        $karya = KaryaIlmiah::findOrFail($id);
        
        $karya->delete();

        return redirect("/admin/karya")->withSuccess("karya berhasil dihapus");
    }

}
