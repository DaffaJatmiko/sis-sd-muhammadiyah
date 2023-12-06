<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ppdb::create([
            'title' => 'Informasi PPDB SD Muhammadiyah Ambarawa',
            'description' => 'Selamat datang di halaman Pendaftaran Peserta Didik Baru (PPDB) SD Muhammadiyah Ambarawa. Kami menyediakan formulir pendaftaran untuk siswa baru yang ingin bergabung dengan kam',
            'image' => 'potosd.jpeg',
        ]);
    }
}
