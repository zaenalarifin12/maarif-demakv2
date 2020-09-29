@extends('layouts.master')

@section('title')
  Daftar Siswa
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar Siswa
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Siswa</li>
@endsection

@section('content')

@include('component.all-error');

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Siswa</h5>

                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal-add">Tambah</button>
                    <form action="{{ url("siswa/approve-all") }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-sm text-white" style="background-color: #28df99" >Aktifkan Semua</button>                        
                    </form>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">No Induk</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Asal Sekolah</th>
                        <th class="text-primary">Status</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">No Induk</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Asal Sekolah</th>
                        <th class="text-primary">Status</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->no_induk }}</td>
                        <td class="text-capitalize">{{$item->nama}}</td>
                        <td class="">{{$item->email}}</td>
                        <td>{{ $item->asal_sekolah }}</td>
                        <td class="text-capitalize">
                          @if($item->status == 0)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="color: #ff414d">
                                Non Active
                              </span>
                            </p>
                          @elseif($item->status == 1)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="color: #28df99">
                                Active
                              </span>
                            </p>
                          @endif
                        </td>
                        
                        <td>
                       
                          @if ($item->status == 0)
                            <form action="{{ url("/siswa/$item->no_induk/approve") }}" method="post" class="d-inline">
                              <button class="btn btn-sm btn-success">Aktifkan</button>
                              @csrf
                            </form>
                          @else
                            <form action="{{ url("/siswa/$item->no_induk/disapprove") }}" method="post" class="d-inline">
                              <button class="btn btn-sm btn-danger">Nonaktifkan</button>
                              @csrf
                            </form>
                          @endif
                            
                            <a href="{{ url("/siswa/$item->no_induk/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/siswa/$item->no_induk") }}" method="post" class="d-inline">
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

          {{-- modal untuk membuat --}}

            <div class="modal fade" id="exampleModal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ url("/siswa") }}" method="post">
                      @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                
                              <form class="user" action="{{ url("/siswa") }}" method="POST">
                                @csrf
          
                              <div class="form-group">
                                  <label for="">Nama</label>
                                  <input type="text" name="nama" class="form-control" value="{{ old("nama") }}">
                                  @include('component.error', ["name" => "nama"])
              
                              </div>
                              <div class="form-group">
                                  <label for="">No Induk</label>
                                  <input type="number" name="no_induk" class="form-control" value="{{ old("no_induk") }}">
                                  @include('component.error', ["name" => "no_induk"])
          
                              </div>
                              <div class="form-group">
                                  <label for="">Asal Sekolah</label>
                                  <input type="text" name="asal_sekolah" class="form-control" value="{{ old("asal_sekolah") }}">
                                  @include('component.error', ["name" => "asal_sekolah"])
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" name="email" class="form-control" value="{{ old("email") }}">
                                  @include('component.error', ["name" => "email"])
                              </div>
                              <div class="form-group">
                                  <label for="">Password</label>
                                  <input type="password" name="password" class="form-control" >
                                  @include('component.error', ["name" => "password"])
                              </div>
                            </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Daftarkan</button>
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
  {{-- <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script> --}}

  <script>
    $(document).ready(function() {
        $('#dataTable').DataTable( {
            "scrollX": true
        } );
    } );
  </script>
@endsection