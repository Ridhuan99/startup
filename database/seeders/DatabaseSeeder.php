<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
          'name' => 'Admin1',
          'email' => 'admin1@gmail.com',
          'email_verified_at' => now(),
          'password' => Hash::make('secret123'),
          'role' => 'admin',
        ]);

        DB::table('users')->insert([
          'name' => 'Seller1',
          'email' => 'seller1@gmail.com',
          'email_verified_at' => now(),
          'password' => Hash::make('secret123'),
          'role' => 'seller',
        ]);

        DB::table('users')->insert([
          'name' => 'Buyer1',
          'email' => 'buyer1@gmail.com',
          'email_verified_at' => now(),
          'password' => Hash::make('secret123'),
          'role' => 'buyer',
        ]);
    }
}
