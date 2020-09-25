@extends('fe.layouts.master')

@section('content')
<div class="px-10 py-4 flex justify-end bg-gray-300">
    <p class="mx-auto">
        <a href="index.html"><strong>Home</strong></a>
        / <strong>profil</strong>
        / jajaran</p>
</div>

<div class="px-10 py-10 bg-gray-bg ">
    {{-- <div class="flex py-5 justify-center">
        <h1 class="custom-heading capitalize"> {{ $category->nama }}</h1>
    </div> --}}


    
    <!-- berita -->
    <div class="px-10 py-10">
        <div class="flex">
            <h2 class="w-auto custom-heading text-left pl-0 capitalize"> {{ $category->nama }} terbaru</h2>
        </div>

        <div class="flex flex-col lg:flex-row flex-wrap justify-around py-3">
            @forelse ($article as $item)
                <div class="pr-3 py-2 w-full lg:w-1/3 break-all">
                    <a href="{{ url("/informasi/$category->id/$item->id") }}">
                        <img src="{{ asset("storage/$item->banner") }}" class="object-cover h-64 w-full" alt="" srcset="">
                        <h1 class="custom-text-title">
                            <a href="">
                                {{ $item->judul }}
                            </a>
                        </h1>
                        <p class="custom-text-date">{{ $item->created_at }}</p>
                        <p>

                            {!! $item->deskripsi !!}
                        </p>
                    </a>
                </div>
            @empty
                <div class="text-center">
                    Belum Ada {{ $category->nama }}
                </div>
            @endforelse

        </div>

        <div class="my-3">
            {{ $article->links() }}
        </div>
    </div>

</div>
@endsection
