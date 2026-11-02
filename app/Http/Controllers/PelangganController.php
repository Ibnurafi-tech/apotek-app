<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        return response()->json(Pelanggan::all());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_pelanggan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        $pelanggan = Pelanggan::create($data);
        return response()->json(['message' => 'Data Pelanggan Berhasil Disimpan', 'data' => $pelanggan], 201);
    }
}
