<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory as faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        Publisher::create([
            'name' => 'Publisher 1',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://www.tailorbrands.com/wp-content/uploads/2021/05/mansion-logo-300x300.png',
        ]);

        Publisher::create([
            'name' => 'Publisher 2',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://pixteller.com/images/tools/example/logo-example17-480.png',
        ]);

        Publisher::create([
            'name' => 'Publisher 3',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://www.rewindandcapture.com/wp-content/uploads/2015/05/Pied_Piper_Logo.jpg',
        ]);

        Publisher::create([
            'name' => 'Publisher 4',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://pentagram-production.imgix.net/3b6abdde-9ffb-4439-a571-6e96ac5ba8e7/emo_dcentertainment_02.jpg?rect=%2C%2C%2C&w=640&fm=jpg&q=70&auto=format',
        ]);

        Publisher::create([
            'name' => 'Publisher 5',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://seeklogo.com/images/C/captain-america-shield-logo-812247B23E-seeklogo.com.png',
        ]);

        Publisher::create([
            'name' => 'Publisher 6',
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'image' => 'https://png.pngtree.com/thumb_back/fh260/background/20190523/pngtree-neon-glowing-techno-lines-image_115289.jpg',
        ]);
    }
}
