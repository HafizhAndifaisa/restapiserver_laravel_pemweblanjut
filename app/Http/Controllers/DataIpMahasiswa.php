<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\DataIp;

class DataIpMahasiswa extends Controller
{
    public function detailIPMahasiswa()
    {
        $detail = Mahasiswa::join('data_ips', 'mahasiswas.id', '=', 'data_ips.id_mahasiswa')
               ->get(['mahasiswas.nama', 'mahasiswas.nim', 'mahasiswas.fakultas', 'mahasiswas.prodi', 'data_ips.ipk','data_ips.ips','data_ips.semester' ]);

        return $detail;
    }
    public function detailIPMahasiswaPerID($id)
    {
        $detailperid = Mahasiswa::join('data_ips', 'mahasiswas.id', '=', 'data_ips.id_mahasiswa')
               ->where('data_ips.id_mahasiswa',"$id")
               ->get(['mahasiswas.nama', 'mahasiswas.nim', 'mahasiswas.fakultas', 'mahasiswas.prodi', 'data_ips.ipk','data_ips.ips','data_ips.semester' ]);

        return $detailperid;
    }
}
