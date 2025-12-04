<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Course;

class Classroom extends Model
{
    use HasFactory;

    // Adicione course_id ao fillable!
    protected $fillable = ['name', 'course_id'];

    // Relacionamento com Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
