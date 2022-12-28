@extends('management.layouts.master')
@section('title', 'Kullanıcı Yönetimi')

@section('head')
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">

@endsection



@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Kullanıcı {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('management.index')}}"> <i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Kullanıcılar</li>
                            <li class="breadcrumb-item active">Kullanıcı {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('management.layouts.partials.alert')
        @include('management.layouts.partials.errors')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Kullanıcı {{ $entry->id > 0 ? "Düzenleme" : "Ekleme" }} Formu</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-wizard" id="regForm"
                                  action="{{ route('management.user.save', $entry->id) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="name">Kullanıcı Adı</label>
                                    <input class="form-control" name="name_surname" type="text"
                                           placeholder="İsim soyisim Giriniz" autocomplete="off"
                                           value="{{ $entry->name_surname }}">
                                </div>
                                <div class="mb-3">
                                    <label for="lname">Email</label>
                                    <input class="form-control" name="email" type="email" placeholder="Email Giriniz."
                                           value="{{ $entry->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input class="form-control" name="password" type="password"
                                           placeholder="Şifre Giriniz." value="">
                                </div>
                                <div class="media mb-3">
                                    <label class="col-form-label m-r-10">Yöneticimi Durumu:</label>
                                    <div class="media-body text-end">
                                        <label class="switch">
                                            <input type="checkbox" name="isit_executive" {{  $entry->isit_executive == 1 ? 'checked' : '' }}><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="media mb-3">
                                    <label class="col-form-label m-r-10">Kullanıcı Durumu:</label>
                                    <div class="media-body text-end">
                                        <label class="switch">
                                            <input type="checkbox" name="isit_active" {{  $entry->isit_active == 1 ? 'checked' : '' }}><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-showcase text-end">
                                    <input class="btn btn-primary" type="submit"
                                           value="{{ $entry->id > 0 ? "Güncelle" : "Kaydet" }}">
                                    <input class="btn btn-light" type="reset" value="Sıfırla">
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section('js')
    <script src="/management/assets/js/select2/select2.full.min.js"></script>
    <script src="/management/assets/js/select2/select2-custom.js"></script>
    <script src="/management/assets/js/form-validation-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
@endsection
