@extends('management.layouts.master')
@section('title', 'Anasayfa')
@section('head')

@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Ana Sayfa</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('management.index')}}"> <i
                                        data-feather="home"></i></a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                    <div class="card o-hidden ">
                        <div class="card-body">
                            <div class="greeting-user text-center">
                                <div class="profile-vector"><img class="img-fluid" src="/uploads/welcome_news.webp" alt="">
                                </div>
                                <h4 class="f-w-600 mt-4"><span>İyi Günler</span> <span class="right-circle"></span></h4>
                                <p><span>Bu gün doğru haber yapmaya hazır mısın?</span></p>
                                <div class="whatsnew-btn"><a class="btn btn-primary">Hazırsan Başlayalım !</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 xl-100 news box-col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Yeni Haberler</h5>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            @foreach($all_news as $news)
                                <div class="news-update">
                                    <h6>{{ $news->title }}</h6>
                                </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <div class="bottom-btn"><a href="{{route('management.news')}}">Daha fazlası</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 xl-100 chart_data_left box-col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row m-0 chart-main">
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                                <div class="small-chart flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                                <h4>{{$user_count}}</h4><span>Üye</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                                <div class="small-chart1 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                                <h4>{{$news_count}}</h4><span>Haber</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                                <div class="small-chart2 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                                <h4>{{$category_count}}</h4><span>Kategori</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                    <div class="media border-none align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                                <div class="small-chart3 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                                <h4>{{$subscriber_count}}</h4><span>Abone</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('js')

@endsection

