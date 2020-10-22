@extends('layouts.master')

@section('title', "Forum MGMP")
  
@section('heading', "Forum MGMP")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Forum MGMP</li>
@endsection

@section('content')
    <div class="col">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <a href="#collapseCardExample-Sekolah" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-Sekolah">
                        <h6 class="m-0 font-weight-bold text-primary d-inline"> Lembaga </h6>
                    </a>
                    <div class="collapse" id="collapseCardExample-Sekolah">
                        <div class="card-body">
                            <ul>
                                @if (Auth::user()->role == 5)
                                
                                    @foreach ($lembaga as $item)
                                        <li>
                                            <a href="{{ url("admin/forum-mgmp/lembaga/$item->id/mata-pelajaran") }}" class="font-weight-bold text-info">{{$item->nama}}</a>
                                        </li>
                                        
                                    @endforeach
                                @else
                                
                                    @foreach ($lembaga as $item)
                                        @if (Auth::user()->mata_pelajaran->lembaga->id == $item->id)
                                            <li>
                                                <a href="{{ url("admin/forum-mgmp/lembaga/$item->id/mata-pelajaran") }}" class="font-weight-bold text-info">{{$item->nama}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection