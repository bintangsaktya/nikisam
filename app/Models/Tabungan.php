<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $table = "tabungan";

    protected $primaryKey = 'id_tabungan';

    protected $fillable = [
        'saldo',
        'id_nasabah',
        'berat'
    ];
}
