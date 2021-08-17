<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Super-Admin']);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'dev@admin.com',
            'password' => Hash::make('admindev')
        ]);

        $admin->assignRole($adminRole);
    }
}
