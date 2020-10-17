@extends('fe.layouts.master')

@section('title')
    Event {{ $cpk->nama }}
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
                            <h1> Event {{ $cpk->nama }} </h1>
                        </div>

                        <div class="items-row row-0 row clearfix">
                            @forelse ($event as $item)
                            <div class="col-sm-3">
                                <article class="item column-1" itemprop="blogPost" itemscope
                                    itemtype="http://schema.org/BlogPosting">

                                    <div class="entry-image intro-image">
                                        <a
                                            href="#") }}">
                                            <img src="{{ asset("/storage/".$item->banner) }}"
                                                alt="" itemprop="thumbnailUrl" />
                                        </a>
                                    </div>

                                    <div class="entry-header has-post-format">

                                        <span class="post-format"><i style="margin-right:-6px;"
                                                class="fa fa-pencil-square-o"></i></span>

                                        <h2 itemprop="name">
                                            <a 
                                            href="{{ url("/unit/$cpk->slug/event/$item->id") }}"
                                                itemprop="url">
                                                {{ $item->judul }}</a>
                                            <div class="divider"></div>
                                        </h2>


                                        <dl class="article-info" style="line-height: 25px">


                                            <dt class="article-info-term"></dt>

                                            <dd class="published">
                                                <i class="fa fa-calendar-o"></i>
                                                <time datetime="2020-09-25T08:21:58+07:00"
                                                    itemprop="datePublished" data-toggle="tooltip"
                                                    title="Published Date">
                                                    {{ $item->created_at}} </time>
                                            </dd>
                                            <p>{!! $item->deskripsi !!}</p>

                                        </dl>


                                    </div>



                                </article>
                                <!-- end item -->
                            </div>
                            @empty
                            <div class="col-sm-3">
                                KOSONG
                            </div>
                                
                            @endforelse
                            
                        </div>



                        {{ $event->links() }}
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
