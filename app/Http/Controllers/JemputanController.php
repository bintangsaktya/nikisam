<?php

namespace App\Http\Controllers;

use App\Models\Jemputan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JemputanController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('role:admin,nasabah,penjemput');
    // }

    public function getAllView($id)
    {
        $jemput = DB::table('jemputan')
            ->leftjoin('jenis_sampah', 'jemputan.jenis_sampah', '=', 'jenis_sampah.id_jenis_sampah')
            ->leftJoin('penjemput', 'jemputan.id_penjemput', '=', 'penjemput.id_penjemput')
            ->select('jemputan.*', 'jenis_sampah.jenis_sampah', 'penjemput.nama_lengkap')
            ->where('jemputan.id_nasabah', $id)
            ->get();
        return view('nasabah.tracking', ['track' => $jemput]);
    }

    public function getAllViewAdmin()
    {
        $jemput = DB::table('jemputan')
            ->leftjoin('jenis_sampah', 'jemputan.jenis_sampah', '=', 'jenis_sampah.id_jenis_sampah')
            ->leftJoin('nasabah', 'jemputan.id_nasabah', '=', 'nasabah.id_nasabah')
            ->select('jemputan.*', 'jenis_sampah.jenis_sampah', 'nasabah.nama_lengkap')
            ->get();
        return view('admin.manajemen_permintaan', ['jemput' => $jemput]);
    }

    public function getAllViewPenjemput()
    {
        $jemput = DB::table('jemputan')
            ->leftjoin('jenis_sampah', 'jemputan.jenis_sampah', '=', 'jenis_sampah.id_jenis_sampah')
            ->leftJoin('nasabah', 'jemputan.id_nasabah', '=', 'nasabah.id_nasabah')
            ->select('jemputan.*', 'jenis_sampah.jenis_sampah', 'nasabah.nama_lengkap', 'nasabah.no_hp')
            ->get();
        return view('penjemput.data_jemputan', ['jemput' => $jemput]);
    }

    public function Jemputan($id)
    {
        $jemput = Jemputan::where('id_nasabah', $id)->count('id_jemputan');
        return response()->json($jemput);
    }

    public function allJemputan()
    {
        $jemput = Jemputan::get()->count();
        return response()->json($jemput);
    }

    public function allJemputanBerat()
    {
        $jemput = Jemputan::get()->sum("berat");
        return response()->json($jemput);
    }

    public function allJemputanAktif()
    {
        $jemput = Jemputan::get()->where("konfirmasi", "like", "Pending")->count();
        return response()->json($jemput);
    }

    public function getOne($id)
    {
        $jemput = Jemputan::where('id_jemputan', $id)->first();
        return response()->json($jemput);
    }

    public function uploadImg(Request $request)
    {
        $file = $request->image->store('upload');

        $jemput = Jemputan::where('id_jemputan', $request->id_jemputan)->update([
            'bukti_img' => $file
        ]);
    }

    public function insert(Request $request)
    {
        $jemput = Jemputan::create([
            'id_nasabah' => $request->id_nasabah,
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'jadwal' => $request->jadwal,
            'jenis_sampah' => $request->jenis_sampah,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'konfirmasi' => "Pending",
        ]);

        $jemput->save();

        return response()->json(['message' => 'Permintaan Jemputan Added', 'success' => true]);
    }

    public function addPenjemput(Request $request, $id)
    {
        $jemput = Jemputan::where('id_jemputan', $id)->update([
            'id_penjemput' => $request->id_penjemput,
        ]);

        return response()->json(['message' => 'Penjemput Added']);
    }

    public function update(Request $request, $id)
    {
        $jemput = Jemputan::where('id_jemputan', $id)->update([
            'tanggal' => $request->tanggal,
            'alamat' => $request->alamat,
            'jadwal' => $request->jadwal,
            'jenis_sampah_1' => $request->jenis_sampah_1,
            'jenis_sampah_2' => $request->jenis_sampah_2,
            'berat_1' => $request->berat_1,
            'berat_2' => $request->berat_2,
            'harga' => $request->harga,
            'konfirmasi' => $request->konfirmasi,
        ]);

        return response()->json(['message' => 'Jenis Sampah Updated']);
    }

    public function updateStatus(Request $request, $id)
    {
        $jemput = Jemputan::where('id_jemputan', $id)->update([
            'konfirmasi' => $request->konfirmasi,
        ]);

        return response()->json(['message' => 'Status Konfirmasi Updated']);
    }

    public function getHarga($id)
    {
        $harga1 = DB::table('jemputan')
            ->join('jenis_sampah', 'jenis_sampah_1', '=', 'jenis_sampah.jenis_sampah_1')
            ->select('jenis_sampah.harga_kilo');
        $harga2 = DB::table('jemputan')
            ->join('jenis_sampah', 'jenis_sampah_2', '=', 'jenis_sampah.jenis_sampah_1')
            ->select('jenis_sampah.harga_kilo');
        $total = $harga1 + $harga2;

        $jemput = Jemputan::where('id_jemputan', $id)->update([
            'harga' => $total
        ]);
    }

    public function delete($id)
    {
        Jemputan::destroy($id);
    }
}
