@extends('fe.layouts.master')

@section('title')
    {{ $informasi->judul }} - Informasi
@endsection

@section('content')
<section id="sp-body">
    <div class="container">
      <div class="row">
        <div id="sp-component" class="col-sm-12 col-md-12">
          <div class="sp-column ">
            <div id="system-message-container">
            </div>
            <article class="item item-page" itemscope itemtype="http://schema.org/Article">
              <meta itemprop="inLanguage" content="en-GB" />
              <div class="page-header">
                <h1> Informasi {{ $cpk->nama }} </h1>
              </div>


              <div class="entry-image full-image"> <img style="max-width: 100%"
                  src="{{ asset("storage/$informasi->banner") }}" alt="" itemprop="image" /> </div>

              <div class="entry-header has-post-format">
                <span class="post-format"><i style="margin-right:-6px;" class="fa fa-pencil-square-o"></i></span>
                <h2 itemprop="name">
                  {{ $informasi->judul }} <div class="divider"></div>
                </h2>

                <dl class="article-info">


                  <dt class="article-info-term"></dt>



                  <dd class="published">
                    <i class="fa fa-calendar-o"></i>
                    <time datetime="2020-06-30T11:15:48+07:00" itemprop="datePublished" data-toggle="tooltip"
                      title="Published Date">
                      {{ $informasi->created_at}} </time>
                  </dd>

                </dl>
              </div>


              <div itemprop="articleBody">
                <p> {!! $informasi->deskripsi !!}</p>
            </div>

            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
