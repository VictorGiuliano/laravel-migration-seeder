<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->binary = $faker->numberBetween(0, 20);
            $new_train->seat = $faker->randomNumber(3, true);
            $new_train->station_departure = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrive_time = $faker->time();
            $new_train->train_code = $faker->isbn10();
            $new_train->carriages = $faker->numberBetween(0, 20);
            $new_train->in_time = $faker->boolean();
            $new_train->is_delete = $faker->boolean();
            $new_train->save();
        }
    }
}
