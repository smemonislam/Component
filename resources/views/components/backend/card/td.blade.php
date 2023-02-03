@props(['align' => 'left'])

@php
    $textAlignClass = [
        'left'      => 'text-left',
        'right'     => 'text-right',
        'center'    => 'text-center',
    ][$align] ?? 'text-left'  
@endphp

<td class="{{ $textAlignClass }}" >{{ $slot }}</td>