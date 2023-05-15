<?php

namespace Database\Seeders;

use App\Models\Vineyard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class VineyardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $newVineyard = new Vineyard();

            $newVineyard->name = $faker->company();
            $newVineyard->desc = $faker->paragraph(1);

            $newVineyard->save();

        }
    }
}
