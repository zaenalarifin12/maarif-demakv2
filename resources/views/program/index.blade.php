@extends('layouts.master')

@section("title", "Program Kegiatan")

@section("heading", "Program Kegiatan")

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
        "name"            => "program"
      ]
    )
@endsection

@section('content')
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Program Kegiatan</h6>
                    
                    @if ($mata_pelajaran != null)
                        <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/program/create") }}" class="btn btn-primary btn-sm">Edit Product Digital</a>
                    @else
                       <a href="{{ url("/admin/unit/0/category/$category->id/program/create") }}" class="btn btn-primary btn-sm">Edit Program Kegiatan</a>     
                    @endif

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                @if ($program == null)
                    <p>
                        Tidak ada Program Kegiatan
                    </p>
                @else
                    <p>
                        {!! $program->deskripsi !!}
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