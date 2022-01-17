<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $_flights = new flight(); 
            $_flights->destination = $faker;
            $_flights->departure = $faker;
            $_flights->arrival = $faker;
            $_flights->dep_data = $faker;
            $_flights->arr_data = $faker;
            $_flights->save();
        }

    }
}
