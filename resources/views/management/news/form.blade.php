@extends('management.layouts.master')
@section('title', 'Haber Yönetimi')

@section('head')
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="/management/assets/css/style.css">
@endsection



@section('content')

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Haber {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('management.index')}}">                                       <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Haberler</li>
                            <li class="breadcrumb-item active">Haber {{ $entry->id > 0 ? "Düzenle" : "Ekle" }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('management.layouts.partials.alert')
        @include('management.layouts.partials.errors')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Haber {{ $entry->id > 0 ? "Düzenleme" : "Ekleme" }} Formu</h5>
                        </div>
                        <div class="card-body add-post">
                            <form class="row needs-validation"  action="{{ route('management.news.save', $entry->id) }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="validationCustom01">Başlık:</label>
                                        <input class="form-control" id="validationCustom01" type="text" name="title" placeholder="Blog Başlığı" value="{{ old('title', $entry->title) }}">
                                    </div>

                                    <div class="mb-3">
                                        <div class="col-form-label">Kategori:</div>
                                        <select class="js-example-disabled-results col-sm-12 " name="category[]"  id="category" multiple="multiple">
                                            @foreach($categories as $category)
                                                <option
                                                    value="{{ $category->id }}" {{ collect(old('news', $news_category))->contains($category->id) ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="email-wrapper">
                                        <div class="theme-form">
                                            <div class="mb-3">
                                                <label>İçerik:</label>
                                                <textarea id="text-box"    cols="10"  name="content" rows="2">{{ old('keywords', $entry->content) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Resim Ekle:</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>

                                @if ($entry->image!=null)
                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">Güncel Resim:</label>
                                    </div>
                                    <div class="mb-3">
                                    <img src="/uploads/news/{{ $entry->image }}" alt="..." style="height: 100px; margin-right: 20px; width: 50%;" class="img-thumbnail">
                                    </div>
                                        @endif

                                <div class="btn-showcase text-end">
                                    <input class="btn btn-primary" type="submit"  value="{{ $entry->id > 0 ? "Güncelle" : "Kaydet" }}">
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
    <script src="/management/assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="/management/assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="/management/assets/js/dropzone/dropzone.js"></script>
    <script src="/management/assets/js/dropzone/dropzone-script.js"></script>
    <script src="/management/assets/js/select2/select2.full.min.js"></script>
    <script src="/management/assets/js/select2/select2-custom.js"></script>
    <script src="/management/assets/js/email-app.js"></script>
    <script src="/management/assets/js/form-validation-custom.js"></script>
    <script src="/management/assets/js/tooltip-init.js"></script>

<script>
    $("textarea").on('input', function(event) {
        console.log($(this).val());
    });
</script>

@endsection
