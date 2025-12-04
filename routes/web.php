<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; //login

use App\Http\Controllers\CourseController;//Cursos
use App\Http\Controllers\ClassroomController; //Turmas
use App\Http\Controllers\StudentController; //Alunos


Route::middleware(['auth'])->group(function (){


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //menu

    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');


    //-------------

    //Cursos

    Route::resource('courses', CourseController::class); 


    //Turmas

    Route::resource('classrooms', ClassroomController::class); 


    //Alunos

    Route::resource('students', StudentController::class); 

});



//login rotas

Auth::routes();

