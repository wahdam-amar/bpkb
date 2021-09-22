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
        ]);

        if (App::environment('local')) {
            for ($i = 0; $i < 10; $i++) {
                $this->call(PersonSeeder::class);
            }
        }
    }
}
