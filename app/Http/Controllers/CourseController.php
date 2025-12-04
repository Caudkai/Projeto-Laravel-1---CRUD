<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Models\Course;                
// Model Course 

use App\Http\Requests\CourseRequest; // Request customizado para validação 
class CourseController extends Controller 
{
    /**
     * Exibir uma listagem dos recursos.
     * Lista paginada de cursos.
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'desc')->paginate(5);
        return view('courses.index', compact('courses'));
    }

    /**
     * Exibir o formulário para criar um novo recurso.
     * Formulário para criar curso.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Armazenar um recurso recém-criado no banco de dados.
     * Salvar curso com validação.
     */
    public function store(CourseRequest $request)
    {
        Course::create($request->validated());
        return redirect()->route('courses.index')->with('success', 'Curso criado com sucesso!');
    }

    /**
     * Exibir o recurso especificado.
     * Mostrar detalhes do curso.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Exibir o formulário para editar o recurso especificado.
     * Formulário de edição do curso.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Atualizar o recurso especificado no banco de dados.
     * Atualizar curso com validação.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route(route: 'courses.index')->with(key: 'success', value: 'Curso atualizado com sucesso!');
    }

    /**
     * Remover o recurso especificado do banco de dados.
     * Excluir curso.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route(route: 'courses.index')->with(key: 'success', value: 'Curso excluído com sucesso!');
    }
}