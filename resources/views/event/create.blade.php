@extends('layouts.master')

@section('heading')
    Tambah Event
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @if ($mata_pelajaran != null)    
        <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/") }}">Forum MGMP</a></li>
        <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/lembaga/".$mata_pelajaran->lembaga->id."/mata-pelajaran") }}">Lembaga {{ $mata_pelajaran->lembaga->nama }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>        
    @endif

    <li class="breadcrumb-item active" aria-current="page">Product</li>

    @if ($mata_pelajaran != null)
        <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$category->id/event") }}">Event</a></li>
    @endif
  
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
@endsection

@section('content')
    

<div class="card shadow mb-4">
  <div class="card-header">
      {{-- @include('e-print.head-create', ["type" => $type]) --}}
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
        @if ($mata_pelajaran != null)
            <form action="{{ url("admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$category->id/event") }}" method="post" enctype="multipart/form-data">
        @else
            <form action="{{ url("admin/unit/0/category/$category->id/event") }}" method="post" enctype="multipart/form-data">
        @endif
                <div class="form-group">
                <label for="">Judul</label>
                  <input type="text" class="form-control" name="judul" required >
                  @include('component.error', ["name" => "judul"])
              </div>
              <div class="form-group">
                <label for="">Deskripsi</label>
                  <textarea class="ckeditor form-control"  name="deskripsi"required cols="30" rows="10"></textarea>
                  @include('component.error', ["name" => "deskripsi"])
              </div>
              <div class="form-group">
                <label for="">Foto</label>
                  <input id="imgInp" type="file" class="form-control" name="gambar" required accept="image/x-png,image/jpeg">
                  @include('component.error', ["name" => "gambar"])
                <br>
                  <img id="blah" src="#" alt="" srcset="">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Tambah</button>
              @csrf
          </form>

        </div>
      </div>
  </div>
</div>

@endsection


@section('script')
      <!-- Page level plugins -->
  <script src="{{ asset("assets/vendor/datatables/jquery.dataTables.min.js")}}"></script>
  <script src="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.js")}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset("asssets/js/demo/datatables-demo.js")}}"></script>

  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
          $('.ckeditor').ckeditor();
      });
  </script>
  <script type="text/javascript">
    CKEDITOR.replace('deskripsi', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
  </script>

@endsection