<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 10; $i++) {

            $newWine = new Wine();

            $newWine->name = $faker->word();
            $newWine->year = $faker->numberBetween(1800, 2023);
            // $newWine->winery = $faker->company();
            $newWine->color = $faker->randomElement(['bianco', 'rosso', 'rosè']);
            $newWine->type = $faker->randomElement(['fermo', 'frizzante', 'passito']);
            $newWine->gradation = $faker->randomFloat(2, 6, 30);
            $newWine->extract = $faker->randomFloat(2, 9, 50);
            $newWine->acidity = $faker->randomFloat(2, 4, 10);

            $newWine->save();

        }

    }
}
