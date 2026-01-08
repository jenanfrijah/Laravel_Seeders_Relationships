<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('reviews')->insert([
    ['comment' => 'Excellent lesson', 'rating' => 5, 'booking_id' => 1, 'student_id' => 1, 'teacher_id' => 2, 'created_at' => now(), 'updated_at' => now()],
    ['comment' => 'Good explanations', 'rating' => 4, 'booking_id' => 2, 'student_id' => 3, 'teacher_id' => 2, 'created_at' => now(), 'updated_at' => now()],
]);

    }
}
