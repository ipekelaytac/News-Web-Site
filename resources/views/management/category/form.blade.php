@extends('management.layouts.master')
@section('title', 'Kategori Yönetimi')

@section('head')
        <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">
        <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/dropzone.css">
@endsection



@section('content')


    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Kategori {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('management.index')}}"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Kategori</li>
                            <li class="breadcrumb-item active">Kategori {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</li>
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
                            <h5>Kategori {{ $entry->id > 0 ? "Düzenleme" : "Ekleme" }} Formu</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-wizard" id="regForm" action="{{ route('management.category.save', $entry->id) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="tab">
                                    <div class="mb-3">
                                        <label for="name">Kategori Adı</label>
                                        <input class="form-control" name="category_name" type="text" placeholder="Kategori Adı Giriniz.." value="{{old('category_name',$entry->category_name)}}">
                                    </div>
                                </div>
                                <div class="btn-showcase text-end">
                                    <button class="btn btn-primary" type="submit">Kaydet</button>
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
    <script src="/management/assets/js/form-wizard/form-wizard.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>
@endsection
