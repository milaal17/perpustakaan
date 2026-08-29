<?php

namespace Database\Seeders;

use App\Models\ShiftSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShiftSchedule::create([
            'nama_penjaga' => 'Administrator',
            'tanggal_shif' => '2026-08-26',
            'jam_mulai' => '2026-08-26 08:00:00',
            'jam_selesai' => '2026-08-26 16:00:00',
            'status_kehadiran' => 'Hadir',
            'keterangan' => 'Sif pagi',
        ]);
    }
}
