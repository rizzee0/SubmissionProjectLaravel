<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Alfarizqi Romadhon';
        $nim = '232520142';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Budi', 'nim' => '232520111', 'ipk' => 3.80],
            ['nama' => 'Budiman', 'nim' => '232520222', 'ipk' => 3.60],
            ['nama' => 'Budiana', 'nim' => '232520333', 'ipk' => 3.20],
            ['nama' => 'Budiyanto', 'nim' => '232520444', 'ipk' => 2.80],
            ['nama' => 'Budiren', 'nim' => '232520555', 'ipk' => 1.90],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Budi', 'nim' => '232520111', 'ipk' => 3.80],
            ['nama' => 'Budiman', 'nim' => '232520222', 'ipk' => 3.60],
            ['nama' => 'Budiana', 'nim' => '232520333', 'ipk' => 3.20],
            ['nama' => 'Budiyanto', 'nim' => '232520444', 'ipk' => 2.80],
            ['nama' => 'Budiren', 'nim' => '232520555', 'ipk' => 1.90],
        ];

        foreach ($mahasiswa as $m) {
            if ($m['nim'] == $nim) {
                return view('mahasiswa.detail', compact('m'));
            }
        }

        abort(404);
    }
}