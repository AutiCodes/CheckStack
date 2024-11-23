<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Users\Models\User;
use Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'default@admin.nl',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([DefaultUserSeedSeeder::class]);
    }
}
