
<body class="site com-sppagebuilder view-page no-layout no-task itemid-1865 en-gb ltr  sticky-header layout-fluid">

	<div class="body-innerwrapper">
		<section id="sp-top-menu" class="flex">
			<div class="container">
				<div class="row">
					<div id="sp-menu-top" class="col-sm-9 col-md-9">
						<div class="sp-column flex">
							<ul class="sp-contact-info">
								<li class="sp-contact-phone"><i class="pe pe-7s-headphones"></i> Hotline {{ $licensi->hotline }}
								</li>
								<li class="sp-office-hours"><i class="pe pe-7s-timer"></i> {{ $licensi->jadwal }}
								</li>
								<li class="sp-contact-email"><i class="pe pe-7s-mail"></i> <a
										href="mailto:{{ $licensi->email }}">{{ $licensi->email }}</a></li>
							</ul>
							<ul class="social-icons">
								<li><a target="_blank"
										href="https://id-id.facebook.com/UNIVERSITAS-MURIA-KUDUS-UMK-182450701824294/"><i
											class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/@UMK_mu"><i
											class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/muriakudusuniversity/"><i
											class="fa fa-instagram"></i></a></li>
								<li><a target="_blank" href="https://www.youtube.com/user/channelUMK"><i
											class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				
					<div id="sp-search" class="col-sm-2 col-md-2">
						<div class="sp-column ">
							<div class="sp-module ">
								<div class="sp-module-content">

                                    @if (Auth::guard("siswa")->guest() && Auth::guest())
                                        <a href="{{ url("/loginSiswa") }}" class="sppb-btn sppb-btn-info sppb-btn- sppb-selector" style="color: white !important">Login</a>    
                                    @endif

                                    
                                    @if (Auth::guard("siswa")->check() || Auth::check())
                                        <form action="{{ url("/logout") }}" method="post">
                                            <input class="sppb-btn sppb-btn-danger sppb-btn- sppb-selector" type="submit" value="Logout">
                                            @csrf
                                        </form>    
                                    @endif
                                        
                                    
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<header id="sp-header" class="flex soma-footer">
			<div class="container">
				<div class="row">
					<div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2">
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
					</div>
					<div id="sp-menu" class="col-xs-4 col-sm-10 col-md-10 minus-margin">
						<div class="sp-column flex">
							<div class='sp-megamenu-wrapper'>
								<a id="offcanvas-toggler" class="visible-xs visible-sm" href="#"><i
										class="fa fa-bars"></i></a>
								<ul class="sp-megamenu-parent menu-fade-down hidden-xs hidden-sm">
									<li class="sp-menu-item"><a href="{{url("/")}}" title="Home">HOME</a></li>
                         
                                    <li class="sp-menu-item sp-has-child"><a href="#"
											title="Profil">PROFIL</a>
										<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
													<li class="sp-menu-item"><a
															href="{{ url("/profil/visi-misi") }}">Visi Misi</a></li>
											
													<li class="sp-menu-item"><a
															href="{{ url("/profil/jajaran") }}">Jajaran Pimpinan</a>
													</li>
													<li class="sp-menu-item"><a
															href="{{ url("/profil/fasilitas") }}">Fasilitas</a></li>
												</ul>
											</div>
										</div>
                                    </li>
                                    
                                    <li class="sp-menu-item sp-has-child"><a href="#">INFORMASI</a>
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

                                    <li class="sp-menu-item sp-has-child"><a href="#">UNIT</a>
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

									<li class="sp-menu-item sp-has-child"><a href="#" >Forum MGMP</a>
										<div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 100px;">
											<div class="sp-dropdown-inner">
												<ul class="sp-dropdown-items">
                                                    @foreach ($lembaga as $item)
                                                    <li class="sp-menu-item sp-has-child"><a
                                                        href="#">{{ $item->nama }}</a>
                                                            <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                                style="width: 180px;">
                                                                <div class="sp-dropdown-inner">
                                                                    <ul class="sp-dropdown-items" >
                                                                        @foreach ($item->mata_pelajarans as $item2)
                                                                            <li class="sp-menu-item sp-has-child"><a
                                                                                href="#">{{ $item2->nama }}</a>
                                                                                <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                                                style="width: 200px;">
                                                                                <div class="sp-dropdown-inner">
                                                                                    <ul class="sp-dropdown-items">
                                                                                        <li class="sp-menu-item">
                                                                                            <a href="#" >Jajaran Pengurus</a>
                                                                                        </li>
                                                                                        <li class="sp-menu-item"><a href="{{ url("forum-mgmp/$item->id/$item2->id/program") }}">Program Kegiatan</a></li>
                                                                                        <li class="sp-menu-item"><a href="{{ url("forum-mgmp/$item->id/$item2->id/event")}}">Event</a> </li>
                                                                                        <li class="sp-menu-item"><a href="{{ url("forum-mgmp/$item->id/$item2->id/galeri") }}">Galeri</a></li>
                                                                                        <li class="sp-menu-item sp-has-child"><a
                                                                                            href="#">Produk</a>
                                                                                            <div class="sp-dropdown sp-dropdown-sub sp-menu-right"
                                                                                            style="width: 150px;">
                                                                                            <div class="sp-dropdown-inner">
                                                                                                <ul class="sp-dropdown-items">
                                                                                                    <li class="sp-menu-item"><a
                                                                                                            href="{{ url("forum-mgmp/$item->id/$item2->id/eprint")}}">E-Print</a>
                                                                                                    </li>
                                                                                                    <li class="sp-menu-item"><a
                                                                                                            href="{{ url("forum-mgmp/$item->id/$item2->id/digital") }}">Digital</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                            </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        @endforeach
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
												</ul>
											</div>
										</div>
                                    </li>
                                    
                                <li class="sp-menu-item sp-has-child"><a href="#">PUBLIKASI</a>
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

                                <li class="sp-menu-item sp-has-child"><a href="#">LEMBAGA</a>
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
                                
                                <li class="sp-menu-item"><a href="{{url("/kerja-sama")}}" title="Kerja Sama">KERJA SAMA</a></li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>