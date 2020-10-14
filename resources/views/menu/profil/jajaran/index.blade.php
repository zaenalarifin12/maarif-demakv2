@extends('layouts.master')

@section('title', "Jajaran Pengurus")
  
@section('heading', "Jajaran Pengurus")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/profil") }}">Profil</a></li>
@endsection

@section('content')
        
        <div class="container">
            @foreach ($jajaran as $item)
            
            <div class="col justify-content-center">
                <div class="row justify-content-center">
                    <h3>{{ $item->nama }}</h3>
                </div>
                <div class="col justify-content-center">


                    @if ($item->jajaranPengurusOrang->count() > 0)
                        @if ($item->type == 0)
                            <div class="row mb-4 justify-content-center">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal-add-jajaran-{{ $item->uuid }}">Tambah</button>
                            </div>

                            <div class="modal fade" id="exampleModal-add-jajaran-{{ $item->uuid }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{url("/admin/profil/jajaran/$item->uuid")}}" method="post" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Profil <strong> {{ $item->nama }} </strong></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="">Nama</label>
                                                        <input type="text" required class="form-control" name="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Foto (Ukuran 152 x 227 pixels )</label>
                                                        <input onchange="loadFile_{{ $item->id }}(event)" type="file" name="foto" required accept="image/x-png,image/jpeg">
                                                        <br><br>
                                                        <img id="output_{{$item->id }}" width="152" height="227"
                                                        src="#" alt="" srcset="">
                                                    </div>
                                    
                                                    @csrf
                                                </div>
                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endif

                    <div class="row justify-content-center">

                        @forelse ($item->jajaranPengurusOrang as $item2)

                                <div class="col-xl-3 col-md-3 mb-4">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="no-gutters align-items-center">

                                                <div class=" justify-content-center">  
                                                    <div class="d-flex justify-content-center">
                                                        <img src="{{ asset("storage/$item2->foto") }}" class="img-thumbnail" alt="">
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <p class="text-capitalize">{{ $item2->nama }}</p> 
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <form action="{{ url("admin/profil/jajaran/$item2->uuid") }}" method="post">
                                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                            @csrf
                                                            @method("DELETE")
                                                        </form>
                                                    </div>
                                                </div>  

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        @empty
                            <div class="row mb-4 justify-content-center">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal-add-{{ $item->uuid }}">Tambah</button>
                            </div>

                            <div class="modal fade" id="exampleModal-add-{{ $item->uuid }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="{{url("/admin/profil/jajaran/$item->uuid")}}" method="post" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Profil <strong> {{ $item->nama }} </strong></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="card-body">

                                                        <div class="form-group">
                                                            <label for="">Nama</label>
                                                            <input type="text" required class="form-control" name="nama">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Foto (Ukuran 152 x 227 pixels )</label>
                                                            <input onchange="loadFile_{{ $item->id }}(event)" type="file" name="foto" required accept="image/x-png,image/jpeg">
                                                            <br><br>
                                                            <img id="output_{{$item->id }}" width="152" height="227"
                                                            src="#" alt="" srcset="">
                                                        </div>
                                                        @csrf
                                                    </div>
                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
@endsection

@section('script')
    @foreach ($jajaran as $item)
    <script>
        var loadFile_{!! $item->id !!} = function(event) {
          var output = document.getElementById('output_{{ $item->id }}');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
          }
        };
      </script>
    @endforeach
@endsection

