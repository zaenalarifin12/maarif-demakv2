@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('heading')
    Daftar Article
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Article</li>
@endsection

@section('content')
    
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row d-flex justify-content-between">
                    <h5>Article</h5>
                    <div class="mx-2">
                      <form action="{{ url("admin/article") }}" method="get" class="d-flex">
                        <div class="">
                          <select name="search" id="" class="form-control d-inline" >
                            <option value="0">Semua</option>    
                            @foreach ($category as $item)
                              <option value="{{ $item->id }}">{{ $item->nama }}</option>    
                            @endforeach
                          </select>
                        </div>
                        <div class="mx-2">
                          <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                        
                      </form>
                    </div>
                    <a href="{{ url("/admin/article/create") }}" class="btn btn-primary">Tambah Artikel</a>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">Judul</th>
                        <th class="text-primary">Tanggal</th>
                        <th class="text-primary">Kategori</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th class="text-primary">No</th>
                        <th class="text-primary">Judul</th>
                        <th class="text-primary">Tanggal</th>
                        <th class="text-primary">Kategori</th>
                        <th class="text-primary">Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($article as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-capitalize">{{$item->judul}}</td>
                        <td class="text-capitalize">{{ $item->created_at }}</td>
                        <td class="text-capitalize ">
                            <a class="h5 text-white" href="">
                                <span class="badge" style="background-color: {{$item->category->color}}">
                                    {{ $item->category->nama }}
                                </span>
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/admin/article/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>
                            <a href="{{ url("/admin/article/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
                            
                            <form action="{{ url("/admin/article/$item->id") }}" method="post" class="d-inline">
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
@endsection


@section('script')
      <!-- Page level plugins -->
  <script src="{{ asset("assets/vendor/datatables/jquery.dataTables.min.js")}}"></script>
  <script src="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.js")}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset("assets/js/demo/datatables-demo.js")}}"></script>
@endsection