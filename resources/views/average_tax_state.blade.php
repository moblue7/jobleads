<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Average County Tax</th>
    </tr>
    </thead>
    <tbody>
        <?php $sum = 0; ?>
        @foreach($tab2 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{"$". number_format($record->average_tax, 2)}}</td>
            </tr>
            <?php $sum += $record->average_tax; ?>
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td>Average</td>
        <td>{{"$". number_format($sum/count($tab2), 2)}}</td>
    </tr>
    </tfoot>
</table>

