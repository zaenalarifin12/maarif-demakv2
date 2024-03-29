@extends('layouts.master')

@section('title')
   {{ $eprint->judul }}
@endsection

@section('heading')
   E-Print
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    
    @include('component.bc-program',
      [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran
      ]
    )

    @include('component.bc-program-title',
      [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran,
        "name"            => "eprint"
        ]
      )

@endsection

@section('content')

<div class="card shadow mb-4">
  <div class="card-header">
    {{-- @include('e-print.head-create', ["type" => $type]) --}}
    </div>
        <div class="card-body">
          <div class="container">
            <div class="col-12">
                <div class="form-group">
                  
                    <span class="h4">
                      <span class="badge badge-secondary">{{$eprint->category_eprint->nama}}</span>
                    </span>  
                </div>
                  <div class="form-group">
                    <p class="h3 text-primary font-weight-bold text-center text-justify">{{ ucfirst($eprint->judul) }}</p>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <img 
                        style="width: 400px; height: 640px;" 
                        src="{{ asset("storage/$eprint->cover") }}"
                        alt="" srcset="">
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-group">
                        <p>Eprint : <a class="font-weight-bold" href="{{ asset("/storage/$eprint->banner") }}">
                          Download
                        </a></p>
                          <p>{!! $eprint->deskripsi !!}</p>
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
  <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script>
@endsection