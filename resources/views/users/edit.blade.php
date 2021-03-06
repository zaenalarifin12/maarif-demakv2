@extends('layouts.master')

@section('heading')
    Tambah Artikel
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/article") }}">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
@endsection

@section('content')
    

<div class="card shadow mb-4">
  <div class="card-header">
      Tambah Artikel
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          <form action="{{ url("admin/article/$article->id") }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Banner</label>
                  <input type="file" class="form-control @error("banner") is-invalid @enderror"" name="banner" accept="image/x-png,image/jpeg">
              </div>
              <div class="form-group">
                <label for="">Judul</label>
                  <input type="text" class="form-control" name="judul" required value="{{ $article->judul }}" >
              </div>
              <div class="form-group">
                <label for="">Deskripsi</label>
                  <textarea class="ckeditor form-control"  name="deskripsi"required cols="30" rows="10">
                      {{ $article->deskripsi }}
                  </textarea>
              </div>
              <div class="form-group">
                  <label for="">Kategori</label>
                  <select name="category" id="" class="form-control">
     
                        @foreach ($category as $item)
                            <option
                            @if ($item->id == $article->category->id)
                                selected
                            @endif
                            value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                  </select>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Edit</button>
              @method("PUT")
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