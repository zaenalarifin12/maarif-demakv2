@extends('layouts.master')

@section("title")
    Lembaga {{ $lembaga->nama }}
@endsection

@section("heading")
    Lembaga {{ $lembaga->nama }}
@endsection


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/sekolah") }}">Lembaga</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $lembaga->nama }}</li>
@endsection

@section('content')
    
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Lembaga {{ $lembaga->nama }}</h6>
                    <a href="{{ url("/admin/lembaga/$lembaga->id/isi-lembaga/create") }}" class="btn btn-primary btn-sm">Edit Isi Lembaga {{ $lembaga->nama }}</a>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                @if ($isi_lembaga == null)
                    <p>
                        Tidak ada Deskripsi
                    </p>
                @else
                    <p>
                        {!! $isi_lembaga->deskripsi !!}
                    </p>
                @endif
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