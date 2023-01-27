@extends('layouts.master')

@section('title')
    Edit Produk Digital
@endsection

@section('heading')
    Edit Produk Digital
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    

    @include('component.bc-program',
      [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran
      ]
    )
    
    @include('component.bc-program-title',
      [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran,
        "name"            => "digital"
      ]
    )

    <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <form action="{{ url("admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/$category->id/digital/$digital->id") }}" method="post" enctype="multipart/form-data">
            @else
                <form action="{{ url("admin/unit/0/category/$category->id/digital/$digital->id") }}" method="post" enctype="multipart/form-data">
            @endif

              <div class="form-group">
                <label for="">Judul</label>
                  <input type="text" class="form-control" name="judul" required value="{{ $digital->judul }}">
              </div>
              <div class="form-group">
                <label for="">Linkv</label>
                <input type="text" class="form-control" name="deskripsi" required value="{{ $digital->deskripsi }}">
              </div>

              <button type="submit" class="btn btn-primary btn-block">Edit</button>
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
  {{-- <script type="text/javascript">
    CKEDITOR.replace('deskripsi', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script> --}}

@endsection