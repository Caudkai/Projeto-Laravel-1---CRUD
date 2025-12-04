<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via create() ou update() em massa
    protected $fillable = ['name','description'];

    protected $table = 'courses';

}
