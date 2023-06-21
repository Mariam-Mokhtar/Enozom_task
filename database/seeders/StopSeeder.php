<?php

namespace Database\Seeders;

use App\Models\Stop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stops')->insert([
            [
                'id'=>1,
                'stop_name' => 'Alexandria',
            ],
            [
                'id'=>2,
                'stop_name' => 'Damanhour',
            ],
            [
                'id'=>3,
                'stop_name' => 'Banha',
            ],
            [
                'id'=>4,
                'stop_name' => 'Tanta',
            ],
            [
                'id'=>5,
                'stop_name' => 'Cairo',
            ]
        ]);

    }
}
