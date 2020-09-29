@extends('fe.layouts.master')

@section('content')
<section id="sp-body">
    <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div id="system-message-container">
          </div>

          <div id="sp-page-builder" class="sp-page-builder  page-7">

            <div class="page-content">
              <section class="sppb-section " style="padding:50px 50px 50px 50px;">
                <div class="sppb-row">
                  <div class="sppb-col-sm-12">
                    <div class="sppb-addon-container" style="">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="{{ asset("assetfile/images/fasilitas/fasilitas1.png")}}" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                        <h3 class="sppb-addon-title" style="margin-top:0px;margin-bottom:10px;">Fasilitas UMK</h3>
                        <div class="sppb-addon-content">Universitas Muria Kudus memiliki puluhan fasilitas yang dapat
                          dipergunakan oleh civitas akademika. Gedung perkuliahan yang kondusif, perpustakaan yang
                          dapat dimanfaatkan oleh civitas akademika, masjid Darul Ilmi yang setiap harinya dapat
                          dimanfaatkan oleh civitas akademika serta warga sekitar dan banyak fasilitas pendukung
                          lainnya.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="sppb-section "
                style="padding:20px 20px 10px 20px;background-image:url(../images/background-white-85.svg);background-repeat:repeat;background-size:inherit;">
                <div class="sppb-row">
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="300ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><a href="http://perpustakaan.umk.ac.id/">
                            <div class="overlay"><i class="pe pe-7s-link"></i><img class="sppb-img-responsive"
                                src="{{ asset("assetfile/images/fasilitas/perpustakaan.png")}}" alt=""></div>
                          </a></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                          PERPUSTAKAAN</h3>
                        <div class="sppb-addon-content">Universitas Muria Kudus memiliki perpustakaan dengan koleksi
                          buku yang lengkap, tempat yang luas dan nyaman.</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/masjid.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">MASJID
                          DARUL ILMI</h3>
                        <div class="sppb-addon-content">Masjid Darul Ilmi</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="900ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/auditorium.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">
                          AUDITORIUM</h3>
                        <div class="sppb-addon-content">Auditorium yang bersih dan luas</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="1200ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/ruang-kuliah.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">RUANG
                          PERKULIAHAN</h3>
                        <div class="sppb-addon-content">Ruang perkuliahan yang nyaman dengan fasilitas yang lengkap
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="sppb-section "
                style="padding:20px 20px 10px 20px;background-image:url(../images/background-white-85.svg);background-repeat:repeat;background-size:inherit;">
                <div class="sppb-row">
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="300ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/olahraga.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">AREA
                          OLAH RAGA</h3>
                        <div class="sppb-addon-content">Universitas Muria Kudus memiliki area olah raga seperti
                          badminton, futsal, basket, volley ball dan lain sebagainya</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/parkir.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">AREA
                          PARKIR</h3>
                        <div class="sppb-addon-content">Area Parkir</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="900ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/atm-center.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">ATM
                          CENTER</h3>
                        <div class="sppb-addon-content">ATM Center</div>
                      </div>
                    </div>
                  </div>
                  <div class="sppb-col-sm-3">
                    <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                      data-sppb-wow-duration="600ms" data-sppb-wow-delay="1200ms">
                      <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                        <div class="sppb-addon-content"><img class="sppb-img-responsive"
                            src="../images/fasilitas/wifi-corner.png" alt=""></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title"
                          style="margin-top:0px;color:#0057a6;font-size:22px;line-height:32px;font-weight:500;">WIFI
                          CORNER</h3>
                        <div class="sppb-addon-content">Area hotspot yang nyaman</div>
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