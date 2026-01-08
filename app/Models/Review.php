<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function booking() {
    return $this->belongsTo(Booking::class);
}
public function student() {
    return $this->belongsTo(User::class, 'student_id');
}

public function teacher() {
    return $this->belongsTo(User::class, 'teacher_id');
}
}
