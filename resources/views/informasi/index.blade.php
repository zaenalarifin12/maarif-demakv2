@extends('layouts.master')

@section('title')
    Daftar Informasi
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar Informasi
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
    
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <div class="d-flex justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
                
                       <a href="{{ url("/admin/unit/0/category/4/informasi/create") }}" class="btn btn-primary btn-sm">Tambah Informasi</a>     
                    
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
                    @foreach ($informasi as $item)
                    <tr>
                        <td>{{$item->judul}}</td>
                        <td>{{ $item->created_at }}</td>

                          <td>
                            <a href="{{ url("/admin/unit/0/category/$category->id/informasi/$item->slug") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/unit/0/category/$category->id/informasi/$item->slug/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/unit/0/category/$category->id/informasi/$item->slug") }}" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                @csrf
                                @method("DELETE")
                            </form>
                          </td>
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