<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Mahasiswa::create([
            'nim' => '202308080',
            'nama_lengkap' => 'Larry Page',
            'tempat_lahir' => 'Padang',
            'tgl_lahir' => '1970-09-08',
            'email' => 'admin.gmail.com',
            'prodi' => 'MI',
            'alamat' => 'Padang',
            
        ]);

        \App\Models\Mahasiswa::factory(10)->create();
    }
}
