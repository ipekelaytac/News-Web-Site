@extends('management.layouts.master')
@section('title', 'Mail Yönetimi')

@section('head')
@endsection



@section('content')


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>
                            Takımlar</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('management.index')}}"> <i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item active">Takımlar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid search-page">
            <div class="row project-cards">
                <div class="col-md-12 project-list">
                    <div class="card">
                        <div class="row">

                                <div class="col-md-12">
                                    <form class="theme-form" id="search" action="{{ route('management.mail') }}"
                                          method="post">
                                        {{ csrf_field() }}
                                        <div class="input-group mb-0">
                                            <input class="form-control-plaintext" type="text" name="search" id="search"
                                                   placeholder="Mail ile ilgili detay giriniz." value="{{ old('search') }}">
                                            <button onclick="search" class="btn btn-primary" type="submit">Ara</button>
                                        </div>
                                    </form>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('management.layouts.partials.alert')
        @include('management.layouts.partials.errors')
        <div class="container-fluid">
            <div class="row project-cards">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                                     aria-labelledby="top-home-tab">
                                    <div class="row">
                                        @foreach($list as $entry)
                                            <div class="col-xxl-4 col-lg-6">
                                                <div class="project-box">
                                                    <h5>Email: {{ $entry->email }}</h5>
                                                    <p>Konu: {{ $entry->subject }}</p>
                                                    <div class="project-status p-2">
                                                        <button class="btn btn-danger btn-pill pull-left"
                                                                type="button" data-toggle="modal" data-target="#delete-{{$entry->id}}">
                                                            Sil
                                                        </button>
                                                        <button class="btn btn-primary btn-pill pull-right"
                                                                type="button" data-toggle="modal" data-target="#detail-{{$entry->id}}">
                                                            İncele
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="modal  mt-5 mb-0" id="delete-{{$entry->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog mt-0 mb-0" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Mail Sil</h5>
                                                                <button class="btn-close" type="button"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Maili silmek istediğinize emin misiniz?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
                                                                <a href="{{ route('management.mail.delete', $entry->id) }}"
                                                                   class="btn btn-secondary" type="button">Sil</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal  mt-5 mb-0" id="detail-{{$entry->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog mt-0 mb-0" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{ $entry->subject }}</h5>
                                                                <button class="btn-close" type="button"
                                                                        data-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Ad Soyad: <span>{{ $entry->name_surname }}</span></h6>
                                                                <h6>Email: <span>{{ $entry->email }}</span></h6>
                                                                <h6>İçerik:</h6>
                                                                <p>{{ $entry->content }}</p>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" type="button"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')
    <script src="/management/assets/js/touchspin/vendors.min.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>

@endsection
