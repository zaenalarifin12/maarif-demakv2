@extends('fe.layouts.master')


@section('content')
<div class="px-10 py-4 flex justify-end bg-gray-300">
    <p class="mx-auto">
        <a href="index.html"><strong>Home</strong></a>
        / <strong>profil</strong>
        / jajaran</p>
</div>

<div class="px-10 py-10 bg-gray-bg ">
    <div class="flex py-5 justify-center">
        <h1 class="custom-heading capitalize">Sekolah {{ $lembaga->nama }} Mata Pelajaran {{ $mp->nama }}</h1>
    </div>

    <div class="flex justify-center">
        <h1 class=" custom-heading">Event</h1>
    </div>

    <div class="px-10 py-10">

        @forelse ($event as $item)
            <div class="my-10">
                <h1 class="custom-text-title text-xl">{{ $item->judul }}</h1>
                <p>
                    <span class="custom-text-date"> {{ $item->created_at }}</span>
                </p>
                {{-- TODO
                    link download file
                    --}}
                <p class="py-2">
                    {!! $item->deskripsi !!}
                </p>
            </div>
        
        @empty
            <div class="text-center">
                Belum Ada Event
            </div>        
        @endforelse
    </div>
</div>
@endsection