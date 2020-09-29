@extends('layouts.master')

@section('title', "Home")
  
@section('heading', "Home")


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil</li>
@endsection

@section('content')
          <!-- Content Row -->
          <div class="col">
            
            @include('layouts.includes.alert-card', [
              "url" => url("/admin/profil/strukur-jajaran"),
              "name" => "Struktur Jajaran ||",
            ])

            @include('layouts.includes.alert-card', [
              "url" => url("/admin/profil/banner-fasilitas"),
              "name" => "Foto Fasilitas ",
            ])

            @include('layouts.includes.alert-card', [
              "url" => url("/admin/profil/fasilitas"),
              "name" => "Fasilitas",
            ])

    
          </div>
@endsection