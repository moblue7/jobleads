<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Total Tax</th>
    </tr>
    </thead>
    <tbody>
        @foreach($tab1 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{"$". number_format($record->total_tax, 2)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

