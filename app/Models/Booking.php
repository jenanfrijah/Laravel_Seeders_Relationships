<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function student() {
    return $this->belongsTo(User::class, 'student_id');
}

public function teacher() {
    return $this->belongsTo(User::class, 'teacher_id');
}
public function review() {
    return $this->hasOne(Review::class);
}
}
