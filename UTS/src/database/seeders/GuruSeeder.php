<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'nama' => 'nama',
            'nip' => 'nip',
            'mapel' => 'mapel',
            'email' => 'email',
            'telepon' => 'no hp',
            'alamat' => 'alamat',
            'tanggal_lahir' => 'tanggal lahir',
            'image' => '',
        ]);
    }
}
