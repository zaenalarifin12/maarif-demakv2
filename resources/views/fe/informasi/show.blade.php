@extends('fe.layouts.master')

@section('title')
  {{ $article->judul }}
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
                <h1> {{ $category->nama }} </h1>
              </div>


              <div class="entry-image full-image"> <img
                  src="{{ asset("storage/$article->banner") }}" alt="" itemprop="image" /> 
              </div>

              <div class="entry-header has-post-format">
                <span class="post-format"><i style="margin-right:-6px;" class="fa fa-pencil-square-o"></i></span>
                <h2 itemprop="name">
                  {{ $article->judul }} <div class="divider"></div>
                </h2>

                <dl class="article-info">


                  <dt class="article-info-term"></dt>



                  <dd class="published">
                    <i class="fa fa-calendar-o"></i>
                    <time datetime="2020-06-30T11:15:48+07:00" itemprop="datePublished" data-toggle="tooltip"
                      title="Published Date">
                      {{ $article->created_at}} </time>
                  </dd>

                </dl>
              </div>


              <div itemprop="articleBody">
                <p> {!! $article->deskripsi !!}</p>
            </div>




              {{-- <nav role="pagination">
                <ul class="cd-pagination no-space animated-buttons custom-icons">
                  <li class="button btn-previous">
                    <a href="3034-kui-umk-siapkan-dua-agenda-virtual-internasional.html" rel="prev"><i>Prev</i></a>
                  </li>

                  <li class="button btn-next">
                    <a href="3032-pandemi-50-mahasiswa-umk-dapat-beasiswa-bi.html" rel="next"><i>Next</i></a>
                  </li>
                </ul>
              </nav> --}}





            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
