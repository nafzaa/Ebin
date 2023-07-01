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
            ],
            [
                'id_tong' => '325a6b3b-acfd-44ef-a5a5-1787e4f88374',
                'no_siri_tong' => 'A2040004',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '02fa385d-e60e-4d16-a261-997a793eee3d',
                'no_siri_tong' => 'A2040005',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '3930902d-38a4-4db5-b9b5-b5f1a9c7fe12',
                'no_siri_tong' => 'A2040006',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '9e317f4b-9d41-4d17-ac48-96076a9b93c2',
                'no_siri_tong' => 'A2040007',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '62925a5c-0d09-480c-932e-8e978d705ca9',
                'no_siri_tong' => 'A2040008',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '1f60dd98-be52-40ab-add3-7189c2b1db4e',
                'no_siri_tong' => 'A2040009',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'b4f2140f-75f3-4e82-809c-e9538139d14f',
                'no_siri_tong' => 'A2040010',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '186a3a8a-3a13-484a-92d5-c4231b3a349e',
                'no_siri_tong' => 'A2040011',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'a96d0212-6620-47b6-97d5-81bad96201bf',
                'no_siri_tong' => 'A2040012',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'eee307a9-5ce0-4e85-b32b-2f64ade112d2',
                'no_siri_tong' => 'A2040013',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '6543a42d-cd10-43f1-96c9-391324164a48',
                'no_siri_tong' => 'A2040014',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'dc8b4874-7f47-4e4a-b25a-82f2ec709df9',
                'no_siri_tong' => 'A2040015',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '0c7d6f4a-e65b-416e-8e4d-fd54abd630ad',
                'no_siri_tong' => 'A2040016',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'dbec5a92-d674-4a89-9586-9648059484e8',
                'no_siri_tong' => 'A2040017',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'df3b125e-7cc1-4c21-a131-5e1068585bcf',
                'no_siri_tong' => 'A2040018',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => 'd230a8f2-c0a6-40cb-8be3-41c51305d86b',
                'no_siri_tong' => 'A2040019',
                'jenis_tong' => 'MGB 120L',
            ],
            [
                'id_tong' => '2ab4b27a-78c2-435f-bbbd-7eb4725ca107',
                'no_siri_tong' => 'A2040020',
                'jenis_tong' => 'MGB 120L',
            ]
        ];

        foreach ($data as $value) {
            DataBin::create($value);
        }
    }
}
