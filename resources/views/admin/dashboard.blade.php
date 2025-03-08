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
            @section('title') Beranda @endsection
        <div class="col-md-10">
            <div class="p-3">

                <div class="mt-4 text-center">
                    <button class="btn btn-primary w-100 mb-2" style="margin-left: 3%;">Profil Nomor 1</button>

                    <!-- Tempat Foto -->
                    <div class="d-flex justify-content-center">
                        <div class="border border-danger rounded p-2"
                            style="width: 150px; height: 150px; overflow: hidden; margin-left: 6%;">
                            <img src="img/eunwo" class=" img-fluid">
                        </div>
                    </div>

                    <!-- Tombol Pilih -->
                    <button class="btn btn-success w-100 mt-3" style="margin-left: 3%;">Pilih</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection