<section id="sp-footer-copyright" class="soma-footer">
    <div class="container">
        <div class="row">
            <div id="sp-footer-copyright" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">

                            <div class="custom">
                                <p style="text-align: center;">Copyright © 2020 - {{ date("Y") }} Ma'arif Demak |
                                    Support by 
                                    <span style="color: #000000;">
                                        <strong>
                                            <a style="color: #000000;"
                                                href="https://ti.umk.ac.id"
                                                target="_blank">Teknik Informatika UMK</a>
                                            </strong>
                                        </span>
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="offcanvas-menu">
    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
    <div class="offcanvas-inner">
        <div class="sp-module ">
            <div class="sp-module-content">
                <ul class="nav menumenu-mainmenu menu-richmenu">
                    {{-- <li class="item-1932"><a href="layanan-umum.html" title="UMK Ku"><img src="images/umkku.png"
                                alt="UMK Ku" /></a></li> --}}
                    @if (Auth::guard("siswa")->check() || Auth::check())
                            <li class="item-1559 deeper parent">
                                <a href="{{ route('logout') }}" style="color: red" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                    Logout
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>    
                        
                        @else
                            <li class="item-1559 deeper parent">
                                <a href="{{url("/loginSiswa")}}"
                                style="color: green;"
                                title="Login">Login</a>
                            </li>    
                        @endif
                    <li class="item-1559 deeper parent"><a href="#"
                            title="Profil Yayasan Maarif Demak">PROFIL</a>
                        <ul class="nav-child unstyled small">
                            <li class="item-1693">
                                <a href="{{ url("/profil/visi-misi") }}">Visi Misi</a>
                            </li>
                            <li class="item-1694">
                                <a href="{{ url("/profil/jajaran") }}">Jajaran Pengurus</a>
                            </li>
                            <li class="item-1698">
                                <a href="{{ url("/profil/fasilitas") }}">Fasilitas</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="item-1877 deeper parent"><a href="#">INFORMASI</a>
                        <ul class="nav-child unstyled small">
                            @foreach ($category as $item)
                                <li class="sp-menu-item"><a href="{{ url("/informasi/$item->id") }}">{{ $item->nama }}</a>
                                </li>    
                            @endforeach
                        </ul>
                    </li>

                    
                    <li class="item-1872 deeper parent"><a href="#">UNIT</a>
                        <ul class="nav-child">
                            <li class="item-1877 deeper parent"><a href="#">UNITENDIK</a>
                                <ul class="nav-child unstyled small">
                                    <li class="item-1945"><a href="{{ url("/unit/unitendik/jajaran") }}" >Jajaran Pengurus</a></li>
                                    <li class="item-1946"><a href="{{ url("/unit/unitendik/program") }}">Program Kegiatan</a></li>
                                    <li class="item-1947"><a href="{{ url("/unit/unitendik/event") }}">Event</a></li>
                                    <li class="item-1948"><a href="{{ url("/unit/unitendik/galeri") }}" >Galeri</a></li>
                                    {{-- <li class="item-1890 deeper parent"><a style="font-size: 12px" href="#">Produk</a> --}}
                                        <ul class="nav-child unstyled">
                                            <li class="item-1899"><a href="{{ url("/unit/unitendik/eprint") }}" >E - Print</a></li>
                                            <li class="item-1900"><a href="{{ url("/unit/unitendik/digital") }}">Digital</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="item-1877 deeper parent"><a href="#">Penjaminan Mutu</a>
                                <ul class="nav-child unstyled small">
                                    <li class="item-1899"><a href="#">Jajaran Pengurus</a> </li>
                                    <li class="item-1899"><a href="{{ url("/unit/penjaminan-mutu/program") }}">Program Kegiatan</a></li>
                                    <li class="item-1899"><a href="{{ url("/unit/penjaminan-mutu/event") }}">Event</a></li>
                                    <li class="item-1899"><a href="{{ url("/unit/penjaminan-mutu/galeri") }}">Galeri</a></li>
                                </ul>
                            </li>

                            <li class="item-1877 deeper parent"><a href="#">Balai Latihan Kerja</a>
                                <ul class="nav-child unstyled small">
                                    <li class="item-1899"><a href="#">Jajaran Pengurus</a></li>
                                    <li class="item-1899"><a href="{{ url("/unit/balai-latihan-kerja/program") }}">Program Kegiatan</a></li>
                                    <li class="item-1899"><a href="{{ url("/unit/balai-latihan-kerja/galeri") }}">Galeri</a></li>
                                    <li class="item-1899"><a href="{{ url("/unit/balai-latihan-kerja/informasi") }}">Informasi</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="item-1955 deeper parent"><a href="#" title="Penerimaan Mahasiswa Baru">Forum KKM</a>
                        <ul class="nav-child unstyled small">
                            @foreach ($lembaga as $item)
                            <li class="item-1871 "><a
                                href="{{ url("forum-kkm/$item->id") }}">{{ $item->nama }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="item-1955 deeper parent"><a href="#" title="Penerimaan Mahasiswa Baru">MGMP</a>
                        <ul class="nav-child unstyled small">
                            @foreach ($lembaga as $item)
                            <li class="ITEM-1011 "><a
                                href="{{ url("forum-mgmp/$item->id") }}">{{ $item->nama }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="item-1955 deeper parent"><a href="#" title="Penerimaan Mahasiswa Baru">PUBLIKASI</a>
                        <ul class="nav-child unstyled small">
                            <li class="item-1955"><a href="{{ url("/publikasi/eprint") }}">Eprints</a></li>
                            <li class="item-1955"><a href="{{ url("/publikasi/digital") }}">Digital Library</a></li>
                            <li class="item-1955"><a href="{{ url("/publikasi/karya") }}">Karya Ilmiah</a></li>
                        </ul>
                    </li>

                    <li class="item-1955 deeper parent"><a href="#" title="Penerimaan Mahasiswa Baru">LEMBAGA</a>
                        <ul class="nav-child unstyled small">
                            @foreach ($lembaga as $item)
                                <li class="item-1871"><a href="{{ url("lembaga/$item->id") }}">{{ $item->nama }}</a></li>    
                            @endforeach
                        </ul>
                    </li>

                    <li class="item-1955 deeper parent"><a href="{{ url("/kerja-sama") }}" class="my-text-black" title="Kerja Sama">KERJA SAMA</a></li>
  
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

