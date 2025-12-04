@extends('layouts.app') 
 
@section('title', 'Editar Turma') 
 
@section('content') 
 
    <h1>Editar Turma</h1> 
 
    <form action="{{ route('classrooms.update', $classroom) }}" method="POST"> 
        @csrf {{-- Proteção contra CSRF --}} 
        @method('PUT') {{-- Define método PUT para atualização --}} 
 
        <div class="mb-3"> 
            <label for="name" class="form-label">Nome da Turma</label> 
            <input type="text" name="name" value="{{ old('name', $classroom->name) }}" class="form-control @error('name') is-invalid @enderror" id="name" /> 
            @error('name') 
                <div class="invalid-feedback">
                    
                    {{ $message }}
                
                </div> 
            @enderror 
        </div> 
 
        <div class="mb-3">
            <label for="course_id" class="form-label">Curso</label>
            <select name="course_id" id="course_id" class="form-select @error('course_id') is-invalid @enderror">
                <option value="">-- Selecione um curso --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ old('course_id', $classroom->course_id) == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
            @error('course_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Atualizar</button>
         
        <a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a> 
    </form> 
@endsection 