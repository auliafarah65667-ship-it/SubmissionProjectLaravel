<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mata Kuliah</title>

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
        .table th {
            background-color: #f4c2d7;
            color: #783c55;
            width: 30%;
        }
        .table td {
            background-color: #fffafb;
        }
        .btn-secondary {
            background-color: #d87093;
            border-color: #d87093;
        }
        .btn-secondary:hover {
            background-color: #c45c80;
            border-color: #c45c80;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-white">
            <h4 class="mb-0">Detail Mata Kuliah</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $matakuliah->id }}</td>
                </tr>

                <tr>
                    <th>Kode Mata Kuliah</th>
                    <td>{{ $matakuliah->kode_matakuliah }}</td>
                </tr>

                <tr>
                    <th>Nama Mata Kuliah</th>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                </tr>

                <tr>
                    <th>Jumlah SKS</th>
                    <td>{{ $matakuliah->sks }}</td>
                </tr>

                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $matakuliah->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>

                <tr>
                    <th>Tanggal Diperbarui</th>
                    <td>{{ $matakuliah->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
            <a href="{{ route('matakuliah.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>

</div>
</body>
</html>