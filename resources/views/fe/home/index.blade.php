@extends('fe.layouts.master')

@section('title')
    
@endsection

@section('content')
    
    <!-- banner -->
    <div class="px-10 py-0">
        
        <div class="" id="lightSlider" >
            {{-- 
                TODO
                BANNER MASIH BUG
            --}}
            @foreach ($banner as $item)
                <li>
                    <img src="{{ asset("/storage/$item->gambar") }}" style="height: 300px" class="mx-auto" alt="" srcset="">
                </li>
                <li>
                    <img src="{{ asset("fe/dist/zzzzzz.jpg") }}" style="height: 300px" class="mx-auto" alt="" srcset="">
                </li>
            @endforeach
        </div>
    </div>

    

    <div class="flex flex-col md:flex-row justify-around mx-5 pb-4">
        <div>
            <img src="{{ asset("fe/asset/logo.png") }}" class="h-48 mx-auto" alt="" srcset="">
            <div class="flex justify-center">
                <p class="custom-heading uppercase mx-auto text-center lg:text-lg">BLK</p>
            </div>
        </div>
        <div>
            <img src="{{ asset("fe/asset/logo.png") }}" class="h-48 mx-auto" alt="" srcset="">
            <div class="flex justify-center">
                <p class="custom-heading uppercase mx-16 text-center lg:text-lg">UnitEndik</p>
            </div>
        </div>
        <div>
            <img src="{{ asset("fe/asset/logo.png") }}" class="h-48 mx-auto" alt="" srcset="">
            <div class="flex justify-center">
                <p class="custom-heading uppercase mx-auto text-center lg:text-lg">Digital Library</p>
            </div>
        </div>
        <div>
            <img src="{{ asset("fe/asset/logo.png") }}" class="h-48 mx-auto" alt="" srcset="">
            <div class="flex justify-center">
                <p class="custom-heading uppercase mx-16 text-center lg:text-lg">MGMP(product)</p>
            </div>
        </div>
        <div>
            <img src="{{ asset("fe/asset/logo.png") }}" class="h-48 mx-auto" alt="" srcset="">
            <div class="flex justify-center">
                <p class="custom-heading uppercase mx-16 text-center lg:text-lg">Kerja Sama</p>
            </div>
        </div>
    </div>

    <!-- berita -->
    <div class="px-10 py-10 bg-gray-nu">
        <div class="flex">
            <h2 class="w-auto custom-heading text-left pl-0">Berita terbaru</h2>
        </div>

        <div class="flex flex-col lg:flex-row justify-around py-3">

            @if ($berita->count() == 0)
                Data masih Kosong
            @else
                @foreach ($berita as $item)
                    <div class="pr-3 py-2 w-full lg:w-1/4 break-all">
                        <a href="{{ url("/berita/$item->id") }}">
                            <img src="{{ asset("storage/$item->banner") }}" class="object-cover h-64" alt="" srcset="">
                            <h1 class="custom-text-title">
                                <a href="">
                                    {{ \Illuminate\Support\Str::limit($item->judul, 40, ".....") }}
                                </a>
                            </h1>
                            <p class="custom-text-date">{{ $item->created_at }}</p>
                            <p>
                                {!! \Illuminate\Support\Str::limit($item->deskripsi, 70, "....") !!}
                            </p>
                        </a>
                    </div>
                @endforeach
            @endif
            
        </div>

        <div class="flex justify-end">
            <a href="{{ url("/informasi/1") }}" class="custom-button">Selengkapnya</a>
        </div>
    </div>

    <div class="px-10 py-10 flex flex-col lg:flex-row justify-around">
        <div class="w-full lg:w-1/2 mr-5">
            <div class="flex">
                <h2 class="custom-heading">Pengumuman</h2>
            </div>
            <div>
                @if ($pengumuman->count() == 0)
                    <p> Belum ada pengumuman</p>
                @else
                    @foreach ($pengumuman as $item)
                        <p class="custom-text-date"> {{ $item->created_at}} </p>
                        <h1 class="custom-text-title text-2xl"> {{ \Illuminate\Support\Str::limit($item->judul, 30, "....") }} </h1>
                    @endforeach
                @endif
            </div>
            @if ($pengumuman->count() != 0)
                <div class="flex justify-end">
                    <a href="{{ url("/informasi/1") }}" class="custom-button">Selengkapnya</a>
                </div>
            @endif

            <div class="flex">
                <h2 class="custom-heading">Agenda</h2>
            </div>
            <div>
                @if ($agenda->count() == 0)
                    <p> Belum ada pengumuman</p>
                @else
                    @foreach ($agenda as $item)
                        <p class="custom-text-date"> {{ $item->created_at}} </p>
                        <h1 class="custom-text-title text-2xl"> {{ \Illuminate\Support\Str::limit($item->judul, 30, "....") }} </h1>
                    @endforeach
                @endif
            </div>
            @if ($agenda->count() != 0)
                <div class="flex justify-end">
                    <a href="{{ url("/informasi/3") }}" class="custom-button">Selengkapnya</a>
                </div>
            @endif

        </div>
        <div class="w-full lg:w-1/2">
            <div class="flex">
                <h2 class="custom-heading">Video Promosi UMK</h2>
            </div>
            <div class="py-5">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $video->link ?? "" }}">
                </iframe>
            </div>
        </div>
    </div>

    <div class="px-10 my-4 py-10 flex flex-col lg:flex-row bg-green-100">
        <div class="w-full lg:w-1/2">
            <div class="flex">
                <h1 class="custom-heading">Galeri Dan Testimony</h1>
            </div>
            <div class="mt-5">
                <img src="{{ asset("fe/asset/image.jpg")}}" class="h-24 mx-auto" alt="">
                <div class="border-l-4 border-green-nu">
                    <p class="text-center my-5">Selama saya belajar di Universitas Muria Kudus telah banyak manfaat yang
                        saya
                        dapatkan, hingga posisi saya sekarang ini, semua ini saya lakukan berkat belajar di Universitas
                        Muria
                        Kudus. Hal ini juga sebagai bentuk pengabdian saya untuk Kudus yang lebih baik. Jayalah UMK
                        menjadi
                        perguruan tinggi yang bermutu.</p>
                    <p class="font-bold text-center">Masan S.E., M.M. ( Ketua DPRD Kabupaten Kudus)</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 mt-16">
            <img src="asset/image.jpg" class="h-24 mx-auto" alt="" srcset="">
        </div>
    </div>

    <div class="px-10 py-10">
        <div class="flex my-4">
            <h2 class="custom-heading">Kerja Sama</h2>
        </div>
        <div class="flex justify-evenly owl-carousel">
            @foreach ($kerjaSama as $item)
                <img src="{{ asset("/storage/$item->gambar") }}" class="w-1/3 h-48 item" alt="" srcset="">
            @endforeach
        </div>

    </div>

    <div class="custom-container bg-gray-nu">
        <div class="w-full lg:w-3/8 mr-2">
            <div class="flex my-4">
                <h2 class="custom-heading">Hubungi Kami</h2>
            </div>
            <div>

                <h2>Universitas Muria Kudus</h2><br>
                <p> Jl. Lingkar Utara UMK, Gondangmanis, Bae, Kudus - 59327
                Jawa Tengah - Indonesia </p>
                <br>
                <p> Telepon. +62291-438229 </p>
                <br>
                <p>Faks. +62291-437198 </p>
                <br>
                <p> Email: muria@umk.ac.id </p>
                
            </div>
        </div>
        <div class="w-full lg:w-1/8 mr-2">
            <div class="flex my-4">
                <h2 class="custom-heading">Ikuti Kami</h2>
            </div>
            <div>
                <div class="w-ful mb-4 lg:mb-0 flex justify-content-start">
                    <a class="mx-2" href="">
                        <img src="{{ asset("fe/asset/facebook.svg") }}" alt="">
                    </a>
                    <a class="mx-2" href="">
                        <img src="{{ asset("fe/asset/instagram.svg") }}" alt="">
                    </a>
                    <a class="mx-2" href="">
                        <img src="{{ asset("fe/asset/twitter.svg") }}" alt="">
                    </a>
                    <a class="mx-2" href="">
                        <img src="{{ asset("fe/asset/youtube.svg") }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-2/8 mr-2">
            <div class="flex my-4">
                <h2 class="custom-heading">Tautan Penting</h2>
            </div>
            <div>
                <a href=""> Pernyataan Sangkalan </a><br>
                <a href=""> Tampilan Lama </a><br>
                <a href=""> Laporkan Celah </a><br>
                <a href=""> FAQ </a><br>
                <a href=""> Peta Situs </a><br>
                <a href=""> Statistik Website </a><br>
                <a href=""> Flag Counter </a><br>
                <a href=""> Webometrics </a>
            </div>
        </div>
        <div class="w-full lg:w-2/8 mr-2">
            <div class="flex my-4">
                <h2 class="custom-heading">informasi Untuk</h2>
            </div>
            <div>
               <a href=""> Calon Mahasiswa </a><br>
               <a href=""> Mahasiswa </a><br>
               <a href=""> Alumni </a><br>
            </div>
        </div>
    </div>
@endsection