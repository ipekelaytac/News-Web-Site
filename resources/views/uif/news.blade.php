@extends('uif.layouts.master')
@section('title', 'Haberler')
@section('head')
    <link href="/uif/css/favorite.css" rel="stylesheet">

@endsection
@section('content')
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-newspaper-o bg-orange"></i> Haberler</h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('uif.index')}}">Anasayfa</a></li>
                        <li class="breadcrumb-item"><a href="#">Haberler</a></li>
                        <li class="breadcrumb-item active">Kategori</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <div class="widget">
                            <h2 class="widget-title">Kategoriler</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($categories as $category)
                                        <a href="{{ route('uif.news.category_news', $category->slug) }}"
                                           class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <h5 class="mb-1">{{$category->category_name}}</h5>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->


                        <div class="widget">
                            <h2 class="widget-title">Follow Us</h2>

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

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-grid-system">
                            <div class="row">
                                @foreach($news as $entry)
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{ route('uif.news.detail', $entry->slug) }}" title="">
                                                    <img style="height: 250px"
                                                         src="{{ $entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/300?text=HaberResmi' }}"
                                                         alt="" class="img-fluid">

                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <div class="dflex">
                                                    <h4><a href="{{ route('uif.news.detail', $entry->slug) }}"
                                                           title="">{{ $entry->title }}</a></h4>
                                                    @auth()
                                                        <div class="favorite" style="margin-top: 10px">
                                                            <a href="{{ route('uif.favorite_news_add',$entry->id ) }}"><img
                                                                        width="30" src="/uif/images/favorite.png"></a>

{{--                                                            <a><img width="30" src="/uif/images/collection.png"></a>--}}

                                                        </div>
                                                    @endauth
                                                </div>
                                                <p>{!!      Str::limit($entry->content,100,'...')!!}</p><b>Kategori:</b>
                                                @foreach($news_categories as $category)
                                                    @if($category->news_id == $entry->id)
                                                        <small><a href="{{ route('uif.news.category_news', $category->category->slug) }}"
                                                                  title="">{{$category->category->category_name}}</a></small>
                                                    @endif
                                                @endforeach
                                                <b>Tarih: </b><small><a
                                                            href="{{ route('uif.news.detail', $entry->slug) }}"
                                                            title="">{{date('d/m/Y',strtotime($entry->created_at))}}</a></small>

                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                @endforeach
                            </div><!-- end row -->
                        </div><!-- end blog-grid-system -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis3">

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
