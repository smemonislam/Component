<select class="{{ $class }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}">
    @foreach( $options as $option )
        <option value="{{ $option->id }}" @selected( $value == $option->id )>{{ $option->title }}</option>
    @endforeach
</select>

