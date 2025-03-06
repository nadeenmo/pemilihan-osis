@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
            @vite(['resources/js/app.js'])
        </head>

        <!-- Sidebar -->
        <div class="col-md-2 bg-light vh-100">
            <div class="p-3">
                <div class="sidebar-header text-center p-3">
                    <img src="img/satu_suara.png" class="img-fluid">
                    <p class="text-muted small fw-bolder m-0">
                        SatuSuara, <span class="text-danger fw-bolder">Satoe</span> Arah, <span
                            class="text-danger fw-bolder">Satoe</span> Pemimpin
                    </p>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link text-dark">
                            <i class="bi bi-house-door-fill me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kandidat" class="nav-link text-dark">
                            <i class="bi bi-person-bounding-box me-2"></i> Data Kandidat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pemilih" class="nav-link text-dark">
                            <i class="bi bi-person-check-fill me-2"></i> Data Pemilih
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kode-akses" class="nav-link text-dark">
                            <i class="bi bi-key-fill me-2"></i> Akses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/vote" class="nav-link text-dark">
                            <i class="bi bi-bar-chart-fill me-2"></i> Hasil Suara
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>

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