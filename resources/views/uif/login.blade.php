<html>
<head><title>Kullanıcı işlemleri
    </title>
    <link href="/uif/css/login.css" rel="stylesheet">
</head>
<body>
@include('uif.layouts.partials.alert')
@include('uif.layouts.partials.errors')
<section class="container forms">

    <div class="form login" style="margin-right: 500px">
        <div class="form-content">
            <header>Giriş Yap</header>
            <form action="{{ route('uif.login') }}" method="post">
                {{ csrf_field() }}
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Şifre" name="password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
    <div class="form login" style="margin-left: 500px">
        <div class="form-content">
            <header>Kayıt Ol</header>
            <form action="{{ route('uif.register') }}" method="post">
                {{ csrf_field() }}
                <div class="field input-field">
                    <input type="email" placeholder="Email" name="email" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Şifre" name="password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field input-field">
                    <input type="password" placeholder="Şifre Onay" name="password_confirmation" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Kayıt Ol</button>
                </div>
            </form>


        </div>


    </div>

    <!-- Signup Form -->

</section>

</body>
</html>