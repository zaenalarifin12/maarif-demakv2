@extends('layouts.master')

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

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Siswa</h5>
                    <form action="{{ url("admin/siswa") }}" method="post">
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
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Status</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Status</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="">{{$item->email}}</td>
                        <td class="text-capitalize">{{$item->name}}</td>
                        <td class="text-capitalize">
                          @if($item->status == 0)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="background-color: #ff414d">
                                Non Active
                              </span>
                            </p>
                          @elseif($item->status == 1)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="background-color: #28df99">
                                Active
                              </span>
                            </p>
                          @endif
                        </td>
                        
                        <td>
                            {{-- TODO - 
                                ADA NONAKTIF DAN AKTIF MANUAL
                                --}}
                            {{-- <a href="{{ url("/admin/users/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ url("/admin/users/$item->id") }}" method="post" class="d-inline">
                                <button class="btn btn-sm btn-danger">Hapus</button>
                                @method("DELETE")
                                @csrf
                            </form> --}}
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
  {{-- <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script> --}}

  <script>
    $(document).ready(function() {
        $('#dataTable').DataTable( {
            "scrollX": true
        } );
    } );
  </script>
@endsection