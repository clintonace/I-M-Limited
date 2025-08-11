<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insertOrIgnore([
                [
                    'name' => 'Admin User',
                    'code' => 3187,
                    'email' => 'iandm.admin@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('IandMmakeithappen2025!'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Candidate User',
                    'code' => 3188,
                    'email' => 'candidate@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}
