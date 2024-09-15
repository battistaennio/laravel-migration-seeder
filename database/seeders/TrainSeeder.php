<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->departure_station = $faker->randomElement(['Roma Termini', 'Napoli Centrale', 'Bologna Centrale', 'Milano Centrale', 'Bari Centrale']);
            $train->arrival_station = $faker->randomElement(['Roma Termini', 'Napoli Centrale', 'Bologna Centrale', 'Milano Centrale', 'Bari Centrale']);
            $train->departure_hour = $faker->time();
            $train->arrival_hour = $faker->time();
            $train->train_code = $faker->randomElement(['FR', 'IT']) . $faker->randomNumber(5, true);
            $train->carriages_number = $faker->numberBetween(10, 25);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
