@extends('layouts.master')

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('title')
    Edit Informasi
@endsection

@section('heading')
    Edit Informasi
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/article") }}">Informasi</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('content')
    

<div class="card shadow mb-4">
  <div class="card-header">
      Edit Informasi
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          <form action="{{ url("admin/article/$article->id") }}" method="post" enctype="multipart/form-data">
              
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
                  <select name="category_id" id="" class="form-control">
     
                        @foreach ($category as $item)
                            <option
                            @if ($item->id == $article->category->id)
                                selected
                            @endif
                            value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="">Foto  <br>
                    <span class="text-primary"> 
                        <strong> 1280 </strong> x <strong> 960 </strong> pixels <br>
                        ukuran maximum: 5 mb 
                        <br> jenis file: jpeg,png
                    </span>
                </label>                  
                <input id="imgInp" type="file" class="form-control" name="gambar" accept="image/*">
                @include('component.error', ["name" => "gambar"])
                <br>
                  <img id="blah" 
                  style="width: 640px; height: 480px;" 
                  src="{{ asset("/storage/$article->banner") }}"
                  alt="" srcset="">
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