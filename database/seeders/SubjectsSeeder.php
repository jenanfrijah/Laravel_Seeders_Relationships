<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('subjects')->insert([
    ['name' => 'Mathematics', 'description' => 'Math subject', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['name' => 'Physics', 'description' => 'Physics subject', 'user_id' => 2, 'created_at' => now(), 'updated_at' => now()],
]);

    }
}
