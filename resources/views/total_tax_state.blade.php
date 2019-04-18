<table class="table table-striped">
    <thead>
    <tr>
        <th>State</th>
        <th>Total Tax</th>
    </tr>
    </thead>
    <tbody>
        <?php $total = 0; ?>
        @foreach($tab1 as $record)
            <tr>
                <td>{{$record->state}}</td>
                <td>{{"$". number_format($record->total_tax, 2)}}</td>
            </tr>

            <?php $total += $record->total_tax; ?>
        @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td>Total</td>
        <td>{{"$". number_format($total, 2)}}</td>
    </tr>
    </tfoot>
</table>

