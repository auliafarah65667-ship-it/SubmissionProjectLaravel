<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private function dataMahasiswa()
    {
        return [
            [
                'nama' => 'Farah Aulia Wijaya',
                'nim' => '242520117',
                'ipk' => 3.80,
            ],
            [
                'nama' => 'Teh yungki',
                'nim' => '242520118',
                'ipk' => 3.40,
            ],
            [
                'nama' => 'Kim Yungyung',
                'nim' => '242520119',
                'ipk' => 3.10,
            ],
            [
                'nama' => 'Asep Jamaludin',
                'nim' => '242520120',
                'ipk' => 1.80,
            ],
            [
                'nama' => 'Opah Sulaeman',
                'nim' => '242520121',
                'ipk' => 2.75,
            ],
        ];
    }

    //Profil mahasiswa
    public function profil()
    {
        $nama = 'Farah Aulia Wijaya';
        $nim = '242520117';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    // Daftar mahasiswa
    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    // Detail mahasiswa berdasarkan NIM
    public function detail($nim)
    {
        $mahasiswa = collect($this->dataMahasiswa())
            ->firstWhere('nim', $nim);

        abort_if($mahasiswa === null, 404);

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}