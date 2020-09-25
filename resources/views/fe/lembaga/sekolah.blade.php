@extends('fe.layouts.master')

@section('content')
    
<div class="px-10 py-4 flex justify-end bg-gray-300">
    <p class="mx-auto">
    <a href="index.html"><strong>Home</strong></a> 
    / <strong>Lembaga</strong> 
    / {{ $lembaga->nama }}</p>
</div>

<div class="px-10 py-10">
    <h1 class="text-center text-2xl">Sekolah {{ $lembaga->nama }}</h1>
    <p class="">
        {!! $isiLembaga->deskripsi ?? "Belum ada deskripsi" !!}
    </p>
</div>
@endsection