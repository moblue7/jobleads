<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Average Tax Rate</th>
    </tr>
    </thead>
    <tbody>
        @foreach($tab3 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{number_format($record->avg_rate, 2)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

