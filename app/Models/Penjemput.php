<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjemput extends Model
{
    use HasFactory;

    protected $table = "penjemput";

    protected $primaryKey = 'id_penjemput';
    protected $fillable = [
        'id',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'tahun_masuk'
    ];
}
