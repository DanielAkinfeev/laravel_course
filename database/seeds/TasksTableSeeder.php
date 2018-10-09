<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
                [
                    'name' => 'Получение письма',
                    'counter' => 0,
                ],
                [
                    'name' => 'Отправка письма',
                    'counter' => 0,
                ],
                [
                    'name' => 'Получение посылки',
                    'counter' => 0,
                ],
                [
                    'name' => 'Отправка посылки',
                    'counter' => 0,
                ]
        ]
        );
    }
}
