@extends('layouts.master')

@section('title', "Galeri")
  
@section('heading', "Galeri")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('component.breadcump', ["categoryProgramKegiatan" => $categoryProgramKegiatan])
    
    @if ($mata_pelajaran != null)
        <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/lembaga/".$mata_pelajaran->lembaga->id."/mata-pelajaran") }}">Lembaga {{ $mata_pelajaran->lembaga->nama }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">Galeri</li>
@endsection

@section('content')
        <div class="container mb-4">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal-add">Tambah</button>
        </div>
          <div class="d-flex flex-wrap">
            @foreach ($galeri as $item)
                <div class="col-xl-4 col-md-4 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                        <div class="col no-gutters align-items-center">
                            <div class="row d-flex justify-content-end mb-3">
                                @if ($mata_pelajaran != null)
                                <button type="button" class="btn btn-sm btn-info mx-4" data-toggle="modal" data-target="#exampleModal{{$item->id }}">Edit</button>


              {{-- modal --}}
              <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/galeri/$item->id")}}" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Galeri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="judul" value="{{ $item->judul }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi singkat</label>
                                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{ $item->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group" style="height: 100px !important;">
                                        <img src="{{ asset("storage/$item->banner") }}" style="height: 100px !important;" width="100%" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto <span class="text-primary">* Di isi bila ingin mengganti gambar</span> </label> 
                                        <input type="file" class="form-control" name="banner">
                                    </div>
                    
                                    @csrf
                                    @method("PUT")
                                    {{-- </form> --}}
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
                </div>
              </div>
            {{-- end modal --}}


                                    <form action="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/galeri/$item->id") }}" method="post" class="d-inline">
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                @else
                                    <a href="" class="btn btn-sm btn-info mx-4">Edit</a>
                                    <form action="{{ url("/admin/unit/0/category/$categoryProgramKegiatan->id/galeri/$item->id") }}" method="post" class="d-inline">
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset("storage/$item->banner") }}" class="img-thumbnail" alt="">
                            </div>
                            <div>
                                <p class="text-primary font-weight-bold text-center h3">{{ ucfirst($item->judul) }}</p>
                                <p class="text-capitalize">{{ $item->deskripsi }}</p>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
    
            @endforeach
            
            </div>

              {{-- modal --}}
              <div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">

                    @if ($mata_pelajaran != null)
                        <form action="{{url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/galeri")}}" method="post" enctype="multipart/form-data">
                    @else
                        <form action="{{url("/admin/unit/0/category/$categoryProgramKegiatan->id/galeri")}}" method="post" enctype="multipart/form-data">
                    @endif
                    
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi singkat</label>
                                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" class="form-control" name="banner">
                                    </div>
                    
                                    @csrf
                                    {{-- </form> --}}
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