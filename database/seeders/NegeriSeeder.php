<?php

namespace Database\Seeders;

use App\Models\Negeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kod_negeri' => '01',
                'nama_negeri' => 'JOHOR',
            ],

            [
                'kod_negeri' => '02',
                'nama_negeri' => 'KEDAH',
            ],

            [
                'kod_negeri' => '03',
                'nama_negeri' => 'KELANTAN',
            ],

            [
                'kod_negeri' => '04',
                'nama_negeri' => 'MELAKA',
            ],

            [
                'kod_negeri' => '05',
                'nama_negeri' => 'NEGERI SEMBILAN',
            ],

            [
                'kod_negeri' => '06',
                'nama_negeri' => 'PAHANG',
            ],

            [
                'kod_negeri' => '07',
                'nama_negeri' => 'PULAU PINANG',
            ],

            [
                'kod_negeri' => '08',
                'nama_negeri' => 'PERAK',
            ],

            [
                'kod_negeri' => '09',
                'nama_negeri' => 'PERLIS',
            ],

            [
                'kod_negeri' => '10',
                'nama_negeri' => 'SELANGOR',
            ],

            [
                'kod_negeri' => '11',
                'nama_negeri' => 'TERENGGANU',
            ],

            [
                'kod_negeri' => '12',
                'nama_negeri' => 'SABAH',
            ],

            [
                'kod_negeri' => '13',
                'nama_negeri' => 'SARAWAK',
            ],

            [
                'kod_negeri' => '14',
                'nama_negeri' => 'WILAYAH PERSEKUTUAN KUALA LUMPUR',
            ],

            [
                'kod_negeri' => '15',
                'nama_negeri' => 'WILAYAH PERSEKUTUAN LABUAN',
            ],

            [
                'kod_negeri' => '16',
                'nama_negeri' => 'WILAYAH PERSEKUTUAN PUTRAJAYA',
            ]

        ];

        foreach ($data as $value) {
            Negeri::create($value);
        }
    }
}
