<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
//use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Article::factory(150)->create();
        /*\App\Models\Article::factory(150)->create([
            'content'=>$this->faker->sentence(),
            'user_id'=>User::all()->random()->id,
        ]);*/
    }
}
