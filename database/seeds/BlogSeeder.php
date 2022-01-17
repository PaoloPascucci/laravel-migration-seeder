<?php

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) { 
            $_blog= new Blog();
            $_blog->data_post= $faker->dateTime();
            $_blog->nome_post= $faker->sentence(1);
            $_blog->description_post= $faker->text(100);
            $_blog->save();
        }
    }
}
