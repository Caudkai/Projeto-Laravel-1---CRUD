<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Classroom;

class Student extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via create() ou update() em massa
    protected $fillable = ['name','email', 'classroom_id'];

      // Relacionamento com Course
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}

