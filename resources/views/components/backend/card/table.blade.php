<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            @foreach( $headers as $item )
            <th>{{ $item }}</th>
            @endforeach
        </tr>
    </thead>
    <tfoot>
        <tr>
            @foreach( $headers as $item )
            <th>{{ $item }}</th>
            @endforeach
        </tr>
    </tfoot>
    <tbody>
        {{ $slot }}
    </tbody>
</table>