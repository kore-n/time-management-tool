<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'project_id' => 1,
                'name' => 'Task A1',
                'description' => 'Task for Project Alpha',
                'status' => 'pending',
                'due_date' => now()->addDays(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_id' => 2,
                'name' => 'Task B1',
                'description' => 'Task for Project Beta',
                'status' => 'in_progress',
                'due_date' => now()->addDays(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}