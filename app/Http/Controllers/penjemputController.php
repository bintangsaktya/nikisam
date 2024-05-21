<?php

namespace App\Http\Controllers;

use App\Models\Penjemput;
use Carbon\Carbon;
use Illuminate\Http\Request;

class penjemputController extends Controller
{

    public function profil($id)
    {
        $penjemput = Penjemput::all();
        return view('penjemput.profil_penjemput', ["penjemput" => $penjemput]);
    }

    public function getAll()
    {
        $penjemput = Penjemput::all();
        return response()->json($penjemput);
    }

    public function getOne($id)
    {
        $penjemput = Penjemput::where('id', $id)->first();
        return response()->json($penjemput);
    }

    public function insert(Request $request)
    {
        $penjemput = Penjemput::create([
            'id' => $request->id,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tahun_masuk' => Carbon::now()
        ]);

        $penjemput->save();

        return response()->json(['message' => 'Profile Added']);
    }

    public function update(Request $request, $id)
    {
        $penjemput = Penjemput::where('id_penjemput', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return response()->json(['message' => 'Profile Updated']);
    }

    public function delete($id)
    {
        Penjemput::destroy($id);
    }
}
