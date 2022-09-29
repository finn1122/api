<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(150)->create();
         \App\Models\Movie::factory(150)->create();
         \App\Models\Turn::factory(150)->create();
         \App\Models\MoviesTurn::factory(150)->create();


    }
}
