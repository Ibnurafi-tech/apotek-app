<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index() {
        return response()->json(Obat::all());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'kode_obat' => 'required',
            'nama_obat' => 'required',
            'stock_obat' => 'required|numeric',
            'tanggal_expired' => 'required|date'
        ]);
        $obat = Obat::create($data);
        return response()->json(['message' => 'Data Obat Berhasil Disimpan', 'data' => $obat], 201);
    }
}