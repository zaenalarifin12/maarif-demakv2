@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar E-Print
@endsection

@section('breadcump')
    
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @if ($mata_pelajaran != null)
      <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/") }}">Forum MGMP</a></li>
      <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/lembaga/".$mata_pelajaran->lembaga->id."/mata-pelajaran") }}">Lembaga {{ $mata_pelajaran->lembaga->nama }}</a></li>    
    @else
      <li class="breadcrumb-item"><a href="{{ url("admin/unit/") }}">Unit</a></li>
    @endif
    
    @if ($mata_pelajaran != null)
      <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>    
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">Product</li>
    <li class="breadcrumb-item active" aria-current="page">E-Print</li>
    
@endsection

@section('content')
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <div class="d-flex justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">E-print</h6>
                  @if ($mata_pelajaran != null)
                    <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/create") }}" class="btn btn-primary btn-sm">Tambah E-print</a>
                  @endif
                  
                </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary">Judul</th>
                      <th class="text-primary">Tanggal</th>
                      <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">Judul</th>
                        <th class="text-primary">Tanggal</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($eprint as $item)
                    <tr>
                        <td>{{$item->judul}}</td>
                        <td>{{ $item->created_at }}</td>

                        @if ($mata_pelajaran == null)
                          <td>
                            <a href="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id") }}" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                @csrf
                                @method("DELETE")
                            </form>
                          </td>
                        
                        @else
                        
                          <td>
                            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                @csrf
                                @method("DELETE")
                            </form>
                          </td>
                        @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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