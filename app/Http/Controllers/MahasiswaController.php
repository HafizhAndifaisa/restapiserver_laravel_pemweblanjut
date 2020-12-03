<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();
    }
    public function create(request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama=$request->nama;
        $mahasiswa->nim=$request->nim;
        $mahasiswa->fakultas=$request->fakultas;
        $mahasiswa->prodi=$request->prodi;
        $mahasiswa->save();

        return "Data berhasil Masuk";
    }
    public function update(request $request,$id)
    {
        $nama=$request->nama;
        $nim=$request->nim;
        $fakultas=$request->fakultas;
        $prodi=$request->prodi;

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama=$nama;
        $mahasiswa->nim=$nim;
        $mahasiswa->fakultas=$fakultas;
        $mahasiswa->prodi=$prodi;
        $mahasiswa->save();

        return "Data berhasil di Update";
    }
    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return "Data berhasil di Hapus";
    }
    public function detail($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return $mahasiswa;
    }

}
