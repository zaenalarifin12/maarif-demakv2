@extends('fe.layouts.master')

@section('title')
    VISI MISI
@endsection

@section('content')

<section id="sp-body">
    <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div id="system-message-container">
          </div>

          <div id="sp-page-builder" class="sp-page-builder  page-54">

            <div class="page-content">
              <section class="sppb-section " style="padding:50px 50px 50px 50px;">
                <div class="sppb-row">
                  <div class="sppb-col-sm-12">
                    <div class="sppb-addon-container" style="" data-sppb-wow-duration="300ms">
                      <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                        <div class="sppb-addon-content">
                            <h2>VISI MISI MA'ARIF DEMAK</h2>
                            {!! $visiMisi->deskripsi ?? "KOSONG" !!}
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