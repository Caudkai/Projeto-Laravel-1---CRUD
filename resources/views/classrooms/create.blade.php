@extends('layouts.app') 
 
@section('title', 'Criar Turma') 
 
@section('content') 
 
    <h1>Criar Turma</h1> 
 
    {{-- Formulário POST para adicionar novo Turma --}} 
    <form action="{{ route('classrooms.store') }}" method="POST"> 
        @csrf {{-- Proteção contra CSRF --}} 
        @method('POST') {{-- Define método POST para inclusão --}} 
 
        <div class="mb-3"> 
            <label for="name" class="form-label">Nome</label> 
            {{-- Campo texto --}} 
            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" /> 
            {{-- Mensagem de erro --}} 
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
                        <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>

                @error('course_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

 
        <button type="submit" class="btn btn-success">Salvar</button>
        
        <a href="{{ route('classrooms.index') }}" class="btn btn-secondary">Voltar</a> 
    </form> 
 
@endsection