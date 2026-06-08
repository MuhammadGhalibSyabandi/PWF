<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Dosen::create([
            'nik' => '20208080',
            'nama' => 'Andrew',
            'email' => 'andrew@gmail.com',
            'no_telp' => '08123456789',
            'prodi' => 'MI',
            'alamat' => 'Padang',
            
        ]);

        \App\Models\Dosen::factory(10)->create();
    }
}
