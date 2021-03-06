@extends('layouts.master')

@section('title')
    @include('mata-pelajaran.component.title', ["mata_pelajaran" => $mata_pelajaran]) {{ $lembaga->nama }}
@endsection
  
@section('heading')
    @include('mata-pelajaran.component.title', ["mata_pelajaran" => $mata_pelajaran]) {{ $lembaga->nama }}
@endsection

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>

    @include('mata-pelajaran.component.bc-menu', ["mata_pelajaran" => $mata_pelajaran])
    
    <li class="breadcrumb-item active" aria-current="page">Lembaga {{ $lembaga->nama }}</li>
@endsection

@section('content')
    <div class="col">

    @foreach ($mata_pelajaran as $item)
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <!-- Collapsable Card Example -->
                {{-- pengujian  --}}
                
                
                @if (Auth::user()->checkIsAdmin())
                {{-- admin --}}
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <div href="#collapseCardExample-{{ $item->id }}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-{{ $item->id }}">
                            <h6 class="m-0 font-weight-bold text-primary d-inline text-capitalize">{{ $item->nama }} </h6>
                            
                            <div class="row float-right mx-2">
                                <div class="col">
                                    <button class="btn btn-info btn-sm" type="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                        Edit
                                    </button>
                                    {{-- modal --}}
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <form action="{{ url("admin/forum-mgmp/lembaga/$lembaga->id/mata-pelajaran/$item->id") }}" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="nama" required value="{{ $item->nama }}">
                                                    </div>
                                                    @csrf
                                                    @method("PUT")
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    {{-- end modal --}}
                                </div>
                                <div class="col">  
                                    <form action="{{ url("/admin/forum-mgmp/lembaga/$lembaga->id/mata-pelajaran/$item->id") }}" method="post">
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            Hapus
                                        </button>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseCardExample-{{ $item->id }}">
                            <div class="card-body">
                                @include('mata-pelajaran.component.menu', ["item" => $item])
                            </div>
                        </div>
                    </div>
                
                @elseif (Auth::user()->checkIsAdminKkm())
                    {{-- admin kkm  --}}
                    @if (Auth::user()->mata_pelajaran->id == $item->id)
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <div href="#collapseCardExample-{{ $item->id }}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-{{ $item->id }}">
                                <h6 class="m-0 font-weight-bold text-primary d-inline text-capitalize">{{ $item->nama }} </h6>
                            </div>
                            <div class="collapse" id="collapseCardExample-{{ $item->id }}">
                                <div class="card-body">
                                    @include('mata-pelajaran.component.menu', ["item" => $item])
                                </div>
                            </div>
                        </div>
                    @endif
                        
                @elseif (Auth::user()->checkIsAnggotaKkm())
                    {{-- anggota kkm --}}
                    @if (Auth::user()->mata_pelajaran->id == $item->id)
                        <div class="card shadow mb-4">
                            <!-- Card Header - Accordion -->
                            <div href="#collapseCardExample-{{ $item->id }}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-{{ $item->id }}">
                                <h6 class="m-0 font-weight-bold text-primary d-inline text-capitalize">{{ $item->nama }} </h6>
                            </div>
                            <div class="collapse" id="collapseCardExample-{{ $item->id }}">
                                <div class="card-body">
                                    @include('mata-pelajaran.component.menu', ["item" => $item])
                                </div>
                            </div>
                        </div>
                    @endif

                @elseif (Auth::user()->checkIsAdminMgmp())
                            
                        @if (Auth::user()->mata_pelajaran->id == $item->id)
                        
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <div href="#collapseCardExample-{{ $item->id }}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-{{ $item->id }}">
                                    <h6 class="m-0 font-weight-bold text-primary d-inline text-capitalize">{{ $item->nama }} </h6>
                                </div>
                                <div class="collapse" id="collapseCardExample-{{ $item->id }}">
                                    <div class="card-body">
                                        @include('mata-pelajaran.component.menu', ["item" => $item])
                                    </div>
                                </div>
                            </div>
                        @endif

                @elseif (Auth::user()->checkIsAnggotaMgmp())
                            
                        @if (Auth::user()->mata_pelajaran->id == $item->id)
                        
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <div href="#collapseCardExample-{{ $item->id }}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-{{ $item->id }}">
                                    <h6 class="m-0 font-weight-bold text-primary d-inline text-capitalize">{{ $item->nama }} </h6>
                                </div>
                                <div class="collapse" id="collapseCardExample-{{ $item->id }}">
                                    <div class="card-body">
                                        @include('mata-pelajaran.component.menu', ["item" => $item])
                                    </div>
                                </div>
                            </div>
                            
                    @endif   

                @endif
                

                
            </div>
        </div>
    @endforeach

@if (Auth::user()->role == 5)
    <!-- Content Row -->
    <div class="row">
    <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ url("admin/forum-mgmp/lembaga/$lembaga->id/mata-pelajaran") }}" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
   

</div>
@endsection