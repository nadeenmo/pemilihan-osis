@extends('admin.extend.extends')

<div class="container">
    <div class="row">

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
            @vite(['resources/js/app.js'])
        </head>

        @section('content')
            @section('title') Hasil Suara @endsection
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hasil Suara</h4>
                </div>
                <div class="card-body">
                    <canvas id="hasilSuaraChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let ctx = document.getElementById("hasilSuaraChart").getContext("2d");

    let hasilSuaraChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: @json($labels), // Nama kandidat
            datasets: [{
                label: "Jumlah Suara",
                data: @json($data), // Jumlah suara per kandidat
                backgroundColor: ["#ff6384", "#36a2eb", "#ffcd56"],
                borderColor: ["#ff6384", "#36a2eb", "#ffcd56"],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
});
</script> -->
@endsection