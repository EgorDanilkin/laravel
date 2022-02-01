<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 4; $i++){
            \DB::table('categories')
                ->insert([
                    'title' => $generator->text(30),
                ]);
        }
    }
}
