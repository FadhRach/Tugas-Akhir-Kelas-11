<?php

namespace Database\Seeders;

use App\Models\eskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class eskulseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id_eskul' => '1',
                'namaeskul' => 'Staff',
            ],
            [
                'id_eskul' => '2',
                'namaeskul' => 'Guru',
            ],
            [
                'id_eskul' => '3',
                'namaeskul' => 'Wakasek',
            ],
            [
                'id_eskul' => '4',
                'namaeskul' => 'Siswa Biasa',
            ],
            [
                'id_eskul' => '5',
                'namaeskul' => 'MPK',
            ],
            [
                'id_eskul' => '6',
                'namaeskul' => 'OSIS',
            ],
            [
                'id_eskul' => '7',
                'namaeskul' => 'PRAMUKA',
            ],
            [
                'id_eskul' => '8',
                'namaeskul' => 'PASSUS',
            ],
            [
                'id_eskul' => '9',
                'namaeskul' => 'PKS',
            ],
            [
                'id_eskul' => '10',
                'namaeskul' => 'PMR',
            ],
            [
                'id_eskul' => '11',
                'namaeskul' => 'STAMPARA',
            ],
        ];

        foreach($userData as $key => $val){
            eskul::create($val);
        }
    }
}
