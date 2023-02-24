@extends('uif.layouts.master')
@section('title', 'Favorilerim')
@section('head')
@endsection
@section('content')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-wrapper">
                        <div class=" row">
                            <div class="col-6">
                            </div>
                            <div class="col-6 offset-6">
                                <form action="{{route('uif.collection_add')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="pull-right"> Koleksiyon Ekle
                                    <input type="text" name="collection_name"
                                           placeholder="koleksiyon adı">
                                    <input type="submit" class="btn-success" value="Ekle">
                                </div>
                            </form>
                            </div>
                        </div>
                        @include('uif.layouts.partials.alert')
                        @include('uif.layouts.partials.errors')
                        <h6 class="pull-right mt-3"><a href="{{ route('uif.collection') }}">Koleksiyonlarım</a></h6>

                        <h2 class='mb-3'>Favori Ürünler</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            @if(count($favorite_news)>0)

                            <thead>
                            <tr>
                                <th class="th-sm">Haber Resim
                                </th>
                                <th class="th-sm">Haber Başlık
                                </th>
                                <th class="th-sm">Haber Tarihi
                                </th>
                                <th class="th-sm">İşlem
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($favorite_news as $fav_news)
                                <tr>
                                <td><a href="{{ route('uif.news.detail', $fav_news->news->slug) }}"><img width="100" src="{{ $fav_news->news->image!=null ? asset('uploads/news/' . $fav_news->news->image) : 'https://via.placeholder.com/100?text=HaberResmi' }}"></a></td>
                                <td><a href="{{ route('uif.news.detail', $fav_news->news->slug) }}">{{$fav_news->news->title}}</a></td>
                                <td>{{date('d/m/Y',strtotime($fav_news->news->created_at))}}</td>
                                    <td><a href="{{ route('uif.favorite_delete',$fav_news->news->id ) }}" class="btn btn-danger">kaldır</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Haber Resim
                                </th>
                                <th>Haber Başlık
                                </th>
                                <th>Haber Tarihi
                                </th>
                                <th>İşlem
                                </th>
                            </tr>
                            </tfoot>
                            @else
                                <tr>
                                    <td colspan="5">Henüz favorilerinizde haber yok</td>
                                </tr>

                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection