@extends('layouts.master')

@section("heading")
    Edit Lembaga {{ $lembaga->nama }}
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/lembaga") }}">Lembaga</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lembaga {{ $lembaga->nama }}</li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('content')

<div class="card shadow mb-4">
  <div class="card-header">
    </div>
  <div class="card-body">
      <div class="container d-flex justify-content-center">
        <div class="col-12">
          
          <form action="{{ url("admin/lembaga/$lembaga->id/isi-lembaga") }}" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <textarea class="ckeditor form-control"  name="deskripsi" required cols="30" rows="10">
                    {!! $isi_lembaga->deskripsi ?? "" !!}
                  </textarea>
                  @include('component.error', ["name" => "deskripsi"])
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