@extends('layouts.master')

@section('title')
    Tambah Informasi
@endsection

@section('heading')
    Tambah Informasi
@endsection

@section('css')
    <link href="{{ asset("assets/vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('component.bc-program',
        [
        "category"        => $category,
        ]
    )

    @include('component.bc-program-title',
        [
        "category"        => $category,
        "mata_pelajaran"  => $mata_pelajaran,
        "name"            => "informasi"
        ]
    )
  
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
          
            <form action="{{ url("admin/unit/0/category/$category->id/informasi") }}" method="post" enctype="multipart/form-data">
  
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" required>
                    @include('component.error', ["name" => "judul"])
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea class="ckeditor form-control"  name="deskripsi" required cols="30" rows="10"></textarea>
                    @include('component.error', ["name" => "deskripsi"])
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


<script type="text/javascript">
    $(document).ready(function(){
        var size;
        $('#cropbox').Jcrop({
        aspectRatio: 1,
        onSelect: function(c){
        size = {x:c.x,y:c.y,w:c.w,h:c.h};
        $("#crop").css("visibility", "visible");     
        }
        });
    
        $("#crop").click(function(){
            var img = $("#cropbox").attr('src');
            $("#cropped_img").show();
            $("#cropped_img").attr('src','image-crop.php?x='+size.x+'&y='+size.y+'&w='+size.w+'&h='+size.h+'&img='+img);
        });
    });
</script>

@endsection