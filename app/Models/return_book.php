<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class return_book extends Model
{
    protected $fillable = [
        'id_peminjaman',
        'tanggal_pengembalian',
        'status_pengembalian',
        'keterangan',
    ];
}

