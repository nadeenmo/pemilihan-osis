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
                <h3 class="fw-bold">Data Kandidat</h3>
                <p>Halo, admin!</p>

                <div class="card p-4">
                    <form action="{{ route('kandidat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama_ketua" class="form-label">Nama Ketua</label>
                                <input type="text" id="nama_ketua" name="nama_ketua" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="nama_wakil" class="form-label">Nama Wakil</label>
                                <input type="text" id="nama_wakil" name="nama_wakil" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="nis_ketua" class="form-label">NIS Ketua</label>
                                <input type="text" id="nis_ketua" name="nis_ketua" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="nis_wakil" class="form-label">NIS Wakil</label>
                                <input type="text" id="nis_wakil" name="nis_wakil" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="foto" class="form-label">Foto Kandidat</label>
                                <input type="file" id="foto" name="foto" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="nomor_kandidat" class="form-label">Nomor Kandidat</label>
                                <input type="text" id="nomor_kandidat" name="nomor_kandidat" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-3">Simpan</button>
                    </form>
                </div>

                <div class="card mt-4 p-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor Kandidat</th>
                                <th>Nama Ketua</th>
                                <th>Nama Wakil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kandidats as $kandidat)
                            <tr>
                                <td>{{ $kandidat->nomor_kandidat }}</td>
                                <td>{{ $kandidat->nama_ketua }}</td>
                                <td>{{ $kandidat->nama_wakil }}</td>
                                <td>
                                    <form action="{{ route('kandidat.destroy', $kandidat->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('kandidat.edit', $kandidat->id) }}"
                                        class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection