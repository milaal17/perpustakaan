<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftSchedule extends Model
{
    protected $fillable = [
        'nama_penjaga',
        'tanggal_shif',
        'jam_mulai',
        'jam_selesai',
        'status_kehadiran',
        'keterangan',
    ];
}
