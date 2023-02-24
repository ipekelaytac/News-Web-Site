@extends('uif.layouts.master')
@section('title', 'Haber Detay')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/uif/css/star.css" rel="stylesheet">
<style>
    .notchecked {
        color: grey;
    }
</style>
@endsection
@section('content')


    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area text-center">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{route('uif.index')}}">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="{{route('uif.news')}}">Haberler</a></li>
                                <li class="breadcrumb-item active">{{$news->title}}</li>
                            </ol>
                            @if(!empty($category))
                            <span class="color-orange"><a href="{{ route('uif.news.category_news', $category->slug) }}" title="">{{$category->category_name}}</a></span>
                            @endif
                            <h3>{{$news->title}}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="#" title="">{{ $news->created_at }}</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->
                        <div class="row col-6 offset-3 mb-2">
                            <b class="">Haber Değerlendirme:</b>
                            @for($i = 0 ; $i < $point; $i++)
                            <span class="fa fa-star  m-1"></span>
                            @endfor
                            @for($i = $point ; $i < 5; $i++)
                                <span class="fa fa-star  notchecked m-1"></span>
                            @endfor
                        </div>
                        <div class="single-post-media">
                            <img src="{{ $news->image!=null ? asset('uploads/news/' . $news->image) : 'https://via.placeholder.com/500?text=HaberResmi' }}" alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            <div class="pp">
                                    {!!   $news->content !!}
                            </div><!-- end pp -->


                        </div><!-- end content -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/uif/upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="invis1">

                        @include('uif.layouts.partials.alert')
                        @include('uif.layouts.partials.errors')
                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">Puan Ver</h4>
                            <div class="row">
                                <div class="col-lg-12">

                                    <form class="form-wrapper rating" id="point-form" action="{{ route('uif.news_point') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="news_id" value="{{$news->id}}">

                                        <label>
                                            <input type="radio" name="point" value="1" {{  $user_point == 1 ? 'checked' : '' }} />
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point" value="2" {{  $user_point == 2 ? 'checked' : '' }} />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point" value="3" {{  $user_point == 3 ? 'checked' : '' }} />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point"  value="4" {{  $user_point == 4 ? 'checked' : '' }} />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="point" value="5" {{  $user_point == 5 ? 'checked' : '' }} />
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                            <span class="icon">★</span>
                                        </label>
                                    </form><br>
                                    <a  class="btn btn-primary" href="#" onclick="event.preventDefault(); document.getElementById('point-form').submit()">Gönder</a>

                                </div>
                            </div>
                        </div>
                        <div class="custombox clearfix mt-5">
                            <h4 class="small-title">{{ count($news_comments) }} Yorum</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        @foreach($news_comments as $news_comment)
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading user_name">@foreach($users as $user) @if($user->id == $news_comment->user_id) {{$user->email}}@endif @endforeach <small>Tarih: {{$news_comment->created_at}}</small></h4>
                                                <p>{{$news_comment->comment}}</p>
                                            </div>
                                            @if( auth()->id() == $news_comment->user_id)
                                            <a href="{{ route('uif.comment_delete',$news_comment->id ) }}" class="btn btn-primary">Sil</a>
                                                @endif
                                        </div>
                                        <hr>
                                        @endforeach


                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->

                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">Değerlendir</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper" action="{{ route('uif.news_comment') }}" method="post">
                                        {{ csrf_field() }}
                                        <textarea class="form-control" name="comment" placeholder="Yorum yap"></textarea>
                                        <input type="hidden" name="news_id" value="{{$news->id}}">
                                        <button type="submit" class="btn btn-primary">Gönder</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div><!-- end page-wrapper -->
                </div><!-- end col -->

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
                                                <img src="{{ $entry->image!=null ? asset('uploads/news/' . $entry->image) : 'https://via.placeholder.com/400?text=HaberResmi' }}" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{!!      Str::limit($entry->content,20,'...')!!}</h5>
                                                <small>{{date('d/m/Y',strtotime($entry->created_at))}}</small>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div><!-- end blog-list -->
                        </div>
                        <hr>
                        <div class="widget">
                            <h2 class="widget-title">Kategoriler</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($categories as $category)
                                        <a href="{{ route('uif.news.category_news', $category->slug) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <h5 class="mb-1">{{$category->category_name}}</h5>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div>
<hr>
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
<hr>
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="/uif/upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->


        </div><!-- end container -->
    </section>
    <script>
        $(':radio').change(function() {
            console.log('Yeni Star Puanı: ' + this.value);
        });
    </script>
@endsection
