<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = "nasabah";

    protected $primaryKey = 'id_nasabah';

    protected $fillable = [
        'id',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'tanggal_bergabung'
    ];
}
