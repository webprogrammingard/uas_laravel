<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([
            'nama' => 'SDN 1 Depok',
            'alamat' => 'Jl. Raya Depok No.1',
            'telepon' => '021123456',
            'email' => 'sdn1@depok.sch.id',
            'jenis_sekolah' => 'SD',
            'status_sekolah' => 'Negeri',
            'akreditasi' => 'A',
            'website' => 'https://sdn1depok.sch.id',
            'latitude' => -6.4025,
            'longitude' => 106.7942,
        ]);
    }
}
