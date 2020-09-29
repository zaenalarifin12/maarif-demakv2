@extends('layouts.master')

@section('title')
    Anggota MGMP
@endsection

@section('css')
    <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('heading')
    Daftar Anggota MGMP
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Anggota MGMP</li>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="p-0 m-0" style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row d-flex justify-content-between">
                <h5>Anggota MGMP</h5>

                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                    data-target="#exampleModal-add">Tambah</button>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-primary">No</th>
                            <th class="text-primary">Email</th>
                            <th class="text-primary">Nama</th>
                            <th class="text-primary">Mata Pelajaran</th>
                            <th class="text-primary">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-primary">No</th>
                            <th class="text-primary">Email</th>
                            <th class="text-primary">Nama</th>
                            <th class="text-primary">Mata Pelajaran</th>
                            <th class="text-primary">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
        
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-capitalize">{{ $item->email }}</td>
                                <td class="text-capitalize">{{ $item->name }}</td>
                                <td class="text-capitalize">{{ $item->mata_pelajaran->nama ?? "KOSONG" }}</td>
                                <td>
                                    <form action="{{ url("/admin/admin-mgmp/$item->id") }}" method="post" class="d-inline">
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                        @method("DELETE")
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ url('/admin/anggota-mgmp') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin MGMP</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Mata Pelajaran</label>
                            <select name="mata_pelajaran" id="" class="form-control">
                                @foreach ($mp as $item)
                                    <option value="{{ $item->id }}">{{ $item->lembaga->nama }} - {{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" class="form-control" required name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    {{-- <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
    --}}

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "scrollX": true
            });
        });

    </script>
@endsection
