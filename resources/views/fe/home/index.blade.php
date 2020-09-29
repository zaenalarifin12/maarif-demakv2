@extends('fe.layouts.master')

@section('title')
    
@endsection

@section('content')
<section id="sp-body">
    <div class="row">
        <div id="sp-component" class="col-sm-12 col-md-12">
            <div class="sp-column ">
                <div id="system-message-container">
                </div>

                <div id="sp-page-builder" class="sp-page-builder  page-1">

                    <div class="page-content">
                        <section class="sppb-section " style="background-color:#fbc800;">
                            <div class="sppb-row">
                                <div class="sppb-col-sm-12">
                                    <div class="sppb-addon-container sppb-wow fadeInRight" style="padding:0px;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                                        <div class="sppb-addon ">
                                            <div class="slick-carousel-652 clearfix">
                                                @foreach ($banner as $item)
                                                
                                                    <div class="slick-img"><a href="#"><img
                                                        data-lazy="{{ asset("storage/$item->gambar")}}"></a></div>    
                                                            
                                                            
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        <section class="sppb-section center-block"
                            style="padding:5px 40px 10px 40px;background-image:url({{ asset("assetfile/images/background-white-85.svg")}});background-repeat:repeat;background-size:inherit;
                            ">
                            <div class="sppb-row">
                                <div class="sppb-col-sm-2 my-center">
                                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="300ms">
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                                            <div class="sppb-addon-content"><a
                                                    href="profil-umk/index8dca.html?option=com_sppagebuilder&amp;view=page&amp;id=56">
                                                    <div class="overlay"><i class="pe pe-7s-link"></i><img
                                                            class="sppb-img-responsive"
                                                            src={{ asset("assetfile/images/2017/03/20/Profil.png") }} alt=""></div>
                                                </a></div>
                                        </div>
                                        <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;">
                                        </div>
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                                                BLK</h3>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-2 my-center">
                                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                                            <div class="sppb-addon-content"><a
                                                    href="https://umk.ac.id:443/index.php?option=com_sppagebuilder&amp;view=page&amp;id=3">
                                                    <div class="overlay"><i class="pe pe-7s-link"></i><img
                                                            class="sppb-img-responsive"
                                                            src={{ asset("assetfile/images/2017/03/20/Program-Studi.png") }} alt="">
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;">
                                        </div>
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                                                UNITENDIK</h3>
                                        
                                        </div>
                                    </div>
                                </div>


                                <div class="sppb-col-sm-2 my-center">
                                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                                            <div class="sppb-addon-content"><a
                                                    href="https://umk.ac.id:443/index.php?option=com_sppagebuilder&amp;view=page&amp;id=3">
                                                    <div class="overlay"><i class="pe pe-7s-link"></i><img
                                                            class="sppb-img-responsive"
                                                            src={{ asset("assetfile/images/2017/03/20/Program-Studi.png") }} alt="">
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;">
                                        </div>
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                                                DIGITAL LIBRARY</h3>
                                        
                                        </div>
                                    </div>
                                </div>


                                <div class="sppb-col-sm-2 my-center">
                                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="900ms">
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                                            <div class="sppb-addon-content"><a href="pmb/beasiswa-umk.html">
                                                    <div class="overlay"><i class="pe pe-7s-link"></i><img
                                                            class="sppb-img-responsive"
                                                            src={{ asset("assetfile/images/2017/03/20/Beasiswa.png") }} alt=""></div>
                                                </a></div>
                                        </div>
                                        <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;">
                                        </div>
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                                                MGMP</h3>
                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-2 my-center">
                                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="1200ms">
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                                            <div class="sppb-addon-content"><a
                                                    href="https://umk.ac.id:443/index.php?option=com_sppagebuilder&amp;view=page&amp;id=57">
                                                    <div class="overlay"><i class="pe pe-7s-link"></i><img
                                                            class="sppb-img-responsive"
                                                            src={{ asset("assetfile/images/2017/03/20/Kerjasama1.png") }} alt=""></div>
                                                </a></div>
                                        </div>
                                        <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;">
                                        </div>
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                                                KERJA SAMA</h3>
                              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="sppb-section "
                            style="padding:5px 40px 10px 40px;color:#000000;background-color:#ffffff;">
                            <div class="sppb-section-title sppb-text-left">
                                <h2 class="sppb-title-heading"
                                    style="font-size:18px;line-height: 18px;color:#ffffff;">Berita Terbaru</h2>
                            </div>
                            <div class="sppb-row">
                                <div class="sppb-col-sm-12">
                                    <div class="sppb-addon-container sppb-wow fadeInLeft"
                                        style="color:#000000;background-color:#ffffff;"
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                                        <div class="sppb-addon sppb-addon-latest-posts flex sppb-row ">
                                            <div class="sppb-section-title">
                                                <h3 class="sppb-addon-title" style=""> Berita Terbaru</h3>
                                            </div>
                                            <div class="sppb-addon-content">
                                                <div class="latest-posts clearfix">
                                                    <div>
                                                        @foreach ($berita as $item)
                                                            <div class="latest-post sppb-col-sm-3 columns-4">
                                                                <div class="latest-post-item">
                                                                    <div class="img-wrapper"><a
                                                                            href="informasi/berita/3077-fakultas-hukum-umk-teken-mou-dengan-asosiasi-mediator-kudus.html">
                                                                            <img style="height: 200px; width: 100%"
                                                                                class="post-img"
                                                                                src={{ asset("/storage/$item->banner") }} alt="{{ $item->judul }}" />
                                                                            <div class="caption-content">{{ $item->judul }}</div>
                                                                        </a></div>
                                                                    <div class="latest-post-inner match-height">
                                                                        <h2 class="entry-title"><a href="#">{{ $item->judul }}</a></h2>
                                                                        <div class="entry-meta"><span
                                                                                class="entry-date">{{ $item->created_at }}</span></div>
                                                                        <p class="intro-text">{!! \Illuminate\Support\Str::limit($item->deskripsi, 70, "....") !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-text-right"><a href="{{ url("informasi/1") }}"
                                                class="sppb-btn sppb-btn-info sppb-btn- sppb-selector  "
                                                role="button"><i class="pe pe-7s-play"></i> <span
                                                    style=color:#ffffff>Lihat selengkapnya</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="sppb-section "
                            style="padding:5px 40px 10px 40px;background-color:#eeeeee;">
                            <div class="sppb-row">
                                <div class="sppb-col-sm-6">
                                    <div class="sppb-addon-container sppb-wow fadeInLeft" style=""
                                        data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                                        <div class="sppb-addon sppb-addon-latest-posts blog sppb-row ">
                                            <div class="sppb-section-title">
                                                <h3 class="sppb-addon-title" style=""> Pengumuman</h3>
                                            </div>
                                            <div class="sppb-addon-content">
                                                <div class="latest-posts clearfix">
                                                    <div>
                                                        @forelse ($pengumuman as $item)
                                                            <div class="latest-post sppb-col-sm-12 columns-1">
                                                                <div class="latest-post-inner">
                                                                    <div class="row-fluid">
                                                                        <div class="sppb-col-sm-12 column-1">
                                                                            <div class="entry-meta"><span
                                                                                    class="entry-date"> {{ $item->created_at }} </span></div>
                                                                            <h2 style="font-size:180%;line-height:1.4;"
                                                                                class="entry-title"><a
                                                                                    href="{{ url("informasi/2/$item->id") }}">{{ $item->judul }}</a></h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        @empty
                                                            <p>Pengumuman Kosong</p>
                                                        @endforelse
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-text-right"><a href="{{ url("informasi/2") }}"
                                                class="sppb-btn sppb-btn-info sppb-btn- sppb-selector  "
                                                style="margin:0px 0px 0px 0px;" role="button"><i
                                                    class="pe pe-7s-play"></i> <span style=color:#ffffff>Lihat
                                                    selengkapnya</span></a></div>
                                        <div class="sppb-addon sppb-addon-latest-posts blog sppb-row ">
                                            <div class="sppb-section-title">
                                                <h3 class="sppb-addon-title" style=""> Agenda Kampus</h3>
                                            </div>
                                            <div class="sppb-addon-content">
                                                <div class="latest-posts clearfix">
                                                    @forelse ($agenda as $item)
                                                        <div>
                                                            <div class="latest-post sppb-col-sm-12 columns-1">
                                                                <div class="latest-post-inner">
                                                                    <div class="row-fluid">
                                                                        <div class="sppb-col-sm-12 column-1">
                                                                            <div class="entry-meta"><span
                                                                                    class="entry-date"> {{ $item->created_at }}</span></div>
                                                                            <h2 style="font-size:180%;line-height:1.4;"
                                                                                class="entry-title"><a href="{{ url("informasi/3/$item->id") }}">
                                                                                    {{ $item->judul }}
                                                                                </a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p>Agenda Kosong</p>
                                                    @endforelse
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sppb-text-right"><a href="{{ url("informasi/3") }}"
                                                class="sppb-btn sppb-btn-info sppb-btn- sppb-selector  "
                                                style="margin:0px 0px 0px 0px;" role="button"><i
                                                    class="pe pe-7s-play"></i> <span style=color:#ffffff>Lihat
                                                    selengkapnya</span></a></div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-6">
                                    <div class="sppb-addon-container" style="">
                                        <div class="sppb-addon sppb-addon-video ">
                                            <h3 class="sppb-addon-title" style="">Video Promosi maarif</h3>
                                            <div
                                                class="sppb-video-block sppb-embed-responsive sppb-embed-responsive-16by9">
                                                <iframe class="sppb-embed-responsive-item"
                                                    src=http://www.youtube.com/embed/7Rv547R9sEQ"
                                                    webkitAllowFullScreen mozallowfullscreen
                                                    allowFullScreen></iframe></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
               
                        <section class="sppb-section "
                            style="padding:5px 40px 10px 40px;background-image:url({{ asset('assetfile/images/background-white-85.svg')}});background-repeat:repeat;background-size:inherit;">
                            <div class="sppb-row">
                                <div class="sppb-col-sm-12">
                                    <div class="sppb-addon-container" style="padding:30px 10px 10px 0px;">
                                        <div class="sppb-addon ">
                                            <h3 class="sppb-addon-title"
                                                style="margin-top:10px;margin-bottom:10px;">Kerjasama Kami</h3>
                                            <div class="slick-carousel-620 clearfix">
                                                @foreach ($kerjaSama as $item)
                                                
                                                    <div class="slick-img"><img
                                                        data-lazy="{{ asset("assetfile/images/2017/06/08/Duy-Tan-University-Baru.png")}}">
                                                    </div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/06/08/Hatyai-Baru.png")}}"></div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/06/08/PSB-Singapura-Baru.png")}}">
                                                    </div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/06/08/Adventist-baru.png")}}"></div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/03/24/PR-Djarum.png")}}"></div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/03/24/PR-Nojorono.png")}}"></div>
                                                    <div class="slick-img"><img
                                                            data-lazy="{{ asset("assetfile/images/2017/03/24/PR-Sukun.png")}}"></div>
                                                    
                                                @endforeach
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="sppb-section "
                            style="padding:5px 60px 10px 60px;background-color:#2f2f2f;">
                            <div class="sppb-row">
                                <div class="sppb-col-sm-5">
                                    <div class="sppb-addon-container" style="color:#ffffff;">
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                            <h3 class="sppb-addon-title" style="color:#ffffff;">Hubungi Kami
                                            </h3>
                                            <div class="sppb-addon-content"><span
                                                    style="font-size: 14pt;"><strong>Universitas Muria
                                                        Kudus</strong></span><br />
                                                <p>Jl. Lingkar Utara UMK, Gondangmanis, Bae, Kudus -
                                                    59327<br />Jawa Tengah - Indonesia</p>
                                                <p>Telepon. +62291-438229</p>
                                                <p>Faks. +62291-437198</p>
                                                <p>Email: <a href="mailto:muria@umk.ac.id">muria@umk.ac.id</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-2">
                                    <div class="sppb-addon-container" style="">
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                            <h3 class="sppb-addon-title" style="color:#ffffff;">Ikuti Kami</h3>
                                            <div class="sppb-addon-content"><a
                                                    href="https://id-id.facebook.com/UNIVERSITAS-MURIA-KUDUS-UMK-182450701824294/"
                                                    target="_blank"><img src={{ asset("assetfile/images/medsos/036-facebook.png"
                                                       ) }} alt="umk fb" width="20" /></a> .<a
                                                    href="https://twitter.com/@UMK_mu" target="_blank"><img
                                                        class="" src={{ asset("assetfile/images/medsos/008-twitter.png"
                                                       ) }} alt="umk twitter" width="20" /></a> .<a
                                                    href="https://www.instagram.com/muriakudusuniversity/"
                                                    target="_blank"><img src={{ asset("assetfile/images/medsos/029-instagram.png"
                                                       ) }} alt="umk ig" width="20" /></a> .<a
                                                    href="https://www.youtube.com/user/channelUMK"
                                                    target="_blank"><img class=""
                                                        src={{ asset("assetfile/images/medsos/001-youtube.png") }} alt="umk youtube"
                                                        width="20" /></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-2">
                                    <div class="sppb-addon-container" style="">
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                            <h3 class="sppb-addon-title" style="color:#ffffff;">Tautan Penting
                                            </h3>
                                            <div class="sppb-addon-content"><a
                                                    href="index.php/component/content/article4e31.html?id=2983">Pernyataan
                                                    Sangkalan</a><br /><a href="arsip.html"
                                                    target="_blank">Tampilan Lama</a><a
                                                    href="index.html"><br /></a><a
                                                    href="component/sppagebuilder/index6415.html?view=page&amp;id=63">Laporkan
                                                    Celah</a><br /><a href="informasi/faq.html"
                                                    target="_blank">FAQ</a><br /><a href="sitemap.xml"
                                                    target="_blank">Peta Situs</a><br /><a
                                                    href="http://www.histats.com/viewstats/?sid=4188599&amp;ccid=511"
                                                    target="_blank">Statistik Website</a><br /><a
                                                    href="https://info.flagcounter.com/LlqA"
                                                    target="_blank">Flag Counter</a><br /><a
                                                    href="http://www.webometrics.info/en/search/Rankings/universitas muria kudus type%3Apais"
                                                    target="_blank">Webometrics</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sppb-col-sm-3">
                                    <div class="sppb-addon-container" style="">
                                        <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                            <h3 class="sppb-addon-title" style="color:#ffffff;">Informasi Untuk
                                            </h3>
                                            <div class="sppb-addon-content"><a href="http://pmb.umk.ac.id/"
                                                    target="_blank">Calon Mahasiswa</a><br /><a
                                                    href="layanan-umum.html">Mahasiswa</a><br /><a
                                                    href="http://alumni.umk.ac.id/" target="_blank">Alumni</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection