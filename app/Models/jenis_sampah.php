<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_sampah extends Model
{
    use HasFactory;

    protected $table = "jenis_sampah";

    protected $primaryKey = 'id_jenis_sampah';

    protected $fillable = [
        'jenis_sampah',
        'harga_kilo',
        'deskripsi',
        'id_admin'
    ];
}
