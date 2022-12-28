@if(session()->has('message'))

    <div class="row" style="padding:25px ">
        <div class="alert  alert-{{ session('message_type') }} alert-dismissible fade show" role="alert">
            <strong>{{ session('message_type')  === "success" ? "Başarılı" : ( session('message_type') === "warning" ? "Uyarı" : ( session('message_type') === "danger" ? "Hata" : session('message_type')  ) ) }}!</strong> {{ session ('message') }}
        </div>
    </div>
@endif


