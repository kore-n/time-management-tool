<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeEntriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('time_entries')->insert([
            [
                'task_id' => 1,
                'start_time' => now()->subHours(2),
                'end_time' => now()->subHour(),
                'duration' => 60, // 1時間
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_id' => 2,
                'start_time' => now()->subHours(3),
                'end_time' => now()->subHours(2),
                'duration' => 60, // 1時間
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}