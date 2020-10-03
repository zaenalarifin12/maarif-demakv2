@extends('layouts.master')

@section('title', "Home")
  
@section('heading', "Home")

@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Home</li>
@endsection

@section('content')
          <!-- Content Row -->
          <div class="col">
            
            @include('layouts.includes.alert-card', [
              "url" => url("/admin/home/banner"),
              "name" => "Foto",
            ])

            @include('layouts.includes.alert-card', [
              "url" => url("/admin/kerja-sama"),
              "name" => "Kerja Sama",
            ])

           
            @include('layouts.includes.alert-card', [
              "url" => url("/admin/video-promosi"),
              "name" => "Video Promosi",
            ])
          </div>
@endsection