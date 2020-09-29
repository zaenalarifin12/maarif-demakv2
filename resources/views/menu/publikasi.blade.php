@extends('layouts.master')

@section('title', "Publikasi")
  
@section('heading', "Publikasi")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Publikasi</li>
@endsection

@section('content')
          <div class="col">
            <div class="row">
                <div class="col-6">
      
                    <div class="card shadow mb-4">
                        <a href="#collapseCardExample-publikasi" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample-publikasi">
                            <h6 class="m-0 font-weight-bold text-primary d-inline"> Publikasi </h6>
                        </a>
                        <div class="collapse" id="collapseCardExample-publikasi">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="{{ url("/admin/unit/0/category/5/eprint") }}" class="font-weight-bold text-info">E-Print</a>
                                    </li>
                                    <li>
                                        <a href="{{url("/admin/unit/0/category/5/digital")}}" class="font-weight-bold text-info">Digital Library</a>
                                    </li>
                                    <li>
                                        <a href="{{ url("admin/karya") }}" class="font-weight-bold text-info">Karya Ilmiah</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
@endsection