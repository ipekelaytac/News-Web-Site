<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.name'))</title>
    @include('uif.layouts.partials.head')
    @yield('head')
</head>

<body>
<div id="wrapper">
    @include('uif.layouts.partials.header')

    @yield('content')


    @include('uif.layouts.partials.footer')


    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->
@include('uif.layouts.partials.js')
@yield('js')
</body>

</html>
