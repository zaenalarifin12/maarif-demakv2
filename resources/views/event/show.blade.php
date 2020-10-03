@extends('layouts.master')


@section('title')
   {{ $event->judul }}
@endsection

@section('heading')
   Event
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
        "name"            => "event"
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
                    <img  style="max-width: 90%" src="{{ asset("/storage/$event->banner") }}" class="form-group " alt="" srcset="">
                </div>
                <div class="form-group">
                    <p class="h3 text-primary font-weight-bold text-center text-justify">{{ ucfirst($event->judul) }}</p>
                    
                  </div>
                  <div class="form-group">
                      <p>{!! $event->deskripsi !!}</p>
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