@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcump')
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection

@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-center text-uppercase mb-1">
                    <a href="{{ url("/") }}" target="_blank" rel="noopener noreferrer">
                        Website
                    </a>  
                </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection