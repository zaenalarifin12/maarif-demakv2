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
        <h1 class=" custom-heading">Galeri</h1>
    </div>

    <div class="flex flex-col lg:flex-row flex-wrap justify-evenly my-10">
        
        @forelse ($galeri as $item)
            <div class="w-full lg:w-1/4 my-4 mx-2">
                <div class="p-3 bg-white rounded-lg">
                    <div class="bg-green-nu p-4 rounded-lg">
                        <img src="{{ asset("storage/$item->banner")}}" class="h-48 mx-auto object-cover" alt="">
                        <h1 class="font-bold capitalize text-center text-xl text-white">{{ $item->judul }}</h1>
                        <p class="font-light text-center capitalize text-white">
                            {{ $item->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center">
                Galeri Belum Ada
            </div>
        @endforelse
    </div>
</div>
@endsection