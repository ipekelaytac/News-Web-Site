@extends('uif.layouts.master')
@section('title', 'Anasayfa')
@section('head')
    <link href="/uif/css/favorite.css" rel="stylesheet">

@endsection
@section('content')
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <div class="first-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="{{ $news_banner_1->image!=null ? asset('uploads/news/' . $news_banner_1->image) : 'https://via.placeholder.com/300?text=HaberResmi' }}"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    @foreach($categories as $category)
                                        @if($category->news_id == $news_banner_1->id)
                                            <span class="bg-orange"><a
                                                        href="{{ route('uif.news.category_news', $category->category->slug) }}"
                                                        title="">{{$category->category->category_name}}</a></span>
                                        @endif
                                    @endforeach
                                    <h4><a href="{{ route('uif.news.detail', $news_banner_1->slug) }}"
                                           title="">{{$news_banner_1->title}}</a></h4>
                                    <small><a href="{{ route('uif.news.detail', $news_banner_1->slug) }}"
                                              title="">{{date('d/m/Y',strtotime($news_banner_1->created_at))}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end first-side -->
                <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="{{ $news_banner_2->image!=null ? asset('uploads/news/' . $news_banner_2->image) : 'https://via.placeholder.com/400?text=HaberResmi' }}"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    @foreach($categories as $category)
                                        @if($category->news_id == $news_banner_2->id)
                                            <span class="bg-orange"><a
                                                        href="{{ route('uif.news.category_news', $category->category->slug) }}"
                                                        title="">{{$category->category->category_name}}</a></span>
                                        @endif
                                    @endforeach

                                    <h4><a href="{{ route('uif.news.detail', $news_banner_2->slug) }}"
                                           title="">{{$news_banner_2->title}}</a></h4>
                                    <small><a href="{{ route('uif.news.detail', $news_banner_2->slug) }}"
                                              title="">{{date('d/m/Y',strtotime($news_banner_2->created_at))}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
                <div class="last-slot">
                    <div class="masonry-box post-media">
                        <img style="height: 300px;"
                             src="{{ $news_banner_3->image!=null ? asset('uploads/news/' . $news_banner_3->image) : 'https://via.placeholder.com/300?text=HaberResmi' }}"
                             alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    @foreach($categories as $category)
                                        @if($category->news_id == $news_banner_3->id)
                                            <span class="bg-orange"><a
                                                        href="{{ route('uif.news.category_news', $category->category->slug) }}"
                                                        title="">{{$category->category->category_name}}</a></span>
                                        @endif
                                    @endforeach
                                    <h4><a href="{{ route('uif.news.detail', $news_banner_3->slug) }}"
                                           title="">{{$news_banner_3->title}}</a></h4>
                                    <small><a href="{{ route('uif.news.detail', $news_banner_3->slug) }}"
                                              title="">{{date('d/m/Y',strtotime($news_banner_3->created_at))}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
            </div>
        </div><!-- end masonry -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-top clearfix">
                            <h4 class="pull-left">Son Haberler <a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->
                        <div class="blog-list clearfix">

                            @foreach($news as $entry)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ route('uif.news.detail', $entry->slug) }}" title="">
                                                <img style="height: 175px"
                                                     src="{{ $entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/400?text=HaberResmi' }}"
                                                     alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->
                                    <div class="blog-meta big-meta col-md-8">
                                        <div class="dflex" style="">
                                            <h4><a href="{{ route('uif.news.detail', $entry->slug) }}"
                                                   title="">{{$entry->title}}</a></h4>
                                            @auth()
                                                <div class="favorite" style="margin-top: 35px">
                                                    <a href="{{ route('uif.favorite_news_add',$entry->id ) }}"><img
                                                                width="30" src="/uif/images/favorite.png"></a>
{{--                                                    <a href="{{ route('uif.news.detail',$entry->slug) }}#collectionopen"--}}
{{--                                                      ><img width="30" src="/uif/images/collection.png"></a>--}}
                                                </div>

                                            @endauth
                                        </div>
                                        <a href="{{ route('uif.news.detail', $entry->slug) }}">
                                            <p>{!!      Str::limit($entry->content,100,'...')!!}</p>
                                        </a>
                                        @foreach($categories as $category)
                                            @if($category->news_id == $entry->id)
                                                <small class="firstsmall"><a class="bg-orange"
                                                                             href="{{ route('uif.news.category_news', $category->category->slug) }}"
                                                                             title="">{{$category->category->category_name}}</a></small>
                                            @endif
                                        @endforeach
                                        <small><a href="{{ route('uif.news.detail', $entry->slug) }}"
                                                  title="">{{date('d/m/Y',strtotime($entry->created_at))}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">

                            @endforeach


                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">


                        <div class="widget">
                            <h2 class="widget-title">Popüler haberler</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($popular_news as $entry)
                                        <a href="{{ route('uif.news.detail', $entry->slug) }}"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{ $entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/100?text=HaberResmi' }}"
                                                     alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{!!      Str::limit($entry->content,20,'...')!!}</h5>
                                                <small>{{date('d/m/Y',strtotime($entry->created_at))}}</small>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->


                        <div class="widget">
                            <h2 class="widget-title">Takip Et</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa fa-facebook"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
@section('js')
@endsection

