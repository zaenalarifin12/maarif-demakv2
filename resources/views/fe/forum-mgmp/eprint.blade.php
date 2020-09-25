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
        <h1 class=" custom-heading">E-Print</h1>
    </div>

    <div class="px-10 py-10">
        <div class="">
            <ul class="flex">
                @forelse ($ce as $item)
                    <li class="px-2 py-1 mx-2 bg-green-nu text-white font-bold rounded-lg">
                        <a href="http://">
                            {{$item->nama }}
                        </a>
                    </li>
                @empty
                    <li>Belum ada kategori Eprint</li>
                @endforelse
            </ul>
        </div>

        @forelse ($eprint as $item)
            <div class="my-10">
                <h1 class="custom-text-title text-xl">{{ $item->judul }}</h1>
                <p>
                    <span class="custom-text-date"> {{ $item->created_at }}</span>
                    @foreach ($item->category_eprints as $item2)
                        <span class="px-2 py-1 mx-2 bg-green-nu text-white font-bold rounded-lg">{{$item2->nama}}</span>
                    @endforeach
                </p>
                <div class="my-3">
                    <a href="{{ asset("/storage/$item->banner") }}" target="_blank" class="p-2 bg-green-nu text-white">
                        Download
                    </a>
                </div>
                
                <p class="py-2">
                    {!! $item->deskripsi !!}
                </p>
            </div>
        @empty
            <div class="text-center">
                Belum Ada Eprint
            </div>
        @endforelse
    </div>
</div>
@endsection