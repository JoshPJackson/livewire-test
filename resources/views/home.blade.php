@extends('layouts.app')

@section('content')

    <div class="grid grid-cols-4 gap-x-4">
        <div class="bg-white rounded-xl border shadow w-100 p-5">
            <h2 class="text-header">This is a card</h2>
            <canvas id="chart1" width="200" height="200"></canvas>
        </div>
        <div class="bg-white rounded-xl border shadow w-100">
            <h2 class="text-header">This is a card</h2>
        </div>
        <div class="bg-white rounded-xl border shadow w-100">
            <h2 class="text-header">This is a card</h2>
        </div>
        <div class="bg-white rounded-xl border shadow w-100">
            <h2 class="text-header">This is a card</h2>
        </div>
    </div>

    <script>

        var data = {
            labels: ['January', 'February', 'March'],

            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [30, 122, 90]
                },
                {
                    fillColor: "rgba(100,220,220,0.7)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [10, 52, 2]
                }
            ]
        };

        var context = document.querySelector('#chart1').getContext('2d');

        new Chart(context, { type: 'line', data })

    </script>

@endsection
