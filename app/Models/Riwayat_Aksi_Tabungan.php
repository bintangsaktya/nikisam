<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Aksi_Tabungan extends Model
{
    use HasFactory;

    protected $table = "riwayat_aksi_tabungan";

    protected $primaryKey = "id_rat";

    protected $fillable = [
        'id_tabungan',
        'tanggal',
        'tipe',
        'nominal',
        'berat',
    ];
}
