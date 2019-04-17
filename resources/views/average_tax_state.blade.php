<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Average Tax</th>
    </tr>
    </thead>
    <tbody>
        @foreach($tab2 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{"$". number_format($record->average_tax, 2)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

