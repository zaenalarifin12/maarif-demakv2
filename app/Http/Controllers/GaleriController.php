<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\MataPelajaran;
use App\CategoryProgramKegiatan;
use App\Lembaga;

use Illuminate\Http\Request;
use App\Http\Requests\GaleriRequest;
use App\Services\UploadFileServices;
use Illuminate\Support\Facades\Storage;


class GaleriController extends Controller
{
    public function index($id_mp, $id_category)
    {
        $categoryProgramKegiatan = CategoryProgramKegiatan::findOrFail($id_category);
        
        /**
         * NOTE 
         * jika tidak termasuk dan mata-pelajaran -> itu ada program kegiatan
         */
        if ($id_mp == 0) {
            $mata_pelajaran = null;

            $galeri = Galeri::
                where("mata_pelajaran_id", null)->
                where("category_program_kegiatan_id", $id_category)->paginate(10);
        }else{
            $mata_pelajaran = MataPelajaran::findOrFail($id_mp);
            
            $galeri = Galeri::where("mata_pelajaran_id", $id_mp)->paginate(10);
        }

        return view("galeri.index", compact([
            "mata_pelajaran", 
            "galeri", 
            "categoryProgramKegiatan"
        ]));
    }


    public function store(GaleriRequest $request, $id, $id_category)
    {
        
        $validated = $request->validated();

        $categoryProgramKegiatan = CategoryProgramKegiatan::findOrFail($id_category);

        $nama = UploadFileServices::image($request, "banner");
        
        if ($id == 0) {
            $mata_pelajaran = null;

            $galeri = Galeri::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => null,
                "category_program_kegiatan_id"  => $id_category
            ]);

            return redirect("admin/unit/0/category/$id_category/galeri")
            ->withSuccess("galeri berhasil ditambahkan");

        }else{

            $mata_pelajaran = MataPelajaran::findOrFail($id);
            
            $galeri = Galeri::create([
                "banner"                        => $nama,
                "judul"                         => $request->judul,
                "deskripsi"                     => $request->deskripsi,
                "mata_pelajaran_id"             => $id,
                "category_program_kegiatan_id"  => $id_category
            ]);

            
            return redirect("/admin/forum-mgmp/mata-pelajaran/$id/category/$id_category/galeri")
            ->withSuccess("galeri berhasil ditambahkan");
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriRequest $request, $id_mp, $id_category, $id)
    {
        $validated = $request->validated();

        if ($id_mp == 0) {
            CategoryProgramKegiatan::findOrFail($id_category);
            $galeri = Galeri::findOrFail($id);
            
            if ($request->hasFile("banner")) {
                $nama = UploadFileServices::image($request, "banner");
                Storage::delete($galeri->banner);

                $galeri->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                ]);
            } else {
                $galeri->update([
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                ]);
            }
            

            // return redirect("admin/unit/0/category/$id_category/galeri")
            return redirect()->back()
            ->withSuccess("galeri berhasil diedit");

        } else {
            MataPelajaran::findOrFail($id_mp);
            CategoryProgramKegiatan::findOrFail($id_category);
            $galeri = Galeri::findOrFail($id);
            
            if ($request->hasFile("banner")) {
                $nama = UploadFileServices::image($request, "banner");
                Storage::delete($galeri->banner);
                $galeri->update([
                    "banner"                        => $nama,
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                ]);
            } else {
                $galeri->update([
                    "judul"                         => $request->judul,
                    "deskripsi"                     => $request->deskripsi,
                ]);
            }
            
            // return redirect("admin/forum-mgmp/mata-pelajaran/$id_mp/category/$id_category/galeri")
            return redirect()->back()
            ->withSuccess("galeri berhasil diedit");
        }
        
    }

    public function destroy($id_mp, $id_category ,$id)
    {
        if ($id_mp == 0) {
            CategoryProgramKegiatan::findOrFail($id_category);
            $galeri = Galeri::findOrFail($id);
            Storage::delete($galeri->banner);
            $galeri->delete();

            return redirect("admin/unit/0/category/$id_category/galeri")
            ->withSuccess("galeri berhasil dihapus");

        } else {
            MataPelajaran::findOrFail($id_mp);
            CategoryProgramKegiatan::findOrFail($id_category);
            $galeri = Galeri::findOrFail($id);
            Storage::delete($galeri->banner);
            $galeri->delete();

            return redirect("admin/forum-mgmp/mata-pelajaran/$id_mp/category/$id_category/galeri")
            ->withSuccess("galeri berhasil dihapus");
        }

    }
}
