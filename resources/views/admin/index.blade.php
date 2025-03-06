@extends('layouts.app')

@section('content')
<div class="container-fluid">
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

        <!-- Main Content -->
        <div class="col-md-10">
            <div class="p-3" style="background: linear-gradient(to bottom, #f8d7da, #fff); min-height: 100vh;">
                <h3 class="fw-bold">Beranda</h3>
                <p>Halo, user!</p>

                <div class="mt-4 text-center">
                    <button class="btn btn-primary w-100 mb-2">Profil Nomor 1</button>

                    <!-- Tempat Foto -->
                    <div class="d-flex justify-content-center">
                        <div class="border border-danger rounded p-2"
                            style="width: 150px; height: 150px; overflow: hidden;">
                            <img src="img/eunwo" class=" img-fluid">
                        </div>
                    </div>

                    <!-- Tombol Pilih -->
                    <button class="btn btn-success w-100 mt-3">Pilih</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection