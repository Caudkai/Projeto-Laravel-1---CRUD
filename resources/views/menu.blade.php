@extends('layouts.app')

@section('title', 'Menu Principal')

{{-- Seção de estilos CSS --}}
@section('styles')
<style>
    .img-hover {
        transition: transform 0.3s ease; /* Transição suave */
        cursor: pointer;
    }

    .img-hover:hover {
        transform: scale(1.1); /* Aumenta 10% ao passar o mouse */
        z-index: 10; /* Fica acima dos outros elementos */
    }
</style>
@endsection

@section('content')

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">NavClass</a>
        </div>
    </nav>

    <div class="opacity-50">

        <img src="..." class="img-fluid" alt="...">

    </div>

    <br>

    <h1 class="mb-4 text-center">Menu Principal</h1>


    <br><br>


    <div class="container text-center">
  <div class="row">
    <div class="col">

        <div class="card" style="width: 18rem;">
            <a href="{{ route('students.index') }}">
                <img src="https://static.thenounproject.com/png/209914-200.png" class="card-img-top img-hover" alt="Gerenciar Alunos">
            </a>
            <div class="card-body">
                <h5 class="card-title text-center">Gerenciar Alunos</h5>
            </div>
        </div>

    </div>
    <div class="col">
      
        <div class="card" style="width: 18rem;">
            <a href="{{ route('courses.index') }}">
                <img src="https://cdn-icons-png.flaticon.com/512/4762/4762232.png" class="card-img-top img-hover" alt="Gerenciar Cursos">
            </a>
            <div class="card-body">
                <h5 class="card-title text-center">Gerenciar Cursos</h5>
            </div>
        </div>

    </div>
    <div class="col">
      
        <div class="card" style="width: 18rem;">
            <a href="{{ route('classrooms.index') }}">
                <img src="https://static.thenounproject.com/png/117741-200.png" class="card-img-top img-hover" alt="Gerenciar Turmas">
            </a>
            <div class="card-body">
                <h5 class="card-title text-center">Gerenciar Turmas</h5>
            </div>
        </div>

    </div>
  </div>


  <br><br><br>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Termos
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Termos de Uso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        O site a seguir foi criado com o intuito de entreterimento e aprendizagem
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
