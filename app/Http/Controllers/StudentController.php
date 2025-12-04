<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Importa o modelo Student

use App\Http\Requests\StudentRequest; // Importa o request customizado para validação

use App\Models\Classroom; // puxar dados do table cursos

class StudentController extends Controller
{
    /**
     * Exibir uma listagem dos recursos.
     * Lista paginada de alunos.
     */
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(5);
        return view('students.index', compact('students'));
    }

    /**
     * Exibir o formulário para criar um novo recurso.
     * Formulário para criar aluno.
     */
    public function create()
    {
        $classrooms = Classroom::orderBy('name')->get(); // busca todos os cursos ordenados por nome
        return view('students.create', compact('classrooms'));
    }

    /**
     * Armazenar um recurso recém-criado no banco de dados.
     * Salvar aluno com validação.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'Aluno(a) adicionado(a) com sucesso!');
    }

    /**
     * Exibir o recurso especificado.
     * Mostrar detalhes do aluno.
     */
    public function show(Student $student)
   {
        $student->load('classroom.course'); // carrega classroom e curso relacionados
        return view('students.show', compact('student'));
    }

    /**
     * Exibir o formulário para editar o recurso especificado.
     * Formulário de edição do aluno.
     */
    public function edit(Student $student)
    {
        $classrooms = Classroom::orderBy('name')->get();

        return view('students.edit', compact('student', 'classrooms'));
    }

    /**
     * Atualizar o recurso especificado no banco de dados.
     * Atualizar aluno com validação.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        return redirect()->route('students.index')->with('success', 'Aluno(a) editado(a) com sucesso!');
    }

    /**
     * Remover o recurso especificado do banco de dados.
     * Excluir aluno.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Aluno(a) excluído(a) com sucesso!');
    }
}
