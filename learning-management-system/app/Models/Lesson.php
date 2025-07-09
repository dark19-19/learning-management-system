<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'video', 'image', 'course_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
