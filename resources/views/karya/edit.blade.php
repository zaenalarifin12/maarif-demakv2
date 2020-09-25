@extends('layouts.master')

@section('heading')
    Edit Karya Ilmiah
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/publikasi") }}">Publikasi</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/karya") }}">karya Ilmiah</a></li>
    <li class="breadcrumb-item active">Edit</li>
    
@endsection

@section('content')
    
<div class="card shadow mb-4">
  <div class="card-header">
      Edit Karya Ilmiah
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          <form action="{{ url("admin/karya/$karya->id") }}" method="post" enctype="multipart/form-data">
              
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" required value="{{ $karya->judul }}" >
            </div>
            <div class="form-group">
                <label for="">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" required value="{{ $karya->pengarang }}">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea class="ckeditor form-control"  name="deskripsi"required cols="30" rows="10">{!! $karya->deskripsi !!}</textarea>
            </div>
            <div class="form-group d-flex justify-content-start">
                <a href="{{ asset("/storage/$karya->banner") }}" target="_blank" class="btn btn-success">
                    Lihat Dokumen
                </a>
            </div>
              <div class="form-group">
                <label for="">File  *<strong class="warning">Upload file jika ingin mengganti</strong></label>
                  <input type="file" class="form-control" name="banner">
              </div>
          
              <button type="submit" class="btn btn-primary btn-block">Tambah</button>
              @csrf
              @method("PUT")
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