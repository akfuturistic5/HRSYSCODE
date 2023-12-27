<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Districts;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = \Illuminate\Support\Facades\File::get("database/data/districts.json");
        $data = json_decode($json);
        foreach ($data as $district) {
            Districts::updateOrCreate([
                'name' => $district->name,
                'state_id' => $district->state_id,
            ]);
        }
    }
}
