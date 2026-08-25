<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class extension extends Model
{
    protected $fillable = [
        'id_peminjaman',
        'batas_peminjaman}baru',
        'keterangan',
    ];
}
