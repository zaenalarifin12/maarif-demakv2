@extends('layouts.master')

@section("title", "Foto Fasilitas")

@section('heading', "Foto Fasilitas")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/profil") }}">Profil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Foto Fasilitas</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            @if ($banner != null)
                                <div class="col-6">
                                    <div class="form-group">
                                        <img width="100%" src="{{ asset("/storage/$banner->banner_fasilitas") }}" class="form-group" alt="" srcset="">
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <form action="{{ url("admin/profil/banner-fasilitas") }}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Logo <br><span class="text-primary"> 
                                      <strong> 1,256 </strong> x <strong> 381 </strong> pixels
                                      <br> ukuran maximum: 5 mb 
          
                                      <br> jenis file: jpeg,png</span>
                                    </label><br>
                                    <input id="imgInp"  type="file" name="gambar" accept="image/x-png,image/jpeg">
                                    @include('component.error', ["name" => "gambar"])
                                    <br><br>
                                    <img id="blah" 
                                    style="width: 628px; height: 190,5px;" 
                                    src="#" alt="" srcset="">
                                  </div>
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                                @csrf
                            </form>
                        </div>
                    </div>
              </div>
            </div>

          </div>

@endsection