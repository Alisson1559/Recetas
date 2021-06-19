@extends('layouts.app')

@section('botones')
    <a class="btn btn-primary" href="{{router('recetas.create')}}">Crear Recetas</a>
@endsection

@section('content')
    <h2 class="text-center mb-3">Administrar Recetas</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                <th scole='col'>Nombre</th>
                <th scole='col'>Categoria</th>
                <th scole='col'>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection


