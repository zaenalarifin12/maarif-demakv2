@extends('fe.layouts.master')


@section('content')
<div class="px-10 py-4 flex justify-end bg-gray-300">
    <p class="mx-auto">
        <a href="index.html"><strong>publikasi</strong></a>
        / <strong>profil</strong>
        / jajaran</p>
</div>

<div class="px-10 py-10 bg-gray-bg ">
    <div class="flex py-5 justify-center">
        <h1 class="custom-heading capitalize"> Karya Ilmiah</h1>
    </div>

    <div class="flex justify-center">
        <h1 class=" custom-heading">E-Print</h1>
    </div>

    <div class="px-10 py-10">

        @forelse ($karyaIlmiah as $item)
            <div class="my-10">
                <h1 class="custom-text-title text-xl">{{ $item->judul }}</h1>
                <p>
                    <span class="custom-text-date"> {{ $item->created_at }}</span>
             
                </p>
                <div class="my-4">
                    <a href="{{ asset("/storage/files/$item->banner") }}" target="_blank" class="p-2 bg-green-nu">
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