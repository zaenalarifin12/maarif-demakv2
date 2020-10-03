@extends('fe.layouts.master')

@section('title')
    Kerja Sama
@endsection

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
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                        <h3 class="sppb-addon-title" style="margin-top:0px;margin-bottom:10px;">Kerja Sama</h3>
         
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="sppb-section "
                style="padding:20px 20px 10px 20px;background-image:url({{ asset("assetfile/images/background-white-85.svg")}});background-repeat:repeat;background-size:inherit;">
                <div class="sppb-row">
                    @forelse ($kerja_sama as $item)
                        <div class="sppb-col-sm-3">
                            <div class="sppb-addon-container" style="color:#0057a6;">
                            <div class="sppb-addon sppb-text-center">
                                <div class="sppb-addon-content">
                                    <a href="#">
                                    <div class="overlay"><i class="pe pe-7s-link"></i>
                                        <img class="sppb-img-responsive"
                                        src="{{ asset("storage/$item->gambar")}}" alt="">
                                    </div>
                                    <h3 class="sppb-addon-title" style="margin-top:0px;margin-bottom:10px;">Kerja Sama</h3>
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    @empty
                        KOSONG
                    @endforelse
            
                </div>
              </section>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection