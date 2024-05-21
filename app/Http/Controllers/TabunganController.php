<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabunganController extends Controller
{

    public function getOneAdminTarikan($id)
    {
        $tabungan = DB::table('tabungan')
            ->join('nasabah', 'tabungan.id_nasabah', '=', 'nasabah.id_nasabah')
            ->select('tabungan.*', 'nasabah.*')
            ->where('tabungan.id_nasabah', $id)
            ->orWhere('nasabah.nama_lengkap', 'like', '%' . $id . '%')
            ->first();
        return view('admin.manajemen_tarikan', ['tabung' => $tabungan]);
    }

    public function getOneAdminSetoran($id)
    {
        $tabungan = DB::table('tabungan')
            ->join('nasabah', 'tabungan.id_nasabah', '=', 'nasabah.id_nasabah')
            ->select('tabungan.*', 'nasabah.*')
            ->where('tabungan.id_nasabah', $id)
            ->orWhere('nasabah.nama_lengkap', 'like', '%' . $id . '%')
            ->first();
        return view('admin.manajemen_setoran', ['tabung' => $tabungan]);
    }

    public function getNominal($id)
    {
        $nominal = DB::table('tabungan')->where('id_nasabah', $id)->sum('saldo');
        return response()->json($nominal);
    }

    public function getBerat($id)
    {
        $nominal = DB::table('tabungan')->where('id_nasabah', $id)->sum('berat');
        return response()->json($nominal);
    }

    public function getAll()
    {
        $tabungan = Tabungan::all();
        return response()->json($tabungan);
    }

    public function getOne($id)
    {
        $tabungan = Tabungan::where('id_nasabah', $id)->first();
        return response()->json($tabungan);
    }

    public function insert(Request $request)
    {
        $tabungAvail = Tabungan::where('id_nasabah', $request->id_nasabah)->first();
        if ($tabungAvail == "") {
            $tabungan = Tabungan::create([
                'saldo' => $request->saldo,
                'id_nasabah' => $request->id_nasabah
            ]);

            $tabungan->save();
        }

        return response()->json(['message' => 'Tabungan Added']);
    }

    public function update(Request $request, $id)
    {
        $tabungan = Tabungan::where('id_tabungan', $id)->orWhere('id_nasabah', $id)->update([
            'saldo' => $request->saldo,
            'berat' => $request->berat
        ]);

        return response()->json(['message' => 'Tabungan Updated', 'redirect' => true]);
    }

    public function delete($id)
    {
        Tabungan::destroy($id);
    }
}
