
<body class="site com-sppagebuilder view-page no-layout no-task itemid-1865 en-gb ltr  sticky-header layout-fluid">

	<div class="body-innerwrapper">
		<section id="sp-top-menu" class="flex soma-header">
			 <div class="my-container-2"> {{-- container --}}
				<div class="row">
					<div id="sp-menu-top" class="col-sm-9 col-md-12">
                        
                        <div class="sp-column flex"
                        style="display: flex; justify-content: space-between">
                            <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2">
                                <div class="sp-column logobckg">
                                    <a class="logo" href="{{ url("/") }}">
                                        <img class="sp-default-logo hidden-xs" src="{{ asset("assetfile/images/umk/logo-primary.png")}}" >
                                            
                                            {{-- <img class="sp-retina-logo hidden-xs"
                                            style="height:80px;" 
                                            src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak" width="265"
                                            height="66">
                                            
                                            <img class="sp-default-logo visible-xs"
                                            style="height:80px;" 
                                            src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak"> --}}
                                    </a>
                                </div>
                            </div>


                            <div class="col-xs-8 col-sm-2 col-md-2">
                                <div class="sp-column logobckg">
                                    <a class="logo" href="{{ url("/") }}">
                                        <img class="sp-default-logo hidden-xs" src="{{ asset("assetfile/images/umk/logo.png")}}" alt="">        
                                    </a>
                                </div>
                            </div>
    
                        </div>
                    
                        

					</div>
                    
				</div>
			</div>
		</section>
		<header id="sp-header" class="flex soma-footer">
			<div class="my-container">
				<div class="row">
					{{-- <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-1" style="width: 10% !important">
						<div class="sp-column logobckg"><a class="logo" href="{{ url("/") }}">
                                <h1><img class="sp-default-logo hidden-xs" src="{{ asset("assetfile/images/umk/logo-primary.png")}}"
                                        style="height:80px;" 
                                        alt="Universitas Muria Kudus"><img class="sp-retina-logo hidden-xs"
                                        style="height:80px;" 
										src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak" width="265"
                                        height="66"><img class="sp-default-logo visible-xs"
                                        style="height:80px;" 
										src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak"></h1>
							</a></div>
					</div> --}}
					<div id="sp-menu" class="col-xs-4 col-sm-10 col-md-11" style="margin: 0px auto !important">
						<div class="sp-column flex" >
							<div class="sp-megamenu-wrapper" >
								<a id="offcanvas-toggler" class="visible-xs visible-sm" href="#"><i
										class="fa fa-bars"></i></a>
								<ul class="sp-megamenu-parent menu-fade-down hidden-xs hidden-sm">
									<li class="sp-menu-item"><a href="{{url("/")}}" class="my-text-black" title="Home">HOME</a></li>
                         
                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black"
											title="Profil">PROFIL</a>
										<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
													<li class="sp-menu-item"><a 
															href="{{ url("/profil/visi-misi") }}">Visi Misi</a></li>
											
													<li class="sp-menu-item"><a
															href="{{ url("/profil/jajaran") }}">Jajaran Pengurus</a>
													</li>
													<li class="sp-menu-item"><a
															href="{{ url("/profil/fasilitas") }}">Fasilitas</a></li>
												</ul>
											</div>
										</div>
                                    </li>

                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black">INFORMASI</a>
										<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
                                                    @foreach ($category as $item)
                                                        <li class="sp-menu-item"><a href="{{ url("/informasi/$item->id") }}">{{ $item->nama }}</a>
                                                        </li>    
                                                    @endforeach
												</ul>
											</div>
										</div>
									</li>

                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black">UNIT</a>
                                        <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                            <div class="sp-dropdown-inner">
                                                <ul class="sp-dropdown-items">
                                                    <li class="sp-menu-item sp-has-child"><a
                                                            href="#" >UNITENDIK</a>
                                                        <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                            style="width: 240px;">
                                                            <div class="sp-dropdown-inner">
                                                                <ul class="sp-dropdown-items">
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/jajaran") }}" >Jajaran Pengurus</a> </li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/program") }}">Program Kegiatan</a> </li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/event") }}">Event</a> </li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/galeri") }}" >Galeri</a></li>
                                                                    <li class="sp-menu-item sp-has-child"><a
                                                                        href="#">Produk</a>
                                                                        <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                                        style="width: 150px;">
                                                                        <div class="sp-dropdown-inner">
                                                                            <ul class="sp-dropdown-items">
                                                                                <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/eprint") }}" >E-Print</a> </li>
                                                                                <li class="sp-menu-item"><a href="{{ url("/unit/unitendik/digital") }}">Digital</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                        </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                
                                            
                                                    <li class="sp-menu-item sp-has-child"><a
                                                        href="#" >Penjaminan Mutu</a>
                                                        <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                            style="width: 240px;">
                                                            <div class="sp-dropdown-inner">
                                                                <ul class="sp-dropdown-items">
                                                                    <li class="sp-menu-item"><a href="#" >Jajaran Pengurus</a> </li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/penjaminan-mutu/program") }}">Program Kegiatan</a></li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/penjaminan-mutu/event") }}">Event</a></li>
                                                                    <li class="sp-menu-item"><a href="{{ url("/unit/penjaminan-mutu/galeri") }}">Galeri</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="sp-menu-item sp-has-child"><a
                                                        href="#" >Balai Latihan Kerja</a>
                                                    <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                        style="width: 240px;">
                                                        <div class="sp-dropdown-inner">
                                                            <ul class="sp-dropdown-items">
                                                                <li class="sp-menu-item"><a href="#">Jajaran Pengurus</a>
                                                                </li>
                                                                <li class="sp-menu-item"><a href="{{ url("/unit/balai-latihan-kerja/program") }}">Program Kegiatan</a>
                                                                </li>
                                                                <li class="sp-menu-item"><a href="{{ url("/unit/balai-latihan-kerja/galeri") }}">Galeri</a>
                                                                </li>
                                                                <li class="sp-menu-item"><a href="{{ url("/unit/balai-latihan-kerja/informasi") }}">informasi</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black" >FORUM KKM</a>
										<div class="sp-dropdown sp-dropdown-main" style="width: 240px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
                                                    @foreach ($lembaga as $item)
                                                    <li class="sp-menu-item "><a
                                                        href="{{ url("forum-kkm/$item->id") }}">{{ $item->nama }}</a>
                                                    </li>
                                                    @endforeach
												</ul>
											</div>
										</div>
                                    </li>

                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black">FORUM MGMP</a>
										<div class="sp-dropdown sp-dropdown-main" style="width: 240px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
                                                    @foreach ($lembaga as $item)
                                                    <li class="sp-menu-item "><a
                                                        href="{{ url("forum-mgmp/$item->id") }}">{{ $item->nama }}</a>
                                                    </li>
                                                    @endforeach
												</ul>
											</div>
										</div>
                                    </li>

                                    
                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black">PUBLIKASI</a>
                                        <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                            <div class="sp-dropdown-inner">
                                                <ul class="sp-dropdown-items">
                                                    <li class="sp-menu-item"><a href="{{ url("/publikasi/eprint") }}"
                                                            >Eprints</a></li>
                                                    <li class="sp-menu-item"><a href="{{ url("/publikasi/digital") }}"
                                                            >Digital Library</a></li>
        
                                                    <li class="sp-menu-item"><a href="{{ url("/publikasi/karya") }}"
                                                        >Karya Ilmiah</a></li>
                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="sp-menu-item sp-has-child"><a href="#" class="my-text-black">LEMBAGA</a>
                                        <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 200px;">
                                            <div class="sp-dropdown-inner">
                                                <ul class="sp-dropdown-items">
                                                    @foreach ($lembaga as $item)
                                                        <li class="sp-menu-item"><a href="{{ url("lembaga/$item->id") }}"
                                                            >{{ $item->nama }}</a></li>    
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                
                                    <li class="sp-menu-item"><a href="{{url("/kerja-sama")}}" class="my-text-black" title="Kerja Sama">KERJA SAMA</a></li>

                                    @if (Auth::guard("siswa")->check() || Auth::check())
                                        <li class="sp-menu-item">
                                            <a href="{{ route('logout') }}" style="color: red" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                                Logout
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>    
                                    
                                    @else
                                        <li class="sp-menu-item">
                                            <a href="{{url("/loginSiswa")}}"
                                            style="color: green;"
                                            title="Login">Login</a>
                                        </li>    
                                    @endif
								</ul>
							</div>
						</div>
                    </div>
                    {{-- <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-1" style="width: 11% !important">
						<div class="sp-column logobckg"><a class="logo" href="{{ url("/") }}">
                                <h1><img class="sp-default-logo hidden-xs" src="{{ asset("assetfile/images/umk/logo.png")}}"
                                        style="height:80px;" 
                                        alt="Universitas Muria Kudus"><img class="sp-retina-logo hidden-xs"
                                        style="height:80px;" 
										src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak" width="265"
                                        height="66"><img class="sp-default-logo visible-xs"
                                        style="height:80px;" 
										src="{{ asset("assetfile/images/umk/logo.png")}}" alt="Yayasan Maarif Demak"></h1>
							</a></div>
					</div> --}}
				</div>
			</div>
		</header>