<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admin";
    protected $primaryKey = 'admin';

    protected $fillable = [
        'id',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'tahun_masuk'
    ];
}
