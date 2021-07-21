<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $product = new Product();
            $product->name = $faker->word();
            $product->image = $faker->imageUrl(640, 480, 'Products', true, $product->name);
            $product->description = $faker->text();
            $product->price = $faker->randomFloat(2, 10,100);
            $product->qty = $faker->randomNumber(1,1000);
            $product->save();
        }
    }
}