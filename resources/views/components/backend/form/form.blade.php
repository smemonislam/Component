<form action="{{ $action }}" method="{{ $method }}" class="{{ $class }}">
    @csrf
    {{ $slot }}
</form>