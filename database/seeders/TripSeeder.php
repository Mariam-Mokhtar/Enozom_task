<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->insert([
            [
                'id'=>1,
                'trip_name' => 'Talgo',
                'train_id'=>1
            ],
            [
                'id'=>2,
                'trip_name' => 'French',
                'train_id'=>2
            ],
            [
                'id'=>3,
                'train_name' => 'Spain',
                'train_id'=>3
            ],
            [
                'id'=>4,
                'trip_name' => 'Talgo',
                'train_id'=>1
            ],
            [
                'id'=>5,
                'trip_name' => 'French',
                'train_id'=>2
            ],
            [
                'id'=>6,
                'train_name' => 'Spain',
                'train_id'=>3
            ]
        ]);
    }
}
