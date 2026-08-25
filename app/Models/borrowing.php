<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class borrowing extends Model
{
    protected $fillable = [
        'id_pengunjung',
        'id-buku',
        'jumlah',
        'tanggal_peminjaman',
        'batas_peminjaman',
        'status',
    ];
}
