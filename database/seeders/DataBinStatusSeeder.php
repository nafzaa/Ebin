<?php

namespace Database\Seeders;

use App\Models\DataBinStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataBinStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 21; $i++) {
            DataBinStatus::create([
                'data_bin_id'=>$i+1,
                'status'=>1
            ]
            );
        }
    }
}
