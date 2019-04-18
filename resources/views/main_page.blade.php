<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <title>JobLeads Recruiting Task</title>
    </head>
    <body>

    <div class="container">
        <h2>Tax Reports</h2>
        <p>This page provides the required reports.</p>

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Overal Tax Per State</a></li>
            <li><a data-toggle="tab" href="#menu2">Average County Tax Per State</a></li>
            <li><a data-toggle="tab" href="#menu3">Average County Tax Rate Per State</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <h3>HOME</h3>
                <p>Average tax rate of the country is: <b>{{number_format($average_rate, 2)}}</b>.</p>
                <p>Overall tax collected in the country is: <b>{{"$". number_format($overall_tax, 2)}}</b>.</p>
            </div>
            <div id="menu1" class="tab-pane fade">
                @include('total_tax_state', ['tab1' => $tab1])
            </div>
            <div id="menu2" class="tab-pane fade">
                @include('average_tax_state', ['tab2' => $tab2])
            </div>
            <div id="menu3" class="tab-pane fade">
                @include('average_rate_state', ['tab3' => $tab3])
            </div>
        </div>
    </div>




    </body>
</html>
