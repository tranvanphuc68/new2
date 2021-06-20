@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="container">
        <section class="example" id="report">
            <div class="row report_chart">
                <div class="col-xl-10">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="row report_table">
                <table>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Tháng </th>
                            <th>học sinh</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script>
        let myChart = document.getElementById('myChart').getContext('2d');
        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';
        Chart.defaults.global.responsive = true
        let massPopChart = new Chart(myChart, {
            type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                datasets: [{
                    label: 'Population',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: [12, 19, 3, 5, 7, 3, 12, 19, 3, 5, 12, 7,
                        // {{ $january }},
                        // {{ $february }},        
                        // {{ $march }},
                        // {{ $april }},
                        // {{ $may }},
                        // {{ $june }},
                        // {{ $july }},
                        // {{ $august }},
                        // {{ $september }},
                        // {{ $october }},
                        // {{ $november }},
                        // {{ $december }}
                    ],
                    //backgroundColor:'green',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    },
                }
            },
        });
    </script>
</article>

@endsection