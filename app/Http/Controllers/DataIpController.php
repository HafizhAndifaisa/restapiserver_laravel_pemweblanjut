<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataIp;

class DataIpController extends Controller
{
    public function index()
    {
        return DataIp::all();
    }
    public function create(request $request)
    {
        $dataip = new DataIp;
        $dataip->id_mahasiswa=$request->id_mahasiswa;
        $dataip->ipk=$request->ipk;
        $dataip->ips=$request->ips;
        $dataip->semester=$request->semester;
        $dataip->save();

        return "Data berhasil Masuk";
    }
    public function update(request $request,$id)
    {
        $id_mahasiswa=$request->id_mahasiswa;
        $ipk=$request->ipk;
        $ips=$request->ips;
        $semester=$request->semester;

        $dataip = DataIp::find($id);
        $dataip->id_mahasiswa=$request->id_mahasiswa;
        $dataip->ipk=$request->ipk;
        $dataip->ips=$request->ips;
        $dataip->semester=$request->semester;
        $dataip->save();

        return "Data berhasil di Update";
    }
    public function delete($id)
    {
        $dataip = DataIp::find($id);
        $dataip->delete();

        return "Data berhasil di Hapus";
    }
    public function detail($id)
    {
        $dataip = DataIp::find($id);

        return $dataip;
    }
}
