<div class="form-group row">
    <x-label for="{{ $id }}" class="col-sm-2 col-form-label" label="{{ $label }}"></x-label>
    <div class="col-sm-10">
        <textarea class="form-control" id="{{ $id }}" rows="{{ $rows }}">{{$value}}</textarea>
    </div>
</div>