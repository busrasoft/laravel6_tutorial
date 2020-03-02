<?php

use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
                'mushroom' => 'fqefqe',
                'parsley' => 'fqefqe',
                'lettuce' => 'fqefqe',
                'size' => '1',
            ]);
    }
}
