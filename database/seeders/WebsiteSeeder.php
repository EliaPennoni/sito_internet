<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Website;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Website::create([
                'title' => $faker->sentence(3), // Titolo casuale
                'description' => $faker->paragraph(), // Descrizione casuale
                'image_url' => $faker->imageUrl(640, 480, 'nature', true), // URL immagine fittizio
                'location' => $faker->city(), // Città casuale
                'taken_at' => $faker->date(), // Data casuale
                'category' => $faker->word(), // Categoria casuale
            ]);
        }
    }
}
