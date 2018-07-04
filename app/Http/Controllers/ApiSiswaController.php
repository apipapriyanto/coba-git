<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiSiswaController extends Controller
{
    public function index () {

        $siswa = \App\Siswa::all();
        
        return $siswa;
    }

    public function store(Request $request) {

        $siswa = new \App\Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Berhasil Tersimpan";
    }

    public function update(Request $request, $id) {

        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = \App\Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->save();

        return "Data Berhasil di Update";
    }

    public function delete($id) {

        $siswa = \App\Siswa::find($id);
        $siswa->delete();

        return "Data Berhasil Di Hapus";
    }
}
