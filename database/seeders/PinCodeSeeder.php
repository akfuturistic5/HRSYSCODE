<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pincodes;

class PinCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = \Illuminate\Support\Facades\File::get("database/data/pin_codes.json");
        $data = json_decode($json);
        foreach ($data as $pinCode) {
            Pincodes::updateOrCreate([
                'name' => $pinCode->name,
                'pin_code' => $pinCode->pin_code,
                'district_id' => $pinCode->district_id,
            ]);
        }
    }
}
