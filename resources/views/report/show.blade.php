@extends('layouts.users.app')

@section('title')
Into
@endsection

@section('content')
<article class="content responsive-tables-page">
    <div class="courses">
        <div class="card">
            <h1 class="text-IBM"> Báo cáo số học viên đăng kí năm {{ $year }} </h1>
        </div>
        <section class="section" id="report">
        <div class="card">
            <div class="report_chart">
                <div class="col-xl-10">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="report_table">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th class="w50">Tháng </th>
                            <th class="w50">Số học viên</th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="w50">1</td>
                        <td class="w50">{{ $january }}</td>
                    </tr>
                    <tr>
                        <td class="w50">2</td>
                        <td class="w50">{{ $february }}</td>
                    </tr>
                    <tr>
                        <td class="w50">3</td>
                        <td class="w50">{{ $march }}</td>
                    </tr>
                    <tr>
                        <td class="w50">4</td>
                        <td class="w50">{{ $april }}</td>
                    </tr>
                    <tr>
                        <td class="w50">5</td>
                        <td class="w50">{{ $may }}</td>
                    </tr>
                    <tr>
                        <td class="w50">6</td>
                        <td class="w50">{{ $june }}</td>
                    </tr>
                    <tr>
                        <td class="w50">7</td>
                        <td class="w50">{{ $july }}</td>
                    </tr>
                    <tr>
                        <td class="w50">8</td>
                        <td class="w50">{{ $august }}</td>
                    </tr>
                    <tr>
                        <td class="w50">9</td>
                        <td class="w50">{{ $september }}</td>
                    </tr>
                    <tr>
                        <td class="w50">10</td>
                        <td class="w50">{{ $october }}</td>
                    </tr>
                    <tr>
                        <td class="w50">11</td>
                        <td class="w50">{{ $november }}</td>
                    </tr>
                    <tr>
                        <td class="w50">12</td>
                        <td class="w50">{{ $december }}</td>
                    </tr>
                </table>
            </div>
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
                    label: 'Học Viên',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data:[ // 12, 19, 3, 5, 7, 3, 12, 19, 3, 5, 12, 7,
                        {{ $january }},
                        {{ $february }},        
                        {{ $march }},
                        {{ $april }},
                        {{ $may }},
                        {{ $june }},
                        {{ $july }},
                        {{ $august }},
                        {{ $september }},
                        {{ $october }},
                        {{ $november }},
                        {{ $december }}
                    ],
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