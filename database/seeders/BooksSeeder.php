<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        for($i = 1; $i <= 28; $i++) {
            Book::create([
                'publisher_id' => rand(1,6),
                'title' => $faker->words(rand(1, 3), true),
                'author' => $faker->name(),
                'year' => $faker->year($max = 'now'),
                'synopsis' => $faker->sentence(rand(15, 20), true),
                'image' => $faker->imageUrl(432, 691, 'Book Cover', true),
            ]);
        }
    }
}
