<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //     \App\Models\User::factory()->create();

    //     \App\Models\User::factory()->create([
    //         'name' => 'admin',
    //         'email' => 'admin@nobleguards.com',
    //         'password' => bcrypt('noble@8833')
    //     ]);
    // }

    $this->call(UserTableSeeder::class);
    }
}
