<?php

use Illuminate\Database\Seeder;

class TaskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_levels')->insert([
            'level_name' => 'Irrelevante',
            'base_score' => 1,
        ]);
        DB::table('task_levels')->insert([
            'level_name' => 'Fácil',
            'base_score' => 2,
        ]);
        DB::table('task_levels')->insert([
            'level_name' => 'Médio',
            'base_score' => 4,
        ]);
        DB::table('task_levels')->insert([
            'level_name' => 'Difícil',
            'base_score' => 6,
        ]);
        DB::table('task_levels')->insert([
            'level_name' => 'Extremo',
            'base_score' => 9,
        ]);
    }
}
