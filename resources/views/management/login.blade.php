<!DOCTYPE html>
<html lang="en">
<head>
    @include('management.layouts.partials.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/management/assets/css/main.css">
</head>
<body>
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="/management/assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo text-start" href="{{ route('management.index') }}">
                            <h1>News Web Site</h1></a></div>
                    <div class="login-main">
                        @include('management.layouts.partials.errors')
                        <form class="theme-form" method="post" action="{{ route('management.login') }}">
                            {{ csrf_field() }}
                            <h4>Oturum Aç</h4>
                            <p>Giriş yapmak için e-postanızı ve şifrenizi girin</p>
                            <div class="form-group">
                                <label class="col-form-label">Mail Adresi</label>
                                <input class="form-control" type="email" name="email" value="misafir@aytacipekel.com" placeholder="Test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Şifre</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="*********" value="1">
                                        <i class="fa-solid fa-eye" id="eye"></i>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit" >Giriş Yap</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('management.layouts.partials.js')
<script src="/management/assets/js/password_hide.js"></script>
</body>
</html>
