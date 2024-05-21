<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Carbon\Carbon;
use Illuminate\Http\Request;

class nasabahController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth.role:nasabah');
    // }

    public function profil($id)
    {
        $nasabah = Nasabah::all();
        return view('nasabah.profil_nasabah', ["nasabah" => $nasabah]);
    }

    public function getAll()
    {
        $nasabah = Nasabah::all();
        return response()->json($nasabah);
    }

    public function getOne($id)
    {
        $nasabah = Nasabah::where('id', $id)->first();
        return response()->json($nasabah);
    }

    public function available(Request $request)
    {
        $nasabahAvail = Nasabah::where('id', $request->id)->first();
        if ($nasabahAvail == "") {
            $nasabah = Nasabah::create([
                'id' => $request->id,
                'nama_lengkap' => $request->nama_lengkap,
                'tanggal_bergabung' => Carbon::now()
            ]);

            $nasabah->save();
        }
    }

    public function insert(Request $request)
    {
        $nasabah = Nasabah::create([
            'id_nasabah' => "NAS" . random_int(1, 1000),
            'id' => $request->id,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tanggal_bergabung' => Carbon::now()
        ]);

        $nasabah->save();

        return response()->json(['message' => 'Profile Added']);
    }

    public function update(Request $request, $id)
    {
        $nasabah = Nasabah::where('id_nasabah', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return response()->json(['message' => 'Profile Updated']);
    }

    public function delete($id)
    {
        Nasabah::destroy($id);
    }
}
