<?php

namespace App\Http\Controllers;

use App\Models\Riwayat_Aksi_Tabungan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Riwayat_Aksi_TabunganController extends Controller
{

    public function getAllView($id)
    {
        $riwayat = Riwayat_Aksi_Tabungan::where('id_tabungan', $id)->get();
        return view('nasabah.riwayat', ['riwayat' => $riwayat]);
    }

    public function getAll()
    {
        $riwayat = Riwayat_Aksi_Tabungan::all();
        return response()->json($riwayat);
    }

    public function getOne($id)
    {
        $riwayat = Riwayat_Aksi_Tabungan::where('id_rat', $id)->first();
        return response()->json($riwayat);
    }

    public function insert(Request $request)
    {
        $riwayat = Riwayat_Aksi_Tabungan::create([
            'id_tabungan' => $request->id_tabungan,
            'tanggal' => Carbon::now(),
            'tipe' => $request->tipe,
            'nominal' => $request->nominal,
            'berat' => $request->berat,
        ]);

        $riwayat->save();

        return response()->json(['message' => 'Riwayat Added']);
    }

    public function update(Request $request, $id)
    {
        $riwayat = Riwayat_Aksi_Tabungan::where('id_rat', $id)->update([
            'tanggal' => $request->tanggal,
            'tipe' => $request->tipe,
            'nominal' => $request->nominal,
        ]);

        return response()->json(['message' => 'Riwayat Updated']);
    }

    public function delete($id)
    {
        Riwayat_Aksi_Tabungan::destroy($id);
    }
}