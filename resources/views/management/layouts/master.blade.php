<!DOCTYPE html>
<html lang="tr">
<head>
    <title>@yield('title', config('app.name'))</title>
    @include('management.layouts.partials.head')
    @yield('head')
</head>
<body>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('management.layouts.partials.header')

        <div class="page-body-wrapper">
            @include('management.layouts.partials.sidebar')
            @yield('content')
            @include('management.layouts.partials.footer')
        </div>
    </div>


@include('management.layouts.partials.js')
@yield('js')
</body>
</html>
