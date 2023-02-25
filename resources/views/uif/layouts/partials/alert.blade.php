@if(session()->has('message'))
    <div class="container m-2">
        <div class="alert alert-{{ session('message_type') }}">{{ session ('message') }}</div>
    </div>
@endif
