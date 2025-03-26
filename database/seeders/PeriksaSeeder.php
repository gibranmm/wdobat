<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Periksa;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_pasien' => '2',
                'id_dokter' => '1',
                'catatan' => 'Periksa Pertama',
                'tgl_periksa' => now(),
                'biaya_periksa' => 70000
            ],
            [
                'id_pasien' => '4',
                'id_dokter' => '3',
                'catatan' => 'Kurangin pusreng pusreng',
                'tgl_periksa' => now(),
                'biaya_periksa' => 40000
            ],
            ];
        foreach($data as $d){
            Periksa::create([
                'id_pasien' => $d['id_pasien'],
                'id_dokter' => $d['id_dokter'],
                'catatan' => $d['catatan'],
                'tgl_periksa' => $d['tgl_periksa'],
                'biaya_periksa' => $d['biaya_periksa']
            ]);
        }
    }
}
