@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('title')
    Daftar E-Print
@endsection

@section('heading')
    Daftar E-Print
@endsection

@section('breadcump')
    
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('component.bc-program',
      [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran
      ]
    )
    
@endsection

@section('content')
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <div class="d-flex justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">E-print</h6>
                  @if ($mata_pelajaran != null)
                    <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/create") }}" class="btn btn-primary btn-sm">Tambah E-print</a>
                  @else
                    <a href="{{ url("/admin/unit/0/category/$category->id/eprint/create") }}" class="btn btn-primary btn-sm">Tambah E-print</a>
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
                      <th class="text-primary">Kategori</th>
                      <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">Judul</th>
                        <th class="text-primary">Tanggal</th>
                        <th class="text-primary">Kategori</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($eprint as $item)
                    <tr>
                        <td>{{$item->judul}}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->category_eprint->nama }}</td>

                        
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