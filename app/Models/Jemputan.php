<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemputan extends Model
{
    use HasFactory;

    protected $table = "jemputan";

    protected $primaryKey = 'id_jemputan';

    protected $fillable = [
        'id_nasabah',
        'id_penjemput',
        'tanggal',
        'alamat',
        'jadwal',
        'jenis_sampah',
        'berat',
        'harga',
        'konfirmasi',
        'bukti_img'
    ];
}
