@extends('layouts.master')

@section("title", "Banner")

@section('heading', "Banner")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home") }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home/banner") }}">Banner</a></li>
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
                            <input type="file" name="gambar">
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