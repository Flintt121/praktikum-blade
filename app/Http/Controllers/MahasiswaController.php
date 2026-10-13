<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Atha';
        $nim = '2300012345';
        $prodi = 'Informatika';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }
    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Sugeng', 'nim' => '23001', 'ipk' => 3.80],
            ['nama' => 'Raul', 'nim' => '23002', 'ipk' => 3.20],
            ['nama' => 'Icha', 'nim' => '23003', 'ipk' => 2.75],
            ['nama' => 'Wanda', 'nim' => '23004', 'ipk' => 3.55],
            ['nama' => 'Tama', 'nim' => '23005', 'ipk' => 2.70],
        ];
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }
    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Sugeng', 'nim' => '23001', 'ipk' => 3.80],
            ['nama' => 'Raul', 'nim' => '23002', 'ipk' => 3.20],
            ['nama' => 'Icha', 'nim' => '23003', 'ipk' => 2.75],
            ['nama' => 'Wanda', 'nim' => '23004', 'ipk' => 3.55],
            ['nama' => 'Tama', 'nim' => '23005', 'ipk' => 2.70],
        ];
        $data = collect($mahasiswa)->firstWhere('nim', $nim);
        abort_if(!$data, 404);
        return view('mahasiswa.detail', [
            'mahasiswa' => $data
        ]);
    }
}
