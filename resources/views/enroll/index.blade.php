@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar User
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Enroll</li>
@endsection

@section('content')
          @if(count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="p-0 m-0" style="list-style: none;">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
          @endif

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Pengguna</h5>
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
                        <th class="text-primary">Level</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Nama</th>
                        <th class="text-primary">Level</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-capitalize">{{$item->email}}</td>
                        <td class="text-capitalize">{{$item->name}}</td>
                        <td class="text-capitalize">
                          @if ($item->role == 1)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="background-color: #821752">
                                  Siswa
                              </span>
                            </p>
                          @elseif($item->role == 2)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="background-color: #2a3d66">
                                  Anggota MGMP
                              </span>
                            </p>
                          @elseif($item->role == 3)
                            <p class="h5 text-white" href="">
                              <span class="badge" style="background-color: #31112c">
                                Admin MGMP
                              </span>
                            </p>
                          @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal-enroll-{{$item->id}}">Enroll</button>

                            <div class="modal fade" id="exampleModal-enroll-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{ url("/admin/enroll") }}" method="post">
                                      @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Enroll Mata Pelajaran</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <div class="form-group">
                                                  <label for="">Email</label>
                                                  <input type="text" class="form-control" readonly name="email" value="{{ $item->email }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control" name="name" readonly value="{{ $item->name }}">
                                                </div>
                                                @if ($item->role == 3)
                                                    <div class="form-group">
                                                        <label for="">Mata Pelajaran</label><br>
                                                        @foreach ($mp as $item2)
                                                            <input type="checkbox"
                                                            @if (!empty($item->mata_pelajarans))
                                                                @foreach ($item->mata_pelajarans as $item3)
                                                                    @if ($item3->id == $item2->id)
                                                                        checked
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            name="mata_pelajaran[]" id="" value="{{ $item2->id }}" /> {{ $item2->lembaga->nama }} - {{ $item2->nama }} </br>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="form-group">
                                                        <label for="">Mata Pelajaran</label><br>
                                                        @foreach ($mp as $item2)
                                                            <input type="radio"
                                                            @if (!empty($item->mata_pelajarans))
                                                                @foreach ($item->mata_pelajarans as $item3)
                                                                    @if ($item3->id == $item2->id)
                                                                        checked
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                            name="mata_pelajaran" id="" value="{{ $item2->id }}" /> {{ $item2->lembaga->nama }} - {{ $item2->nama }} </br>
                                                        @endforeach
                                                    </div>
                                                @endif

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Enroll</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
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