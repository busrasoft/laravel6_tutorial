<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            ['work_title' => 'software',
            'work_content' => 'hardware',
            'work_must' => 1],
            ['work_title' => 'software',
            'work_content' => 'hardware',
            'work_must' => 2],
            ['work_title' => 'software',
            'work_content' => 'hardware',
            'work_must' => 3],
        ]);
    }
}
