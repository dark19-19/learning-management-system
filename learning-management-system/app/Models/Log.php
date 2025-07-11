<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
    use SoftDeletes;
    protected $fillable = ['operation', 'user_id', 'course_id', 'lesson_id', 'enrollment_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function course() {
        return $this->belongsTo(Course::class);
    }
    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
    public function enrollment() {
        return $this->belongsTo(Enrollment::class);
    }
    public static function register(
        string $operation,
        int $user_id,
        int $course_id = null,
        int $lesson_id = null,
        int $enrollment_id = null
    ): void {
        Log::create([
            'operation' => $operation,
            'user_id' => $user_id,
            'course_id' => $course_id,
            'lesson_id' => $lesson_id,
            'enrollment_id' => $enrollment_id
        ]);
    }
}
