<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Tirta',
                'alamat' => 'Jl Pluto',
                'no_hp' => '0812356736',
                'role' => 'dokter',
                'email' => 'tirta@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Robin',
                'alamat' => 'Jl Marine',
                'no_hp' => '0824671246',
                'role' => 'pasien',
                'email' => 'robbin@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Richard',
                'alamat' => 'Jl Venus',
                'no_hp' => '0824671242',
                'role' => 'dokter',
                'email' => 'richard@gmail.com',
                'password' => 'password'
            ],
            [
                'nama' => 'Agus',
                'alamat' => 'Jl Jupiter',
                'no_hp' => '0824671240',
                'role' => 'pasien',
                'email' => 'agus@gmail.com',
                'password' => 'password'
            ]
            ];
        foreach($data as $d){
            User::create([
                'nama' => $d['nama'],
                'email' => $d['email'],
                'password' => bcrypt($d['password']),
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role']
            ]);
        }
    }
}
