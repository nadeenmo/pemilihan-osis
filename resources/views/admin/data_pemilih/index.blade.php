@extends('admin.extend.extends')

<div class="container-fluid">
    <div class="row">

        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
            @vite(['resources/js/app.js'])
        </head>

        @section('content')
            @section('title') Data Pemilih @endsection
        <div class="col-md-10">
            <div class="p-3">

                <div class="card p-4">
                    <h5>Data Belum Memilih</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data akan dimasukkan di sini -->
                        </tbody>
                    </table>
                </div>

                <div class="card mt-4 p-4">
                    <h5>Data Sudah Memilih</h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data akan dimasukkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection