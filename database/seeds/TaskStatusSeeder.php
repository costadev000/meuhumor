<?php

use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_status')->insert([
            'description' => 'A Fazer',
            'active' => true,
        ]);
        DB::table('task_status')->insert([
            'description' => 'Fazendo',
            'active' => true,
        ]);
        DB::table('task_status')->insert([
            'description' => 'Feito',
            'active' => true,
        ]);
        DB::table('task_status')->insert([
            'description' => 'Cancelado',
            'active' => true,
        ]);
        DB::table('task_status')->insert([
            'description' => 'Atrasado',
            'active' => true,
        ]);
    }
}
