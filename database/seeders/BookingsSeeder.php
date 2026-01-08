<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('bookings')->insert([
    ['booking_date' => '2026-01-10', 'location' => 'Room 101', 'student_id' => 1, 'teacher_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['booking_date' => '2026-01-12', 'location' => 'Room 102', 'student_id' => 3, 'teacher_id' => 2, 'created_at' => now(), 'updated_at' => now()],
]);

    }
}
