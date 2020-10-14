@extends('layouts.master')

@section('title', "Profil")
  
@section('heading', "Profil")


@section('breadcump')
    <li class="breadcrumb-item"><a href="{{ url("admin") }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil</li>
@endsection

@section('content')

          <div class="col">
            
            @include('layouts.includes.alert-card', [
              "url" => url("/admin/profil/visi-misi"),
              "name" => "Visi Misi",
            ])

            @include('layouts.includes.alert-card', [
              "url" => url("/admin/profil/jajaran"),
              "name" => "Jajaran Pengurus",
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