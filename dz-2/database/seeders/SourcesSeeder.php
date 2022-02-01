<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 4; $i++){
            \DB::table('sources')
                ->insert([
                    'title' => $generator->text(30),
                    'url' => $generator->url(),
                ]);
        }
    }
}
