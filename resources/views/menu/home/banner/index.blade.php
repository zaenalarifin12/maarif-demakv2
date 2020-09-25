@extends('layouts.master')

@section("title", "Banner")

@section('heading', "Banner")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/home") }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Banner</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              
              <div class="card shadow mb-4">
              
                <div class="card-body">
                    <div class="row my-4">
                        <a href="{{ url("/admin/home/banner/create") }}" class="btn btn-block btn-primary">Tambah Banner</a>
                    </div>
                    @foreach ($banner as $item)
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <img width="100%" src="{{ asset("/storage/$item->gambar") }}" class="form-group" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-4 flex flex-column flex-baseline">
            
                            <form action="{{ url("admin/home/banner/$item->id") }}" method="post">
                              <button type="submit" class="btn btn-danger">Hapus</button>
                              @csrf
                              @method("DELETE")
                            </form>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
              </div>


            </div>

          </div>

@endsection