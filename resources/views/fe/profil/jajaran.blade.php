@extends('fe.layouts.master')

@section('title')
    Jajaran Pengurus
@endsection

@section('content')
<section id="sp-body">
    <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div id="system-message-container">
          </div>

          <div id="sp-page-builder" class="sp-page-builder  page-55">

            <div class="page-content">
              <section class="sppb-section " style="">
                <div class="sppb-row">
                  <div class="sppb-col-sm-12">
                    <div class="sppb-addon-container" style="">
                      <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                        <h3 class="sppb-addon-title" style="">JAJARAN PEBGURUS MAARIF DEMAK</h3>
                        <div class="sppb-addon-content"></div>
                      </div>
                      <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                    </div>
                  </div>
                </div>
              </section>


              @foreach ($jajaran as $item)
              
                @if ($item->type == 1)
                  @foreach ($item->jajaranPengurusOrang as $item2)
                    <section class="sppb-section "
                    style="padding:0px 0px 50px 0px;background-image:url({{ asset("assetfile/images/background-white-85.svg")}});background-repeat:repeat;background-size:inherit;">
                    <div class="sppb-row">
                      <div class="sppb-col-sm-3">
                        <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                          data-sppb-wow-duration="600ms" data-sppb-wow-delay="300ms">
                          <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                        </div>
                      </div>
                      <div class="sppb-col-sm-3">
                        <div class="sppb-addon-container sppb-wow flip" style="color:#0057a6;"
                          data-sppb-wow-duration="600ms" data-sppb-wow-delay="600ms">
                          <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                            <div class="sppb-addon-content"><img class="sppb-img-responsive"
                                src="{{ asset("storage/$item2->foto")}}" alt=""></div>
                          </div>
                        </div>
                      </div>
                      <div class="sppb-col-sm-3">
                        <div class="sppb-addon-container" style="">
                          <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                          <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                            <div class="sppb-addon-content">
                              <table border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align: left;" colspan="2"><strong>{{ $item2->nama }}</strong></td>
                                  </tr>
                                  <tr>
                                    <td>Jabatan</td>
                                    <td>: {{ $item->nama }}</td>
                                  </tr>
                                  <tr>
                                    <td> </td>
                                    <td> </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  @endforeach
                   
                @else
                  @foreach ($item->jajaranPengurusOrang as $item2)
                    <section class="sppb-section " style="">
                      <div class="sppb-row">
                        <div class="sppb-col-sm-12">
                          <div class="sppb-addon-container" style="">
                            <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                              <h3 class="sppb-addon-title" style="">{{ $item->nama }}</h3>
                              <div class="sppb-addon-content"></div>
                            </div>
                            <div class="sppb-empty-space  clearfix" style="margin-bottom:20px;"></div>
                          </div>
                        </div>
                      </div>
                    </section>

                    <section class="sppb-section" style="padding:0px 20px 50px 20px;">
                      <div class="sppb-row">
                        <div class="sppb-col-sm-3">
                          <div class="sppb-addon-container" style="">
                            <div class="sppb-addon sppb-addon-single-image sppb-text-center">
                              <div class="sppb-addon-content"><img class="sppb-img-responsive"
                                  src="{{ asset("storage/$item2->foto") }}" alt=""></div>
                            </div>
                            <div class="sppb-addon sppb-addon-text-block sppb-text-center ">
                              <div class="sppb-addon-content"><strong>{{ $item2->nama }}</strong><br />{{ $item->nama }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  @endforeach
                @endif

              @endforeach

              
              
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection