@php
    extract( $headers )    
@endphp
<ul class="list-group">
    <li class="list-group-item"><span class="{{$class}}">{{$group}}:</span> {{$user->group->title}}</li>
    <li class="list-group-item"><span class="{{$class}}">{{$name}}:</span> {{$user->name}}</li>                                 
    <li class="list-group-item"><span class="{{$class}}">{{$email}}:</span> {{$user->email}}</li>                                 
    <li class="list-group-item"><span class="{{$class}}">{{$phone}}:</span> {{$user->phone}}</li>                                 
    <li class="list-group-item"><span class="{{$class}}">{{$address}}:</span> {{$user->address}}</li>                                 
</ul>
