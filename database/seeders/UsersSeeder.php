<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'ahmad@example.com'],
            [
                'name' => 'Ali Ahmad',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'noha@example.com'],
            [
                'name' => 'Sara Khalil',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'taha@example.com'],
            [
                'name' => 'Omar Yasin',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
