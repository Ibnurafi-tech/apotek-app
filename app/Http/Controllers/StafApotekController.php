<?php

namespace App\Http\Controllers;
use App\Models\StafApotek;
use Illuminate\Http\Request;

class StafApotekController extends Controller
{
    public function index() {
        return response()->json(StafApotek::all());
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id_staff' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required'
        ]);
        $staf = StafApotek::create($data);
        return response()->json(['message' => 'Data Staf Berhasil Disimpan', 'data' => $staf], 201);
    }
}
