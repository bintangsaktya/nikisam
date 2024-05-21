<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function profil($id)
    {
        $admin = Admin::all();
        return view('admin.profil_admin', ["admin" => $admin]);
    }

    public function getAll()
    {
        $admin = Admin::all();
        return response()->json($admin);
    }

    public function getOne($id)
    {
        $admin = Admin::where('id_admin', $id)->first();
        return response()->json($admin);
    }

    public function insert(Request $request)
    {
        $admin = Admin::create([
            'id' => $request->id,
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tahun_masuk' => Carbon::now()
        ]);

        $admin->save();

        return response()->json(['message' => 'Profile Added']);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::where('id_admin', $id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return response()->json(['message' => 'Profile Updated']);
    }

    public function delete($id)
    {
        Admin::destroy($id);
    }


}
