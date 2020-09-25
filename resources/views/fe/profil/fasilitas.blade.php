@extends('fe.layouts.master')

@section('content')
    <div class="px-10 py-4 flex justify-end bg-gray-300">
        <p class="mx-auto">
            <a href="index.html"><strong>Home</strong></a>
            / <strong>profil</strong>
            / jajaran</p>
    </div>

    <div class="px-10 py-10 bg-gray-bg">
        @if ($banner == null)
            <div>Belum ada banner</div>
        @else
        <img src="{{ asset("storage/$banner->banner_fasilitas")}}" class="h-56 mx-auto" alt="" srcset="">
        @endif
        
        <div class="flex py-5">
            <h1 class="custom-heading uppercase">Fasilitas Maarif</h1>
        </div>
        <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt corrupti eum, fuga amet
            odit hic deleniti nihil
            possimus autem nostrum modi inventore temporibus quia asperiores architecto, iure reiciendis corporis culpa?
        </p>

        <div class="flex justify-center">
            <h1 class=" custom-heading">Fasilitas</h1>
        </div>

        <div class="flex flex-col lg:flex-row flex-wrap justify-evenly my-10">
            
            @foreach ($fasilitas as $item)
                <div class="w-full lg:w-1/4 my-4 mx-2">
                    <div class="p-3 bg-white rounded-lg">
                        <div class="bg-green-nu p-4 rounded-lg">
                            <img src="{{ asset("storage/$item->gambar") }}" class="h-48 mx-auto" alt="">
                            <h1 class=" my-2 font-bold text-center text-xl text-white">{{$item->nama }}</h1>
                            <p class="font-light text-center text-white">
                                {{ $item->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        
        </div>
    </div>
@endsection