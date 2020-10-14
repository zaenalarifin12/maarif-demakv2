@extends('layouts.master')

@section("title", "Foto")

@section('heading', "Foto")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home") }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home/banner") }}">Foto</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
              
                <div class="card-body">
                <form action="{{ url("admin/home/banner") }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Foto  <br><span class="text-primary"> 
                                <strong>1351</strong> x <strong>328</strong> pixels 
                                <br> ukuran maximum: <strong> 5 mb </strong> 
                                <br> jenis file: <strong> jpeg,png </strong></span></label><br>
                            <input id="imgInp"  type="file" name="gambar" accept="image/x-png,image/jpeg">
                            @include('component.error', ["name" => "gambar"])
                            <br><br>
                            <img id="blah"
                            style="width: 1351px; height=328; max-width: 100%;" 
                            src="#" alt="" srcset="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                        </div>
                        @csrf
                    </form>
                </div>
              </div>


            </div>

          </div>

@endsection