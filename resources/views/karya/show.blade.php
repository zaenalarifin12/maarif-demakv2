@extends('layouts.master')

@section('title')
    {{ $karya->judul }}
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/publikasi/") }}">Publikasi</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/karya/") }}">Artikel</a></li>

@endsection

@section('content')

<div class="card shadow mb-4">
  <div class="card-header">

    </div>
        <div class="card-body">
          <div class="container">


            <div class="col-12">
                <div class="form-group">
                  
                </div>
                  <div class="form-group">
                    <p class="h3 text-primary font-weight-bold text-center text-justify">{{ ucfirst($karya->judul) }}</p>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <img 
                        style="width: 400px; height: 640px;" 
                        src="{{ asset("storage/$karya->cover") }}"
                        alt="" srcset="">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <p>Eprint : <a class="font-weight-bold" href="{{ asset("/storage/files/$karya->banner") }}">
                          Download
                        </a></p>
                          <p>{!! $karya->deskripsi !!}</p>
                      </div>
                    </div>
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