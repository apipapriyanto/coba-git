<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGuruController extends Controller
{
    public function index() {

        $gurus = \App\Guru::all();
        return $gurus;
    }

    public function store(Request $request) {

        $gurus = new \App\Guru;
        $gurus->nama = $request->nama;
        $gurus->alamat = $request->alamat;
        $gurus->mapel = $request->mapel;
        $gurus->save();

        return $gurus;
    }

    public function update(Request $request, $id) {

        $nama = $request->nama;
        $alamat = $request->alamat;
        $mapel = $request->mapel;

        $gurus = \App\Guru::find($id);
        $gurus->nama = $nama;
        $gurus->alamat = $alamat;
        $gurus->mapel = $mapel;
        $gurus->save();

        return $gurus;
    }

    public function delete($id) {

        $gurus = \App\Guru::find($id);
        $gurus->delete();

        return "Berhasil Di Hapus";
    }
}
