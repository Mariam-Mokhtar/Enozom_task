<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'id'=>1,
                'train_name' => 'Talgo',
            ],
            [
                'id'=>2,
                'train_name' => 'French',
            ],
            [
                'id'=>3,
                'train_name' => 'Spain',
            ]
        ]);
    }
}
