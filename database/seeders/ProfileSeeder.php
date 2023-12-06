<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name_1' => 'H. Ahmad Khoirun, S.Pd.',
            'name_2' => 'Sofwan Idris, S.Pd.',
            'image_1' => 'logo.png',
            'image_2' => 'logo.png',
            'curriculum' => 'lorem ipsum dolor sit amet, consectetur adipis',
        ]);
    }
}
