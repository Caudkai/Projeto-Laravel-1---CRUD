@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')

    <h1>Lista de Alunos</h1>

    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Adicionar Aluno</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Aluno</th>
                <th>Turma</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->classroom->name ?? '—' }}</td> {{-- Nome da turma relacionada --}}
                    <td>{{ $student->classroom->course->name ?? '—' }}</td> {{-- Nome do curso relacionado a turma --}}
                    <td>
                        <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmar exclusão?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum aluno cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>




    {{-- Links de paginação --}}
    {{ $students->links() }}

        <a href="{{ route('menu') }}" class="btn btn-secondary">Voltar</a>


@endsection
