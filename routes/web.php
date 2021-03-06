<?php

use Illuminate\Support\Facades\Route;

Route::get("/cek",                function(){
    die(phpinfo());
});
//home
Route::get("/",                 "FE\HomeController@index");
Route::get("/event-terbaru",    "FE\HomeLinkController@event");
Route::get("/informasi-terbaru",    "FE\HomeLinkController@informasi");
Route::get("/kerja-sama",       "FE\KerjaSamaController@kerjaSama");

//informasi
Route::get("/lembaga/{id}",             "FE\LembagaController@index");
Route::get("/informasi/{id}",           "FE\InformasiController@index");
Route::get("/informasi/{id}/{id_a}",    "FE\InformasiController@show");

// profil
Route::get("/profil/visi-misi",         "FE\ProfilController@visi_misi");
Route::get("/profil/jajaran",           "FE\ProfilController@jajaran");
Route::get("/profil/fasilitas",         "FE\ProfilController@fasilitas");

// Route::get("/forum-mgmp/{id_l}/{id_mp}/jajaran",     "FE\ForumMGMPController@galeri");
Route::get("/forum-mgmp/{id_l}/",                       "FE\ForumMGMPController@forum");
Route::get("/forum-mgmp/{id_l}/{id_mp}/program",         "FE\ForumMGMPController@program");
Route::get("/forum-mgmp/{id_l}/{id_mp}/event",           "FE\ForumMGMPController@event");
Route::get("/forum-mgmp/{id_l}/{id_mp}/event/{id}",      "FE\ForumMGMPController@eventShow");
Route::get("/forum-mgmp/{id_l}/{id_mp}/galeri",          "FE\ForumMGMPController@galeri");
Route::get("/forum-mgmp/{id_l}/{id_mp}/eprint",          "FE\ForumMGMPController@eprint");
Route::get("/forum-mgmp/{id_l}/{id_mp}/digital",         "FE\ForumMGMPController@digital");


Route::get("/forum-kkm/{id_l}/",                        "FE\ForumKkmController@forum");
Route::get("/forum-kkm/{id_l}/{id_mp}/program",         "FE\ForumMGMPController@program");
Route::get("/forum-kkm/{id_l}/{id_mp}/event",           "FE\ForumMGMPController@event");
Route::get("/forum-mgmp/{id_l}/{id_mp}/event/{id}",     "FE\ForumMGMPController@eventShow");
Route::get("/forum-mgmp/{id_l}/{id_mp}/galeri",         "FE\ForumMGMPController@galeri");


Route::get("/publikasi/eprint",                         "FE\PublikasiController@eprint");
Route::get("/publikasi/digital",                        "FE\PublikasiController@digital");
Route::get("/publikasi/karya",                          "FE\PublikasiController@karyaIlmiah");

Route::get("/unit/{slug}/jajaran",                  "FE\UnitController@jajaran");
Route::get("/unit/{slug}/program",                  "FE\UnitController@program");
Route::get("/unit/{slug}/program/{id}",             "FE\UnitController@programShow");
Route::get("/unit/{slug}/event",                    "FE\UnitController@event");
Route::get("/unit/{slug}/event/{id}",               "FE\UnitController@eventShow");
Route::get("/unit/{slug}/galeri",                   "FE\UnitController@galeri");
Route::get("/unit/{slug}/digital",                  "FE\UnitController@digital");
Route::get("/unit/{slug}/eprint",                   "FE\UnitController@eprint");
Route::get("/unit/{slug}/informasi",                "FE\UnitController@informasi");
Route::get("/unit/{slug}/informasi/{slug_i}",       "FE\UnitController@informasiShow");

Route::get("/publikasi/karya-ilmiah",               "FE\PublikasiController@karyaIlmiah");

Route::get("/loginSiswa",                           "SiswaAuthController@loginView");
Route::post("/loginSiswa",                          "SiswaAuthController@login");
Route::post("/registerSiswa",                       "SiswaAuthController@register");
Route::get('/siswa/verify/{token}',                 'SiswaAuthController@verifyUser');

Route::get("/not-active",     function(){
    return view("error.not-active");
});

Route::resource('/siswa',                           "SiswaController")->only(["store"]);

Route::get("/files/{file}",                         "FileController@public"); 
Route::get("/files/siswa/{file}",                   "FileController@siswa")->middleware("isAuth"); 
Route::get("/files/anggota/{file}",                 "FileController@anggota")->middleware("isAnggota");

/**
 * file untuk publik
 * file untuk proteksi siswa 
 * file untuk proteksi bahwa ini anggota
 */

Route::group(["middleware" => ["auth"]], function(){

    Route::resource('/siswa',                   "SiswaController")->except(["store"]);
    Route::post('/siswa/{no_induk}/approve',                "SiswaController@approve");
    Route::post('/siswa/{no_induk}/disapprove',                "SiswaController@disapprove");
    Route::post('/siswa/approve-all',                "SiswaController@approve_all");

    Route::group(["prefix"=>"admin"], function(){

        // admin kkm
        Route::resource('/admin-kkm',                    "AdminKkmController");
        Route::resource('/anggota-kkm',                  "AnggotaKkmController");

        Route::resource('/admin-mgmp',                   "AdminMgmpController");
        Route::resource('/anggota-mgmp',                 "AnggotaController");

        Route::get('/licensi',            "LicensiController@create");
        Route::post('/licensi',           "LicensiController@store");
        
        // Route::post('/siswa',               "SiswaController@approve");

        Route::get('/', "MenuController@index");
    
        Route::resource('/video-promosi', "VideoPromosiController")->only([
            "index", "store"
        ]);
    
        Route::resource('karya',                    "KaryaIlmiahController");
    
        Route::resource('category-eprint',          "CategoryEprintController")->except([
            "create"
        ]);
    
        Route::resource('/article',       "ArticleController");

    
        Route::group(["prefix"=>"home"], function(){
            Route::get('/',             "MenuController@home");
            Route::resource('/banner',  "BannerHomeController");
        });
    
        Route::group(["prefix"=>"profil"], function(){
            Route::get('/',                                 "MenuController@profil");
            Route::get('/visi-misi',                        "VisiMisiController@create");
            Route::post('/visi-misi',                       "VisiMisiController@store");
            Route::get('/jajaran',                          "ProfilController@index");
            Route::post('/jajaran/{uuid}',                   "ProfilController@store");
            Route::delete('/jajaran/{uuid}',                   "ProfilController@destroy");
            Route::resource('/banner-fasilitas',            "BannerFasilitasController")->only(["index", "store"]);
            Route::resource('/fasilitas',                   "FasilitasController");
        });
    
        
        Route::get('/sekolah',                      "MenuController@sekolah");
        Route::resource("lembaga.isi-lembaga",      "IsiLembagaController");
    
        Route::group(["prefix"=>"forum-kkm" ], function(){
            Route::get('/',                                     "MenuController@forum_kkm");
    
            Route::resource('lembaga.mata-pelajaran',            "ForumKkmController")->except(["create", "edit"]);
            Route::resource('mata-pelajaran.category.galeri',    "GaleriController");
            Route::resource('mata-pelajaran.category.event',     "EventController");
    
        });

        Route::group(["prefix"=>"forum-mgmp" ], function(){
            Route::get('/',                 "MenuController@forum_mgmp");
    
            Route::resource('lembaga.mata-pelajaran',            "MataPelajaranController")->except(["create", "edit"]);
            Route::resource('mata-pelajaran.category.galeri',    "GaleriController");
            Route::resource('mata-pelajaran.category.digital',   "DigitalController");
            Route::resource('mata-pelajaran.category.eprint',    "EprintController");
            Route::resource('mata-pelajaran.category.event',     "EventController");
            Route::resource('mata-pelajaran.category.program',   "ProgramKegiatanController");
    
        });
    
        Route::group(["prefix"=>"unit" ], function(){
            Route::get('/',                                         "MenuController@unit");
    
            
            Route::resource('{id}/category/{id_category}/galeri',           "GaleriController");
            Route::resource('{id}/category/{id_category}/eprint',           "EprintController");
            Route::resource('{id}/category/{id_category}/digital',          "DigitalController");
            Route::resource('{id}/category/{id_category}/event',            "EventController");
            Route::resource('{id}/category/{id_category}/informasi',        "InformasiController");
            Route::resource('{id}/category/{id_category}/program',          "ProgramKegiatanController");
            
        });
    
        Route::group(["prefix"=>"publikasi" ], function(){
            Route::get('/',                                         "MenuController@publikasi");
    
            // Route::resource('{id}/category/{id_category}/e-print',  "EprintController");
            // Route::resource('{id}/category/{id_category}/digital',  "DigitalController");
        });
    
        Route::resource('/kerja-sama',            "KerjaSamaController")->only([
            "index", "create", "store", "destroy"
        ]);

        Route::resource('/users',            "UserController");
    
    });
    
});

Auth::routes();

Route::get('/home', function(){

    return redirect("/admin");
})->name('home');

Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
