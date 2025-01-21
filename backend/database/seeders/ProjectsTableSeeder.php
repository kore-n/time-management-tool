<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->insert([
            [
                'user_id' => 1,
                'name' => 'Project Alpha',
                'description' => 'First test project',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name' => 'Project Beta',
                'description' => 'Second test project',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}