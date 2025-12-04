@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')

<h1>Detalhes do Aluno</h1>

<ul class="list-group mb-3"> 

    <li class="list-group-item">
        <strong>Nome:</strong> 
        {{ $student->name }}
    </li>

     <li class="list-group-item">
        <strong>Email:</strong> 
        {{ $student->email }}
    </li> 

    <li class="list-group-item">
        <strong>Turma:</strong> 
        {{ $student->classroom->name ?? 'Turma não encontrada' }}
    </li>

    <li class="list-group-item">
        <strong>Curso:</strong> 
        {{ $student->classroom->course->name ?? 'Curso não encontrado' }}
    </li>

    
</ul>

<a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a> 

@endsection