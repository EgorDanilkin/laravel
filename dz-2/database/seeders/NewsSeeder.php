<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {

        $statusesId = \DB::table('statuses')->pluck('id');
        $categoriesId = \DB::table('categories')->pluck('id');
        $sourcesId = \DB::table('sources')->pluck('id');

        for ($i = 0; $i < 20; $i++){
            \DB::table('news')
                ->insert([
                    'title' => $generator->text(50),
                    'content' => $generator->text(),
                    'status_id' => $generator->randomElement($statusesId),
                    'publish_date' => $generator->dateTime(),
                    'category_id' => $generator->randomElement($categoriesId),
                    'source_id' => $generator->randomElement($sourcesId),
                ]);
        }
    }
}
