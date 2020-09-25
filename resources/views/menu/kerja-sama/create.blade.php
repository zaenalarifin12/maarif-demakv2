@extends('layouts.master')

@section("title", "Tambah Kerja Sama")

@section('heading', "Tambah Kerja Sama")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/kerja-sama") }}">Kerja Sama</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
@endsection

@section('content')
    
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-body">
                <form action="{{ url("admin/kerja-sama") }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>    
                        <div class="form-group">
                            <label for="">Logo</label>
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                        </div>
                        @csrf
                    </form>
                </div>
              </div>
            </div>
          </div>

@endsection