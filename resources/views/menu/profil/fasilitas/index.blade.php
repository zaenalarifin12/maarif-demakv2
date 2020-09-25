@extends('layouts.master')

@section("title", "Daftar Fasilitas")

@section('heading', "Daftar Fasilitas")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/profil") }}">Profil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Fasilitas</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">


            <div class="card shadow mb-4">
                <div class="card-header text-primary">
                    Tambah Fasilitas
                  </div>
                <div class="card-body">
                    <div class="row">
                        
                        <form action="{{ url("admin/profil/fasilitas") }}" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Singkat</label>
                                <textarea class="form-control" name="deskripsi" required id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" class="form-control" name="gambar" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <p class="mx-auto h3">
                                Jumlah Fasilitas {{ $fasilitas->count() }}
                            </p>
                        </div>
                        <div class="row">
                            @if ($fasilitas->count() == 0)
                                Tidak Ada Fasilitas
                            @else
                                @foreach ($fasilitas as $item)
                                    <div class="col-6">
                                        <div class="form-group">
                                            <img width="100%" src="{{ asset("/storage/$item->gambar") }}" class="form-group" alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row flex justify-content-start mb-4">
                                            <a href="#" class="btn btn-sm btn-info mr-5">Edit</a>
                                            <form action="{{ url("/admin/profil/fasilitas/$item->id") }}" method="post">
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                @csrf
                                                @method("DELETE")
                                            </form>
                                        </div>
                                        <h3>Nama : {{ ucfirst($item->nama) }}</h3>
                                        <p>Deskripsi : {{ ucfirst($item->deskripsi) }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    
              </div>

            </div>

          </div>

@endsection