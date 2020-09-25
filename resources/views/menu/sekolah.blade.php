@extends('layouts.master')

@section('title', "Lembaga")
  
@section('heading', "Lembaga")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lembaga</li>
@endsection

@section('content')
          <div class="col">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample-Sekolah" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-Sekolah">
                            <h6 class="m-0 font-weight-bold text-primary d-inline"> Lembaga </h6>
                        </a>
                        <div class="collapse" id="collapseCardExample-Sekolah">
                            <div class="card-body">
                                <ul>
                                    @foreach ($lembaga as $item)
                                        <li>
                                        <a href="{{ url("admin/lembaga/$item->id/isi-lembaga") }}" class="font-weight-bold text-info">{{$item->nama}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
@endsection