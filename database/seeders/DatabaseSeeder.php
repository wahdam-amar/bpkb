<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AdminSeeder::class,
            MenuSeeder::class,
            StopWordSeeder::class,
            ResponsesSeeder::class,
        ]);

        if (App::environment('local')) {
            $this->call(PersonSeeder::class);
        }
    }
}
