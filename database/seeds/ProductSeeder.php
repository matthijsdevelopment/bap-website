<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++){
            $product = new Product();
            $product->name = $faker->text(20);
            $product->description = $faker->text(50);
            $product->price = $faker->randomfloat(2,5,100);
            $product->pub_date = $faker->dateTimeBetween('-10 years', '+5years');
            $product->save();
        }
    }
}
