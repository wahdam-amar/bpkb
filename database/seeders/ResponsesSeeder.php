<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = database_path('seeders\data_latih.sql');

        $fileExists = File::exists($file);

        if ($fileExists) {
            DB::unprepared(File::get($file));
        }


        // dd($raw);

        // DB::connection()->getPdo()->exec(asset('dump/data_train.sql'));
    }
}
