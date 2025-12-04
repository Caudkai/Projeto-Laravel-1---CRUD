@extends('layouts.app')

@section('title', 'Lista de Turmas')

@section('content')

    <h1>Lista de Turmas</h1>

    <a href="{{ route('classrooms.create') }}" class="btn btn-primary mb-3">Adicionar Turma</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Turma</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->name }}</td>
                    <td>{{ $classroom->course->name ?? '—' }}</td> {{-- Nome do curso relacionado --}}
                    <td>
                        <a href="{{ route('classrooms.show', $classroom) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('classrooms.edit', $classroom) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('classrooms.destroy', $classroom) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmar exclusão?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhuma turma cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>



    {{-- Links de paginação --}}
    {{ $classrooms->links() }}

        <a href="{{ route('menu') }}" class="btn btn-secondary">Voltar</a>


@endsection
