<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $_flights = new flight(); 
            $_flights->destination = $faker->word();
            $_flights->departure = $faker->city();
            $_flights->arrival = $faker->city();
            $_flights->dep_data = $faker->dateTime();
            $_flights->arr_data = $faker->dateTime();
            $_flights->price = $faker->numberBetween(0, 100);
            $_flights->save();
        }

    }
}
