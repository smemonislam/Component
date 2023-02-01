@if( session()->has( 'status' ))
    <div class="alert alert-{{ session('type') }}">
        {{ session('status') }}
    </div>
@endif