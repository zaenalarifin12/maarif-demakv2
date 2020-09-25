@extends('layouts.master')

@section("heading", "Product Digital")

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('component.breadcump', ["categoryProgramKegiatan" => $categoryProgramKegiatan])

    @if ($mata_pelajaran != null)
        <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/lembaga/".$mata_pelajaran->lembaga->id."/mata-pelajaran") }}">Lembaga {{ $mata_pelajaran->lembaga->nama }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">Digital</li>
@endsection

@section('content')
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Product Digital</h6>
                    
                    @if ($mata_pelajaran != null)
                        <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/digital/create") }}" class="btn btn-primary btn-sm">Edit Product Digital</a>
                    @else
                       <a href="{{ url("/admin/unit/0/category/$categoryProgramKegiatan->id/digital/create") }}" class="btn btn-primary btn-sm">Edit Product Digital</a>     
                    @endif

                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                @if ($digital == null)
                    <p>
                        Tidak ada digital
                    </p>
                @else
                    <p>
                        {!! $digital->deskripsi !!}
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