<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('books')->insert([
                'title' => $faker->title,
                'author' => $faker->name,
                'image' => $faker->imageUrl($width = 640, $height = 480, 'technics'),
                'description' => $faker->sentence(),
                'link' => 'N/A',
                'featured' => $faker->boolean($chanceOfGettingTrue = 50),
                'category_id' => rand(1, 30)
            ]);
        }
    }
}
