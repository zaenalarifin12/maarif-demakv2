@extends('fe.layouts.master')

@section('title')
    Ma'arif Demak | Home
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
                    <div class="sppb-addon-container" style="padding:20px 50px 100px 50px;">
                      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                        <h3 class="sppb-addon-title" style="margin-top:0px;margin-bottom:10px;">Event Forum Mgmp Terbaru</h3>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                      <div class="sppb-addon sppb-addon-accordion ">
                        <div class="sppb-addon-content">
                          <div class="sppb-panel-group ">
                            <div class="sppb-panel sppb-panel-flex">
                              <div class="sppb-panel-collapse">

                                @foreach ($event as $item)
                                
                                <div class="entry-header">

                                    <h4 itemprop="name" style="margin: 0px">
                                        <a href="{{ url("/forum-mgmp/" . $item->mata_pelajaran->lembaga->id . "/" . $item->mata_pelajaran->id."/event/$item->id") }}" itemprop="url">
                                            {{ $item->judul }}
                                        </a>
                                    </h4>
                                    <dl class="article-info" >
                                        <dt class="article-info-term"></dt>	
                                            <dd class="published">
                                                <i class="fa fa-calendar-o"></i>
                                                    <time >
                                                        {{ $item->created_at}}	
                                                    </time>
                                            </dd>			
                                    </dl>
                                </div>                                
                                @endforeach

                                {{ $event->links() }}
                                

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
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