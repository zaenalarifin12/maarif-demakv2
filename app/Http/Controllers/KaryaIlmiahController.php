<?php

namespace App\Http\Controllers;

use App\KaryaIlmiah;
use Illuminate\Http\Request;
use App\Services\UploadFileServices;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\KaryaStoreRequest;
use App\Http\Requests\KaryaUpdateRequest;
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

    public function store(KaryaStoreRequest $request)
    {
        $data = $request->validated();
        // TODO VALIDASI
        $nama = UploadFileServices::image($request, "banner", 0);

        $data["banner"] = $nama;

        KaryaIlmiah::create($data);

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

    public function update(KaryaUpdateRequest $request, $id)
    {
        $data = $request->validated();

        $karya = KaryaIlmiah::findOrFail($id);
        
        if($request->has("banner")){
            $nama = UploadFileServices::image($request, "banner", 0);
            
            $data["banner"] = $nama;

            $karya->update($data);

        }else{
            $karya->update($data);
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
