<?php

use Illuminate\Support\Facades\Route;


//home
Route::get("/", "FE\HomeController@index");

//profil
Route::get("/lembaga/{id}",                                 "FE\LembagaController@index");
Route::get("/informasi/{id}",                               "FE\InformasiController@index");
Route::get("/informasi/{id}/{id_a}",                        "FE\InformasiController@show");
Route::get("/profil/jajaran",                       "FE\ProfilController@jajaran");
Route::get("/profil/fasilitas",                     "FE\ProfilController@fasilitas");
Route::get("/forum-mgmp/{id_l}/{id_mp}/galeri",     "FE\ForumMGMPController@galeri");
Route::get("/forum-mgmp/{id_l}/{id_mp}/eprint",     "FE\ForumMGMPController@eprint");
Route::get("/forum-mgmp/{id_l}/{id_mp}/digital",    "FE\ForumMGMPController@digital");
Route::get("/forum-mgmp/{id_l}/{id_mp}/event",      "FE\ForumMGMPController@event");


Route::get("/publikasi/karya-ilmiah",               "FE\PublikasiController@karyaIlmiah");

Route::get("/not-active",     function(){
    return "akun anda belum aktif tunggu beberapa hari";
});

Route::group(["middleware" => ["auth"]], function(){
    Route::group(["prefix"=>"admin"], function(){


        Route::get('/enroll',     "EnrollController@index");
        Route::post('/enroll',     "EnrollController@enroll");
        // Route::get('/enroll',     "EnrollController@index");

        Route::get('/siswa',                "SiswaController@index");
        Route::post('/siswa',               "SiswaController@approve");

        Route::get('/', "MenuController@index");
    
        Route::resource('/video-promosi', "VideoPromosiController")->only([
            "index", "store"
        ]);
    
        Route::resource('karya',                    "KaryaIlmiahController");
    
        Route::resource('category-eprint',          "CategoryEprintController")->except([
            "create"
        ]);
    
        Route::resource('/article',     "ArticleController");
    
        Route::group(["prefix"=>"home"], function(){
            Route::get('/',             "MenuController@home");
            Route::resource('/banner',  "BannerHomeController");
        });
    
        Route::group(["prefix"=>"profil"], function(){
            Route::get('/',                                 "MenuController@profil");
            Route::get('/jajaran-struktur',                 "MenuController@profil");
            Route::resource('/banner-fasilitas',            "BannerFasilitasController")->only(["index", "store"]);
            Route::resource('/fasilitas',                   "FasilitasController");
        });
    
        
        Route::get('/sekolah',                      "MenuController@sekolah");
        Route::resource("lembaga.isi-lembaga",      "IsiLembagaController");
    
        Route::group(["prefix"=>"forum-mgmp" ], function(){
            Route::get('/',                 "MenuController@forum_mgmp");
    
            Route::resource('lembaga.mata-pelajaran',            "MataPelajaranController")->except(["create", "edit"]);
            Route::resource('mata-pelajaran.category.galeri',    "GaleriController");
            Route::resource('mata-pelajaran.category.digital',   "DigitalController");
            Route::resource('mata-pelajaran.category.eprint',    "EprintController");
            Route::resource('mata-pelajaran.category.event',     "EventController");
    
        });
    
        Route::group(["prefix"=>"unit" ], function(){
            Route::get('/',                                         "MenuController@unit");
    
            Route::resource('{id}/category/{id_category}/galeri',   "GaleriController");
            Route::resource('{id}/category/{id_category}/e-print',  "EprintController");
            Route::resource('{id}/category/{id_category}/digital',  "DigitalController");
            Route::resource('{id}/category/{id_category}/event',    "EventController");
        });
    
        Route::group(["prefix"=>"publikasi" ], function(){
            Route::get('/',                                         "MenuController@publikasi");
    
            Route::resource('{id}/category/{id_category}/digital',  "DigitalController");
            Route::resource('{id}/category/{id_category}/event',    "EventController");
        });
    
        Route::resource('/kerja-sama',            "KerjaSamaController")->only([
            "index", "create", "store", "destroy"
        ]);

        Route::resource('/users',            "UserController");
    
    });
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
