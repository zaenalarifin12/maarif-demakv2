@extends('layouts.master')

@section('title')
  Edit Siswa
@endsection

@section('heading')
    Edit Siswa
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/siswa") }}">Siswa</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Edit</li>
@endsection

@section('content')

        @include('component.all-error');

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Edit Siswa</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url("/siswa/$siswa->no_induk") }}" method="post">                
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="{{ old("nama") ? old("nama") : $siswa->nama  }}">
                        @include('component.error', ["name" => "nama"])
    
                    </div>
                    <div class="form-group">
                        <label for="">No Induk</label>
                        <input type="number" name="no_induk" class="form-control" required value="{{ old("no_induk") ? old("no_induk") :  $siswa->no_induk }}">
                        @include('component.error', ["name" => "no_induk"])

                    </div>
                    <div class="form-group">
                        <label for="">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" required value="{{ old("asal_sekolah") ? old("asal_sekolah") : $siswa->asal_sekolah }}">
                        @include('component.error', ["name" => "asal_sekolah"])
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required value="{{ old("email") ? old("email") : $siswa->email }}">
                        @include('component.error', ["name" => "email"])
                    </div>
                    <div class="form-group">
                        <label for="">Password <span class="text-primary bold">Kalau Mau Diganti Silahkan Di isi</span></label>
                        <input type="password" name="password" class="form-control" >
                        @include('component.error', ["name" => "password"])
                    </div>
                
                    @csrf 
                    @method("PUT")
                    <button type="submit" class="btn btn-primary">Edit</button>
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