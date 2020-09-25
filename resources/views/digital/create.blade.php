@extends('layouts.master')

@section("heading", "Edit Product Digital")

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('component.breadcump', ["categoryProgramKegiatan" => $categoryProgramKegiatan])
    
    @if ($mata_pelajaran != null)
        <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>
    @endif

    @if ($mata_pelajaran != null)
      <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/digital") }}">
        Digital
        </a>
      </li>
    @endif
    
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('content')

<div class="card shadow mb-4">
  <div class="card-header">
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          @if ($mata_pelajaran != null)
              <form action="{{ url("admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/digital") }}" method="post" enctype="multipart/form-data">
          @else
              <form action="{{ url("/admin/unit/0/category/$categoryProgramKegiatan->id/digital") }}" method="post" enctype="multipart/form-data">
          @endif
              <div class="form-group">
                <label for="">Product Digital</label>
                  <textarea class="ckeditor form-control"  name="deskripsi" required cols="30" rows="10">
                    {!! $digital->deskripsi ?? "" !!}
                  </textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Edit</button>
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