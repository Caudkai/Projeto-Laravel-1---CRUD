@extends('layouts.app') 
 
@section('title', 'Cadastrar Aluno') 
 
@section('content') 
 
    <h1>Cadastrar Aluno</h1> 
 
    {{-- Formulário POST para adicionar novo Aluno --}} 
    <form action="{{ route('students.store') }}" method="POST"> 
        @csrf {{-- Proteção contra CSRF --}} 
        @method('POST') {{-- Define método POST para inclusão --}} 
 
        <div class="mb-3"> 
            <label for="name" class="form-label">Nome do Aluno</label> 
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
            <label for="email" class="form-label">Email de Contato</label> 
            {{-- Campo texto --}} 
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" /> 
            {{-- Mensagem de erro --}} 
            @error('email') 
                <div class="invalid-feedback">
                    
                    {{ $message }}

                </div> 
            @enderror 
        </div>

        
    
        <div class="mb-3">
            <label for="classroom_id" class="form-label">Turma</label>
            <select name="classroom_id" id="classroom_id" class="form-select @error('classroom_id') is-invalid @enderror" required>
                <option value="">-- Selecione uma turma --</option>
                @foreach($classrooms as $classroom)
                    <option value="{{ $classroom->id }}" {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                        {{ $classroom->name }}
                    </option>
                @endforeach
            </select>
            @error('classroom_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
 
        <button type="submit" class="btn btn-success">Salvar</button>
        
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Voltar</a> 
    </form> 
 
@endsection