@extends('uif.layouts.master')
@section('title', 'Koleksiyonlarım')
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
                        <h2 class='mb-3'>Koleksiyonlar</h2>
                        <table id="dtBasicExample" class="table" width="100%">
                            <thead>
                            <tr>
                                <th class="th-sm">Koleksiyon adı
                                </th>
                                <th class="th-sm">İşlem
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($favorite_collection)>0)

                                @foreach($favorite_collection as $collection)

                                <tr>
                                <td><a href="{{ route('uif.collection_detail',$collection->slug) }}">{{ $collection->collection_name }}</a></td>
                                    <td><a href="{{ route('uif.collection_delete' , $collection->id) }}" class="btn btn-primary">Kaldır</a></td>

                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Koleksiyon adı
                                </th>
                                <th>İşlem
                                </th>
                            </tr>
                            </tfoot>
                            @else
                                <tr>
                                    <td colspan="5">Henüz koleksiyon yok</td>
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