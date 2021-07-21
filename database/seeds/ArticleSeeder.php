<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $article = new Article();
            $article->image = $faker->imageUrl(640, 480, 'article');
            $article->title = $faker->sentence();
            $article->content = $faker->text(400);
            $article->create_date = $faker->dateTimeThisYear();
            $article->author = $faker->name();
            $article->public = $faker->boolean();
            $article->save();
        }
    }
}