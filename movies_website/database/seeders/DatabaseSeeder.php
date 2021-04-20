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
        \App\Models\User::factory(3)->create();
        \App\Models\Tag::factory(3)->create();
        \App\Models\Genre::factory(3)->create();
        \App\Models\Producer::factory(3)->create();
        \App\Models\Actor::factory(3)->create();

    }
}
