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
            @section('title') Data Kandidat @endsection
        <div class="col-md-10">
            <div class="p-3">

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