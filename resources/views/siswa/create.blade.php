@extends('layouts.master')

@section('title')
  Tambah Siswa
@endsection

@section('heading')
    Tambah Siswa
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/siswa") }}">Siswa</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah</li>
@endsection

@section('content')

        @include('component.all-error')

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Tambah Siswa</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url("/siswa") }}" method="post">                
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
                
                    @csrf 
                    <button type="submit" class="btn btn-primary">Daftarkan</button>
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