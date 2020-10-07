@extends('fe.layouts.master')

@section('title')
    Informasi Balai Latihan Kerja  | Ma'arif Demak
@endsection

@section('content')
<section id="sp-body">
  <div class="row">
    <div id="sp-component" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div id="system-message-container">
        </div>

        <div id="sp-page-builder" class="sp-page-builder  page-5">

          <div class="page-content">
      
            <section class="sppb-section " style="padding:50px 50px 50px 50px;">
              <div class="sppb-row">
          
                <div class="sppb-col-sm-12">
                  <div class="sppb-addon-container">
                    <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                    <div class="sppb-addon sppb-addon-accordion ">
                      <h3 class="sppb-addon-title" style="">Informasi <strong> Balai Latihan Kerja </strong> Terbaru</h3>
                      <div class="sppb-addon-content">
                        <div class="sppb-panel-group ">

                          @forelse ($informasi as $item)
                            <div class="sppb-panel sppb-panel-flex">
                              <div class="sppb-panel-heading"><span class="sppb-panel-title"><i
                                    class="pe pe-7s-news-paper"></i>{{ $item->judul }}</span></div>
                              <div class="sppb-panel-collapse">
                                <div class="sppb-panel-body">
                                  <a href="{{ url("unit/balai-latihan-kerja/informasi/$item->slug") }}" style="font-weight: bold">Selengkapnya</a>
                                  
                                  {!! $item->deskripsi !!}
                                </div>
                              </div>
                            </div>    
                          @empty
                              Informasi Kosong
                          @endforelse
                          
                        </div>
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