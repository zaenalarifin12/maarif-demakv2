@extends('layouts.master')

@section('title')
  Tambah Karya Ilmiah
@endsection

@section('heading')
    Tambah Karya Ilmiah
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/publikasi") }}">Publikasi</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/karya") }}">karya Ilmiah</a></li>
    
@endsection

@section('content')
    

<div class="card shadow mb-4">
  <div class="card-header">
      Tambah Karya Ilmiah
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          <form action="{{ url("admin/karya") }}" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                <label for="">Judul</label>
                  <input type="text" class="form-control" name="judul" required >
              </div>
              <div class="form-group">
                <label for="">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" required >
              </div>
              <div class="form-group">
                <label for="">Deskripsi</label>
                  <textarea class="ckeditor form-control"  name="deskripsi"required cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <label for="">File</label>
                  <input type="file" class="form-control" name="banner" required>
              </div>

              <div class="form-group">
                <label for="">Foto  <br>
                    <span class="text-primary"> 
                        <strong> 1600 </strong> x <strong> 2560 </strong> pixels <br>
                        ukuran maximum: 5 mb 
                        <br> jenis file: jpeg,png
                    </span>
                </label>                  
                <input id="imgInp" type="file" class="form-control" name="cover" required accept="image/*">
                @include('component.error', ["name" => "gambar"])
                <br>
                  <img id="blah" 
                  style="width: 400px; height: 640px;" 
                  src="#"
                  alt="" srcset="">
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