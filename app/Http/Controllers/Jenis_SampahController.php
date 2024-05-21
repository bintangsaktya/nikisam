<?php

namespace App\Http\Controllers;

use App\Models\jenis_sampah;
use Illuminate\Http\Request;

class Jenis_SampahController extends Controller
{
    public function getAllView()
    {
        $sampah = jenis_sampah::all();
        return view('nasabah.jenis_sampah', ['jenis' => $sampah]);
    }

    public function getAll()
    {
        $sampah = jenis_sampah::all();
        return response()->json($sampah);
    }

    public function getOne($id)
    {
        $sampah = jenis_sampah::where('id_jenis_sampah', $id)->first();
        return response()->json($sampah);
    }

    public function insert(Request $request)
    {
        $sampah = jenis_sampah::create([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_kilo' => $request->harga_kilo,
            'deskripsi' => $request->deskripsi,
            'id_admin' => $request->id_admin
        ]);

        $sampah->save();

        return response()->json(['message' => 'Jenis Sampah Added']);
    }

    public function update(Request $request, $id)
    {
        $sampah = jenis_sampah::where('id_jenis_sampah', $id)->update([
            'jenis_sampah' => $request->jenis_sampah,
            'harga_kilo' => $request->harga_kilo,
            'deskripsi' => $request->deskripsi,
            'id_admin' => $request->id_admin
        ]);

        return response()->json(['message' => 'Jenis Sampah Updated']);
    }

    public function delete($id)
    {
        jenis_sampah::destroy($id);
    }
}
