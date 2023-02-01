<div class="form-group row">
    <x-label for="{{ $id }}" class="col-sm-2 col-form-label" label="{{ $label }}"/>
    <div class="col-sm-10">
        <select class="{{ $class }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}">
            @foreach( $options as $option )
                <option value="{{ $option->id }}" @selected( $value == $option->id )>{{ $option->title }}</option>
            @endforeach
        </select>
    </div>
</div>

