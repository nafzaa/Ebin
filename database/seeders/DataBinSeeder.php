<?php

namespace Database\Seeders;

use App\Models\DataBin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataBinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_tong' => '7aaf0c8d-287f-4d57-9bf4-e92defcea12a',
                'no_siri_tong' => 'A2040001',
                'jenis_tong' => 'MGB 120L',
            ],

            [
                'id_tong' => '0c8a724d-6983-4a77-b84d-dd268dbf73c5',
                'no_siri_tong' => 'A2040002',
                'jenis_tong' => 'MGB 120L',
            ],

            [
                'id_tong' => 'ba6988f9-5b5a-4308-84cc-ae85912f6db4',
                'no_siri_tong' => 'A2040003',
                'jenis_tong' => 'MGB 120L',
            ]
        ];

        foreach ($data as $value) {
            DataBin::create($value);
        }
    }
}
