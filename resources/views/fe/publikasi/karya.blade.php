@extends('fe.layouts.master')

@section('title')
    Publikasi Karya 
@endsection 

@section('content')
<section id="sp-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div id="system-message-container">
                    </div>
                    <div class="blog" itemscope itemtype="http://schema.org/Blog">
                        <div class="page-header">
                            <h1> Karya Ilmiah Publikasi </h1>
                        </div>

                        <div class="items-row row-0 row clearfix">
                            @forelse ($karyaIlmiah as $item)

                            <div class="items-row row-0 row clearfix">

                                <div class="col-sm-2">
                                    <article class="item column-1" itemprop="blogPost" itemscope
                                        itemtype="http://schema.org/BlogPosting" style="margin-bottom: 0px !important; margin-top: 0px !important">

                                        <img style="margin: 0px auto"
                                            src="{{ asset("storage/$item->cover") }}" 
                                            style="width: 100px; height: 160px;" 
                                            alt="" itemprop="image" />

                                    </article>
                                    <!-- end item -->
                                </div>

                                <div class="col-sm-10">
                                    <article class="item column-1" itemprop="blogPost" itemscope
                                        itemtype="http://schema.org/BlogPosting" style="margin-bottom: 0px !important; margin-top: 0px !important">

                                        <div class="entry-header has-post-format" >

                                            <h2 itemprop="name">
                                                <a target="_blank" style="font-size: 20px"
                                                href="{{ url("/files/$item->banner") }}"
                                                    itemprop="url">
                                                    {{ $item->judul }}</a>
                                                <div class="divider"></div>
                                            </h2>

                                            <dl class="article-info">


                                                <dt class="article-info-term"></dt>

                                                <dd class="published">
                                                    <i class="fa fa-calendar-o"></i>
                                                    <time datetime="2020-09-25T08:21:58+07:00"
                                                        itemprop="datePublished" data-toggle="tooltip"
                                                        title="Published Date">
                                                        {{ $item->created_at}} </time>
                                                </dd>

                                                <a href="{{ url("/files/$item->banner") }}" 
                                                    style="font-weight: bold; color: red;"
                                                >Download</a>
                                                
                                                <p style="font-weight: normal"> Pengarang : 
                                                    {{ $item->pengarang}}
                                                </p>

                                                <p>{!! $item->deskripsi !!}</p>

                                            </dl>

                                        </div>

                                    </article>
                                    <!-- end item -->
                                </div>
                            </div>

                            @empty
                            <div class="col-sm-3">
                                KOSONG
                            </div>
                                
                            @endforelse
                            
                        </div>



                        {{ $karyaIlmiah->links() }}
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
