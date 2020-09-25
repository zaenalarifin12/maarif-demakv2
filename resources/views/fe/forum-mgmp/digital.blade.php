
@extends('fe.layouts.master')

@section('content')
<div class="px-10 py-4 flex justify-end bg-gray-300">
    <p class="mx-auto">
        <a href="index.html"><strong>Home</strong></a>
        / <strong>profil</strong>
        / jajaran</p>
</div>

<div class="px-10 py-10 bg-gray-bg h-screen ">
    <div class="flex py-5 justify-center">
        <h1 class="custom-heading capitalize">Sekolah <strong> {{ $lembaga->nama }} </strong> Mata Pelajaran <strong> {{ $mp->nama }} </strong></h1>
    </div>

    <div class="flex justify-center">
        <h1 class=" custom-heading">Produck Digital</h1>
    </div>


    <div class="px-10 py-10 break-words overflow-hidden">
        @if (empty($digital->deskripsi))
            <p class="text-center"> Belum Ada Produk Digital</p>
        @else
           <p class="">
            {!!  $digital->deskripsi  !!}      
            </p> 
        @endif
    </div>

</div>
@endsection

