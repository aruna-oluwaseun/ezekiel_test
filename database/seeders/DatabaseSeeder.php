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
    public function run() : Void
    {
        \App\Models\User::factory(5)->hasListings(10)->create();
    }
}
