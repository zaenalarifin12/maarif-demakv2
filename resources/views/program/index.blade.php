@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('title')
    Daftar Program Kegiatan
@endsection

@section('heading')
    Daftar Program Kegiatan
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
                        <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/program/create") }}" class="btn btn-primary btn-sm">Tambah Program</a>
                    @else
                       <a href="{{ url("/admin/unit/0/category/$category->id/program/create") }}" class="btn btn-primary btn-sm">Tambah Program</a>     
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
                    @foreach ($program as $item)
                    <tr>
                        <td>{{$item->judul}}</td>
                        <td>{{ $item->created_at }}</td>

                        @if ($mata_pelajaran == null)
                          <td>
                            <a href="{{ url("/admin/unit/0/category/$category->id/program/$item->slug") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/unit/0/category/$category->id/program/$item->slug/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/unit/0/category/$category->id/program/$item->slug") }}" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                @csrf
                                @method("DELETE")
                            </form>
                          </td>
                        
                        @else
                        
                          <td>
                            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/program/$item->slug") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/program/$item->slug/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/program/$item->slug") }}" method="post" class="d-inline">
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
  <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script>
@endsection