<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>

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
        .form-control {
            border: 1px solid #e9b5c8;
            border-radius: 7px;
        }
        .form-control:focus {
            border-color: #d87093;
            box-shadow: 0 0 0 0.2rem rgba(216, 112, 147, 0.2);
        }
        .btn-success {
            background-color: #d87093;
            border-color: #d87093;
        }
        .btn-success:hover {
            background-color: #c45c80;
            border-color: #c45c80;
        }
        .btn-secondary {
            background-color: #a77b8d;
            border-color: #a77b8d;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header text-white">
            <h4 class="mb-0">Tambah Data Mata Kuliah</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Mata Kuliah</label>

                    <input type="text"
                           name="kode_matakuliah"
                           class="form-control"
                           value="{{ old('kode_matakuliah') }}"
                           placeholder="Contoh: MK001">

                    @error('kode_matakuliah')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Mata Kuliah</label>

                    <input type="text"
                           name="nama_matakuliah"
                           class="form-control"
                           value="{{ old('nama_matakuliah') }}"
                           placeholder="Masukkan nama mata kuliah">

                    @error('nama_matakuliah')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah SKS</label>

                    <input type="number"
                           name="sks"
                           class="form-control"
                           value="{{ old('sks') }}"
                           min="1"
                           max="6"
                           placeholder="Masukkan jumlah SKS">
                    @error('sks')
                        <div class="text-danger mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">
                    Simpan Data
                </button>
                <a href="{{ route('matakuliah.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>

</div>
</body>
</html>