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

                
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal-add">Tambah</button>
                

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
                                            {{-- FIXME bagian edit belum selesai --}}
                                            {{-- <a href="#" class="btn btn-sm btn-info mr-5">Edit</a> --}}
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




          {{-- modal --}}
          <div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url("admin/profil/fasilitas") }}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                    @include('component.error', ["name" => "deskripsi"])
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Singkat</label>
                                    <textarea class="form-control" name="deskripsi" required id="" cols="30" rows="10"></textarea>
                                    @include('component.error', ["name" => "deskripsi"])
                                </div>
                                <div class="form-group">
                                    <label for="">Logo <br><span class="text-primary"> 
                                      <strong> 500 </strong> x <strong> 500 </strong> pixels
                                      <br> ukuran maximum: 5 mb 
          
                                      <br> jenis file: jpeg,png</span>
                                    </label><br>
                                    <input id="imgInp"  type="file" name="gambar" accept="image/x-png,image/jpeg">
                                    @include('component.error', ["name" => "gambar"])
                                    <br><br>
                                    <img id="blah" 
                                    style="width: 250px; height: 250px; max-width: 100%;" 
                                    src="#" alt="" srcset="">
                                </div>
                                
                                @csrf
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        {{-- end modal --}}


@endsection