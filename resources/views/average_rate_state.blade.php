<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Average County Tax Rate</th>
    </tr>
    </thead>
    <tbody>
        <?php $sum = 0; ?>
        @foreach($tab3 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{number_format($record->avg_rate, 2)}}</td>
            </tr>
            <?php $sum += $record->avg_rate; ?>
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td>Average</td>
        <td>{{number_format($sum/count($tab3), 2)}}</td>
    </tr>
    </tfoot>
</table>

