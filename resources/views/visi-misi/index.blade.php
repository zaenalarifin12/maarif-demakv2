@extends('layouts.master')

@section("title", "Visi Misi")

@section('heading', "Visi Misi")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/profil") }}">Profil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
@endsection

@section('content')
    
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-12 mb-4">


              <!-- Project Card Example -->
              <div class="card shadow mb-4">
              
                <div class="card-body">

                    <div class="row">

                    <div class="col-12">
                            <form action="{{ url("admin/profil/visi-misi") }}" method="post" >
                                <div class="form-group">
                                      <textarea class="ckeditor form-control"  name="deskripsi" required cols="30" rows="60">
                                        @if (empty($visiMisi))
                                        @else
                                        {!! $visiMisi->deskripsi !!}
                                        @endif
                                      </textarea>
                                      @include('component.error', ["name" => "deskripsi"])
                                  </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary">Ganti</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                   
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