@extends('layouts.app')

@section('title', 'Detalhes da Turma')

@section('content')

<h1>Detalhes da Turma</h1>

<ul class="list-group mb-3"> 

    <li class="list-group-item">
        <strong>Nome:</strong> 
        {{ $classroom->name }}
    </li> 

    <li class="list-group-item">
        <strong>Curso:</strong> 
        {{ $classroom->course->name ?? 'Curso não encontrado' }}
    </li>
    
</ul>

<a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a> 

@endsection