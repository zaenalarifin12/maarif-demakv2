@extends('layouts.master')

@section('title', "Unit")
  
@section('heading', "Unit")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Unit</li>
@endsection

@section('content')
          <div class="col">
            <div class="row">
                <div class="col-6">
                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample-unit" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-unit">
                            <h6 class="m-0 font-weight-bold text-primary d-inline"> UNITENDIK </h6>
                        </a>
                        <div class="collapse" id="collapseCardExample-unit">
                            <div class="card-body">
                                <ul>
                                <li>
                                        <a href="" class="font-weight-bold text-danger">Jajaran Pengurus</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/6/program") }}" class="font-weight-bold text-info">Program Kegiatan</a>                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/6/event") }}" class="font-weight-bold text-info">Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/6/galeri") }}" class="font-weight-bold text-info">Galeri</a>
                                    </li>
          
                                    <li>
                                    <a href="" class="font-weight-bold text-secondary">Product</a>
                                    <div class="container">
                                        <div class="collapse show" id="collapseExample">
                                            <ul>
                                                <li>
                                                    <a href="{{ url("/admin/unit/0/category/6/eprint") }}" class="font-weight-bold text-info">E-Print</a>
                                                </li>
                                                <a href="{{ url("/admin/unit/0/category/6/digital") }}" class="font-weight-bold text-info">Digital</a>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample-pm" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-pm">
                            <h6 class="m-0 font-weight-bold text-primary d-inline"> Penjaminan Mutu </h6>
                        </a>
                        <div class="collapse" id="collapseCardExample-pm">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="" class="font-weight-bold text-info">Jajaran Pimpinan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/3/program") }}" class="font-weight-bold text-info">Program Kegiatan</a>                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/3/event") }}" class="font-weight-bold text-info">Event</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/3/galeri") }}" class="font-weight-bold text-info">Galeri</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample-blk" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-blk">
                            <h6 class="m-0 font-weight-bold text-primary d-inline"> Balai Latihan Kerja </h6>
                        </a>
                        <div class="collapse" id="collapseCardExample-blk">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="" class="font-weight-bold text-info">Jajaran Pengurus</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/4/program") }}" class="font-weight-bold text-info">Program Kegiatan</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/4/galeri") }}" class="font-weight-bold text-info">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/4/informasi") }}" class="font-weight-bold text-info">Informasi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

    
                </div>
            </div>
          </div>
@endsection