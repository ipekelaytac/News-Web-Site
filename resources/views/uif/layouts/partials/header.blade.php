<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse d-flex flex-row">
                <a href="{{ route('uif.index') }}"> <h1 class="m-1" style="color: white">News</h1></a>
            <div class="collapse navbar-collapse row" id="navbarCollapse">
                <ul class="navbar-nav mr-auto m-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('uif.index')}}">AnaSayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('uif.news')}}">Haberler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('uif.contact')}}">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('uif.aboutus')}}">Hakkımızda</a>
                    </li>
                </ul>

            </div>
            @guest()
                <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="{{ route('uif.user') }}">Giriş</a></div>

            @endguest
            @auth()
                    <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="{{ route('uif.favorite') }}">Favoriler</a></div>

                    <div class="flex-row  nav"><a style="color:white;" class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Çıkış</a></div>
                        <form id="logout-form" action="{{ route('uif.logout') }}" method="post"  style="display: none;" >
                            {{ csrf_field() }}
                        </form>
            @endauth
            <div class="flex-row  nav"><a class="nav-link" href="{{ route('management.index') }}">Admin_Paneli</a></div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->

