@extends('layouts.master')

@section('heading')
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/article/") }}">Artikel</a></li>


@endsection

@section('content')

<div class="card shadow mb-4">
  <div class="card-header">

    </div>
        <div class="card-body">
          <div class="container">
            <div class="col-12">
                <div class="form-group d-flex justify-content-center">
                    <img  height="300" src="{{ asset("/storage/$article->banner") }}" class="form-group " alt="" srcset="">
                </div>
                  <div class="form-group">
                    <a class="h5 text-white d-flex justify-content-center text-capitalize" href="">
                        <span class="badge" style="background-color: {{$article->category->color}}">
                            {{ $article->category->nama }}
                        </span>
                    </a>
                    <p class="h3 text-primary font-weight-bold text-center text-justify">{{ ucfirst($article->judul) }}</p>
                    
                  </div>
                  <div class="form-group">
                      <p>{!! $article->deskripsi !!}</p>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
      <!-- Page level plugins -->
  <script src="{{ asset("assets/vendor/datatables/jquery.dataTables.min.js")}}"></script>
  <script src="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.js")}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset("asssets/js/demo/datatables-demo.js")}}"></script>
@endsection