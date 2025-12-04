<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom; // Corrigido para usar o modelo Classroom

use App\Http\Requests\ClassroomRequest; // Request customizado para validação

use App\Models\Course; // puxar dados do table cursos

class ClassroomController extends Controller
{
    /**
     * Exibir uma listagem dos recursos.
     * Lista paginada de turmas.
     */
    public function index()
    {
        // Carrega turmas com curso relacionado para usar na view
        $classrooms = Classroom::with('course')->orderBy('created_at', 'desc')->paginate(5);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Exibir o formulário para criar um novo recurso.
     * Formulário para criar turma.
     */
    public function create()
    {
        $courses = Course::orderBy('name')->get(); // busca todos os cursos ordenados por nome
        return view('classrooms.create', compact('courses'));
    }

    /**
     * Armazenar um recurso recém-criado no banco de dados.
     * Salvar turma com validação.
     */
    public function store(ClassroomRequest $request)
    {
        Classroom::create($request->validated());
        return redirect()->route('classrooms.index')->with('success', 'Turma criada com sucesso!');
    }

    /**
     * Exibir o recurso especificado.
     * Mostrar detalhes da turma.
     */
    public function show(Classroom $classroom)
    {
        return view('classrooms.show', compact('classroom'));
    }

    /**
     * Exibir o formulário para editar o recurso especificado.
     * Formulário de edição da turma.
     */
    public function edit(Classroom $classroom)
    {
        $courses = Course::orderBy('name')->get(); // precisa enviar cursos para popular select
        return view('classrooms.edit', compact('classroom', 'courses'));
    }

    /**
     * Atualizar o recurso especificado no banco de dados.
     * Atualizar turma com validação.
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update($request->validated());
        return redirect()->route('classrooms.index')->with('success', 'Turma atualizada com sucesso!');
    }

    /**
     * Remover o recurso especificado do banco de dados.
     * Excluir turma.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success', 'Turma excluída com sucesso!');
    }
}
