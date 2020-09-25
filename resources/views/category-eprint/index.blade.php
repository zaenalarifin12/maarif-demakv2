@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar Kategori Eprint
@endsection

@section('breadcump')
    
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Kategori Eprint</li>
    
@endsection

@section('content')
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Kategori Eprint</h6>
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal-add">Tambah</button>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-primary">No</th>
                      <th class="text-primary">Nama</th>
                      <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($category_eprint as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                
                                
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal-edit-{{ $item->id }}">Edit</button>
                                
                                <div class="modal fade" id="exampleModal-edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ url("/admin/category-eprint/$item->id") }}" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Nama Kategori Eprint</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" class="form-control" name="nama" value="{{ $item->nama }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                    @csrf
                                                    @method("PUT")
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>

                                <form action="{{ url("/admin/category-eprint/$item->id") }}" method="post" class="d-inline">
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


<div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <form action="{{ url("/admin/category-eprint") }}" method="post">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                @csrf
            </div>
        </div>
    </form>
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