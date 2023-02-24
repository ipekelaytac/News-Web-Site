@extends('uif.layouts.master')
@section('title', 'Koleksiyon detay')
@section('head')
@endsection
@section('content')
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6 class="pull-right mt-3">
                        <a href="{{ route('uif.collection') }}">Koleksiyonlarım</a></h6>

                    <div class="page-wrapper">
                        @include('uif.layouts.partials.alert')
                        @include('uif.layouts.partials.errors')
                        <h2 class='mb-3'>{{ $favorite_collection->slug }} Koleksiyonum</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            @if(count($collection_news)>0)
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
                            @foreach($collection_news as $col_news)
                                <tr>
                                    <td><a href="{{ route('uif.news.detail', $col_news->news->slug) }}"><img width="100" src="{{ $col_news->news->image!=null ? asset('uploads/news/' . $col_news->news->image) : 'https://via.placeholder.com/100?text=HaberResmi' }}"></a></td>
                                    <td><a href="{{ route('uif.news.detail', $col_news->news->slug) }}">{{$col_news->news->title}}</a></td>
                                    <td>{{date('d/m/Y',strtotime($col_news->news->created_at))}}</td>
                                    <td><a href="{{ route('uif.collection_news_delete',$col_news->news->id ) }}" class="btn btn-danger">kaldır</a></td>

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
                                    <td colspan="5">Henüz koleksiyonunuzda haber yok</td>
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