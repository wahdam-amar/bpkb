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
        $userRole = Role::create(['name' => 'User']);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@dev.com',
            'password' => Hash::make('admindev'),
        ]);
        $user = \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@dev.com',
            'password' => Hash::make('userdev'),
        ]);

        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
    }
}
