<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // use the faker library to mock some data
        $faker = Faker::create();

        // create 30 articles
        foreach(range(1, 30) as $index) {
            Article::create([
                'title' => $faker->sentence(5),
                'content' => $faker->paragraph(6)
            ]);
        }

        // Model::reguard();
    }
}