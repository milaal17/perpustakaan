<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'judul' => 'Lasskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'penerbit' =>'Bentang Pustaka',
            'tahun_terbit' => 2005,
            'kategori' => 'Novel',
            'stok' => 10,
            'deskripsi' => 'Novel yang menceritakan 
                              perjuangan dan persahabatan 
                              anak-anak Belitung',
            'foto/sampul' => null,
        ]);
    }
}
