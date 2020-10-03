@extends('layouts.master')

@section('title')
    {{ $informasi->slug }}
@endsection

@section('heading')
   Informasi
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

        @include('component.bc-program',
        [
        "category"        => $category,
        ]
    )
  
    @include('component.bc-program-title',
        [
        "category"        => $category,
        "name"            => "informasi"
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
                <div class="form-group d-flex justify-content-center">
                    <img  style="max-width: 90%" src="{{ asset("/storage/$informasi->banner") }}" class="form-group " alt="" srcset="">
                </div>
                  <div class="form-group">
                    <p class="h3 text-primary font-weight-bold text-center text-justify">{{ ucfirst($informasi->judul) }}</p>
                    
                  </div>
                  <div class="form-group">
                      <p>{!! $informasi->deskripsi !!}</p>
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