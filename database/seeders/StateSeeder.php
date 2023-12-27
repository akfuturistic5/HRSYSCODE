<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\States;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = \Illuminate\Support\Facades\File::get("database/data/states.json");
        $data = json_decode($json);
        foreach ($data as $state) {
            States::updateOrCreate([
                'name' => $state->name,
                'code' => $state->code,
                'country_id' => $state->country_id
            ]);
        }
    }
}
