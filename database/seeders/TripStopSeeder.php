<?php

namespace Database\Seeders;
use App\Models\TripStops;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trip_stops')->insert([
            [
                'trip_id'=>1,
                'stop_id' => 1,
                'stop_time'=>"7:00"
            ],
            [
                'trip_id'=>1,
                'stop_id' => 5,
                'stop_time'=>"9:00"
            ],
            [
                'trip_id'=>2,
                'stop_id' => 1,
                'stop_time'=>"7:30"
            ],
            [
                'trip_id'=>2,
                'stop_id' => 3,
                'stop_time'=>"8:30"
            ],
            [
                'trip_id'=>2,
                'stop_id' => 4,
                'stop_time'=>"9:30"
            ],
            [
                'trip_id'=>2,
                'stop_id' => 5,
                'stop_time'=>"10:30"
            ],
            [
                'trip_id'=>3,
                'stop_id' => 1,
                'stop_time'=>"9:00"
            ],
            [
                'trip_id'=>3,
                'stop_id' => 3,
                'stop_time'=>"10:15"
            ],
            [
                'trip_id'=>3,
                'stop_id' => 5,
                'stop_time'=>"11:30"
            ],
            [
                'trip_id'=>4,
                'stop_id' => 5,
                'stop_time'=>"7:00"
            ],[
                'trip_id'=>4,
                'stop_id' => 1,
                'stop_time'=>"9:00"
            ],
            [
                'trip_id'=>5,
                'stop_id' => 5,
                'stop_time'=>"7:30"
            ],
            [
                'trip_id'=>5,
                'stop_id' => 3,
                'stop_time'=>"7:30"
            ],
            [
                'trip_id'=>5,
                'stop_id' => 4,
                'stop_time'=>"8:30"
            ],
            [
                'trip_id'=>5,
                'stop_id' =>2,
                'stop_time'=>"9:30"
            ],[
                'trip_id'=>5,
                'stop_id' => 1,
                'stop_time'=>"10:30"
            ],
            [
                'trip_id'=>6,
                'stop_id' => 5,
                'stop_time'=>"9:00"
            ],
            [
                'trip_id'=>6,
                'stop_id' => 4,
                'stop_time'=>"10:15"
            ],
            [
                'trip_id'=>6,
                'stop_id' => 1,
                'stop_time'=>"10:30"
            ],
        ]);

    }
}
