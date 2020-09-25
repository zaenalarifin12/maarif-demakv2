<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("fe/dist/main.css")}}">
    <link rel="stylesheet" href="{{ asset("fe/dist/owl.carousel.min.css")}}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link type="text/css" rel="stylesheet" href="{{ asset("fe/dist/lightslider.css")}}" />                  


</head>
<style>
    .dropdown-menu[data-show] {
        display: block;
    }
</style>

<body class="font-sans">

    <div class="relative">

    <!-- up header -->
    <div class="flex flex-col lg:flex-row px-16 justify-around bg-green-custom p-2 text-white">
        <div class="w-full lg:w-1/4 mb-4 lg:mb-0 flex justify-content-start">
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

        <div class="w-full lg:w-2/4">
            <ul class="flex justify-around">
                <li class="text-xs font-extrabold">Hotline 089123123123</li>
                <li class="text-xs font-extrabold">Senin - sabtu 08.00 - 15.00</li>
                <li class="text-xs font-extrabold">maarif@gmail.com</li>
            </ul>
        </div>

    </div>

    <!-- header -->
    <div class="flex px-4 lg:px-16 z-10 justify-around bg-green-nu py-4 text-white">
        <div class="w-1/4">
            <span>Logo</span>
        </div>

        <div class="w-3/4">

            <div class="flex hidden z-10 w-1/2 h-full overflow-y-scroll top-0 right-0 inset-y-0 bg-white">
                <div class="pt-5 pl-5">
                    <ul class="">
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                                <ul class="pl-5 mb-2">
                                    <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                                    <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                                    <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                                </ul>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>

                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                        <a href="" class="text-green-nu font-bold uppercase mt-2">Label 1</a>
                        <ul class="pl-5 mb-2">
                            <li class="text-green-nu font-light border-b-2 border-green-nu"><a href=""> submenu 1</a></li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                            <li class="text-green-nu font-light border-b-2 border-green-nu">submenu 1</li>
                        </ul>
                       
                        
                        
                    </ul>
                </div>
            </div>

            <ul class="hidden lg:flex justify-start pl-12">
                <li class=" mx-4 text-sm font-bold text-white cursor-pointer uppercase">
                    <a href="{{ url("/") }}">
                        Home
                    </a>
                </li>
                <div class="mx-4  dropdown flex flex-col">
                    <span class="text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Profil
                    </span>

                    <div class="dropdown-menu hidden pt-5">
                        <div class="rounded bg-green-nu opacity-90">
                        <div class="dropdown-item p-2">
                                <a href="#" class="dropdown-link flex px-4 py-3 text-white whitespace-no-wrap rounded 
                                hover:text-green-nu hover:bg-gray-100 capitalize">Visi Misi</a>
                            </div>
                            <div class="dropdown-item p-2">
                                <a href="{{ url("profil/jajaran") }}" class="dropdown-link flex px-4 py-3 text-white whitespace-no-wrap rounded 
                                hover:text-green-nu hover:bg-gray-100 capitalize">Jajaran pengurus</a>
                            </div>
                            {{-- <div class="dropdown-item p-2">
                                <a href="#" class="dropdown-link flex px-4 py-3 text-white whitespace-no-wrap rounded 
                                hover:text-green-nu hover:bg-gray-100 capitalize">Visi Misi</a>
                            </div> --}}
                            <div class="dropdown-item p-2">
                                <a href="{{ url("/profil/fasilitas") }}" class="dropdown-link flex px-4 py-3 text-white whitespace-no-wrap rounded 
                                hover:text-green-nu hover:bg-gray-100 capitalize">Fasilitas</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mx-4 dropdown flex flex-col">
                    <span class="text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Informasi
                    </span>

                    <div class="dropdown-menu hidden pt-5">
                        <div class="rounded bg-green-nu bg-opacity-90 font-bold">
                           @foreach ($category as $item)
                            <div class="dropdown-item p-2">
                                    <a href="{{ url("/informasi/$item->id") }}" class="dropdown-link flex px-2 py-3 text-white whitespace-no-wrap rounded 
                                    hover:text-green-nu hover:bg-gray-100 capitalize">{{ $item->nama }}</a>
                                </div>       
                           @endforeach
                        </div>
                    </div>
                </div>


                <div class="mx-4 dropdown flex flex-col">
                    <span class=" text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Unit
                    </span>

                    <div class="dropdown-menu hidden pt-5 ">
                        @foreach ($lembaga as $item)
                            <div class=" bg-green-nu opacity-90 text-white py-1">
                                <div class="dropdown-item">
                                    <div class="dropdown2 relative inline-flex">
                                        <span class="
                                        dropdown-text inline-flex px-12 py-3 items-center hover:bg-white rounded mx-1 my-1
                                        hover:text-green-nu
                                        ">{{ $item->nama }}</span>
                                        <div class="dropdown-menu hidden absolute ">
                                            <div class="rounded bg-green-nu text-white ml-3">
                                                @foreach ($item->mata_pelajarans as $mp)
                                                <div class="dropdown-item p-2 rounded">
                                                    <div class="dropdown2 relative inline-flex rounded">
                                                        <span class="
                                                        dropdown-text inline-flex px-8 py-3 items-center rounded hover:bg-white
                                                        hover:text-green-nu
                                                        ">{{ $mp->nama }}</span>
                                               
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>


                <div class=" mx-4 dropdown flex flex-col">
                    <span class="text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Forum MGMP
                    </span>

                    <div class="dropdown-menu hidden pt-5 ">
                        @foreach ($lembaga as $item)
                            <div class=" bg-green-nu opacity-90 text-white py-1">
                                <div class="dropdown-item">
                                    <div class="dropdown2 relative inline-flex">
                                        <span class="
                                        dropdown-text inline-flex px-12 py-3 items-center hover:bg-white rounded mx-1 my-1
                                        hover:text-green-nu
                                        ">{{ $item->nama }}</span>
                                        <div class="dropdown-menu hidden absolute ">
                                            <div class="rounded bg-green-nu text-white ml-3">
                                                @foreach ($item->mata_pelajarans as $mp)
                                                <div class="dropdown-item p-2 rounded">
                                                    <div class="dropdown2 relative inline-flex rounded">
                                                        <span class="
                                                        dropdown-text inline-flex px-8 py-3 items-center rounded hover:bg-white
                                                        hover:text-green-nu
                                                        ">{{ $mp->nama }}</span>
                                                        <div class="dropdown-menu hidden absolute">
                                                            <div class="rounded bg-green-nu text-white m-px ml-4">
                                                                <div class="dropdown-item p-2">
                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/galeri") }}" class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                    hover:text-green-nu hover:bg-white">Galeri</a>
                                                                </div>
                                                                <div class="dropdown-item p-2 rounded">
                                                                    <div class="dropdown2 relative inline-flex rounded">
                                                                        <span class="
                                                                        dropdown-text inline-flex px-8 py-3 items-center rounded hover:bg-white
                                                                        hover:text-green-nu
                                                                        ">Product</span>
                                                                        <div class="dropdown-menu hidden absolute pl-2">
                                                                            <div
                                                                                class="rounded bg-green-nu text-white m-px">
                                                                                <div class="dropdown-item p-2">
                                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/eprint") }}"
                                                                                        class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                                    hover:text-green-nu hover:bg-white">E-Print</a>
                                                                                </div>
                                                                                <div class="dropdown-item p-2">
                                                                                    <a href="{{  url("forum-mgmp/$item->id/$mp->id/digital") }}"
                                                                                        class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                                    hover:text-green-nu hover:bg-white">Digital</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item p-2">
                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/event") }}" class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                    hover:text-green-nu hover:bg-white">Event</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="dropdown-item">
                                    <div class="dropdown2 relative inline-flex">
                                        <span class="
                                        dropdown-text inline-flex px-12 py-3 items-center hover:bg-white rounded mx-1 my-1
                                        hover:text-green-nu
                                        ">{{ $item->nama }}</span>
                                        <div class="dropdown-menu hidden absolute ">
                                            <div class="rounded bg-green-nu text-white ml-3">
                                                @foreach ($item->mata_pelajarans as $mp)
                                                <div class="dropdown-item p-2 rounded">
                                                    <div class="dropdown2 relative inline-flex rounded">
                                                        <span class="
                                                        dropdown-text inline-flex px-8 py-3 items-center rounded hover:bg-white
                                                        hover:text-green-nu
                                                        ">{{ $mp->nama }}</span>
                                                        <div class="dropdown-menu hidden absolute">
                                                            <div class="rounded bg-green-nu text-white m-px ml-4">
                                                                <div class="dropdown-item p-2">
                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/galeri") }}" class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                    hover:text-green-nu hover:bg-white">Galeri</a>
                                                                </div>
                                                                <div class="dropdown-item p-2 rounded">
                                                                    <div class="dropdown2 relative inline-flex rounded">
                                                                        <span class="
                                                                        dropdown-text inline-flex px-8 py-3 items-center rounded hover:bg-white
                                                                        hover:text-green-nu
                                                                        ">Product</span>
                                                                        <div class="dropdown-menu hidden absolute pl-2">
                                                                            <div
                                                                                class="rounded bg-green-nu text-white m-px">
                                                                                <div class="dropdown-item p-2">
                                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/eprint") }}"
                                                                                        class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                                    hover:text-green-nu hover:bg-white">E-Print</a>
                                                                                </div>
                                                                                <div class="dropdown-item p-2">
                                                                                    <a href="{{  url("forum-mgmp/$item->id/$mp->id/digital") }}"
                                                                                        class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                                    hover:text-green-nu hover:bg-white">Digital</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown-item p-2">
                                                                    <a href="{{ url("forum-mgmp/$item->id/$mp->id/event") }}" class="dropdown-link text-center flex px-8 py-3 whitespace-no-wrap rounded 
                                                                    hover:text-green-nu hover:bg-white">Event</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>

                </div>


                <div class="mx-4 dropdown flex flex-col">
                    <span class=" text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Publikasi
                    </span>

                    <div class="dropdown-menu hidden pt-5">
                            <div class=" bg-green-nu opacity-90 text-white py-1 rounded">
                                <div class="dropdown-item hover:bg-white rounded m-2">
                                    <div class="dropdown2 relative inline-flex">
                                        <span class="
                                        dropdown-text inline-flex px-12 py-3 items-center mx-1 my-1
                                        hover:text-green-nu
                                        ">E-Print</span>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="dropdown2 relative inline-flex">
                                        <span class="
                                        dropdown-text inline-flex px-12 py-3 items-center hover:bg-white rounded mx-1 my-1
                                        hover:text-green-nu
                                        ">Digital Library</span>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="dropdown2 relative inline-flex">
                                        <a href="{{ url("publikasi/karya-ilmiah") }}" class="
                                        dropdown-text inline-flex px-12 py-3 items-center hover:bg-white rounded mx-1 my-1
                                        hover:text-green-nu
                                        ">
                                 
                                                Karya Ilmiah
                                      
                                    </a>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>

                <div class="mx-4  dropdown flex flex-col">
                    <span class="text-sm font-bold text-white hover:text-gray-nu2 cursor-pointer uppercase">
                        Lembaga
                    </span>

                    <div class="dropdown-menu hidden pt-5">
                        <div class="rounded bg-green-nu bg-opacity-90 font-bold">
                           @foreach ($lembaga as $item)
                            <div class="dropdown-item p-2">
                                    <a href="{{ url("/lembaga/$item->id") }}" class="dropdown-link flex px-10 py-3 text-white whitespace-no-wrap rounded 
                                    hover:text-green-nu hover:bg-gray-100 uppercase">{{ $item->nama }}</a>
                                </div>       
                           @endforeach
                        </div>
                    </div>
                </div>



            </ul>
        </div>
    </div>

    @yield('content')

    @include('fe.layouts.footer')

</div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
    <script src="{{ asset("fe/dist/owl.carousel.min.js")}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset("fe/dist/lightslider.js")}}"></script>


    <script>
        $(document).ready(function () {
            $(".dropdown").each(function (_, dropdown) {
                const dropdownMenu = $(dropdown).find("> .dropdown-menu")[0];
                let popperInstance = null;

                function create() {
                    popperInstance = Popper.createPopper(dropdown, dropdownMenu, {
                        placement: "bottom-start",
                        strategy: "absolute",
                        modifiers: [{
                            name: "flip",
                            options: {
                                fallbackPlacements: [
                                    "top", "bottom", "left", "right"
                                ]
                            }
                        }]
                    })
                }

                function destroy() {
                    if (popperInstance) {
                        popperInstance.destroy();
                        popperInstance = null;
                    }
                }

                function show() {
                    $(dropdownMenu).attr("data-show", "");
                    create();
                }

                function hide() {
                    $(dropdownMenu).removeAttr("data-show");
                    destroy();
                }

                $(dropdown).on("mouseenter focus", show);
                $(dropdown).on("mouseleave blur", hide)

            })
        });
    </script>

    <script>
        $(document).ready(function () {
            // mega menu
            $(".dropdown2").each(function (_, dropdown) {
                const dropdownMenu = $(dropdown).find("> .dropdown-menu")[0];
                let popperInstance = null;

                function create() {
                    popperInstance = Popper.createPopper(dropdown, dropdownMenu, {
                        placement: "right-start",
                        strategy: "absolute",
                        modifiers: [{
                            name: "flip",
                            options: {
                                fallbackPlacements: [
                                    "top", "bottom", "left", "right"
                                ]
                            }
                        }]
                    })
                }

                function destroy() {
                    if (popperInstance) {
                        popperInstance.destroy();
                        popperInstance = null;
                    }
                }

                function show() {
                    $(dropdownMenu).attr("data-show", "");
                    create();
                }

                function hide() {
                    $(dropdownMenu).removeAttr("data-show");
                    destroy();
                }

                $(dropdown).on("mouseenter focus", show);
                $(dropdown).on("mouseleave blur", hide)

            })
            //end megamenu

            // corousle
            var owl = $('.kerja');

            owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false
            });
        
            $(".banner").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
            });
        

        });
    </script>


<script type="text/javascript">
    $(document).ready(function() {
        $("#lightSlider").lightSlider({
            item: 1,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 10,
     
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
     
            speed: 400, //ms'
            auto: true,
            loop: true,
            slideEndAnimation: true,
            pause: 2000,
     
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
     
            rtl:false,
            adaptiveHeight:false,
     
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
     
            thumbItem:10,
            pager: true,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
     
            enableTouch:true,
            enableDrag:true,
            freeMove:true,
            swipeThreshold: 40,
     
            responsive : [],
     
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
        });
    });
    </script>
</body>

</html>