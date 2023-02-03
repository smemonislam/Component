<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            @foreach( $headers as $item )
            <th class="{{ $item['clasess'] }}">{{ $item['name'] }}</th>
            @endforeach
        </tr>
    </thead>
    <tfoot>
        <tr>
            @foreach( $headers as $item )
            <th class="{{ $item['clasess'] }}">{{ $item['name'] }}</th>
            @endforeach
        </tr>
    </tfoot>
    <tbody>
        {{ $slot }}
    </tbody>
</table>