<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff0f5;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .card-header {
            background-color: #d87093;
            padding: 18px;
        }

        .btn-primary {
            background-color: #d87093;
            border-color: #d87093;
        }

        .btn-primary:hover {
            background-color: #c45c80;
            border-color: #c45c80;
        }

        .table thead th {
            background-color: #f4c2d7;
            color: #783c55;
        }

        .table tbody tr:hover {
            background-color: #fff0f5;
        }

        .btn-detail {
            background-color: #e9a3bd;
            color: white;
            border: none;
        }

        .btn-detail:hover {
            background-color: #d87093;
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header text-white">
            <h4 class="mb-0">Data Mata Kuliah</h4>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('matakuliah.create') }}"
               class="btn btn-primary mb-3">
                + Tambah Mata Kuliah
            </a>

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($matakuliah as $index => $data)

                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->kode_matakuliah }}</td>
                        <td>{{ $data->nama_matakuliah }}</td>
                        <td>{{ $data->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.show', $data->id) }}"
                               class="btn btn-detail btn-sm">
                                Detail
                            </a>
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
