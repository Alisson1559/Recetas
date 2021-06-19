@extends('layouts.app')

@section('botones')
    <a class="btn btn-primary" href="{{'recetas.index'}}">Volver</a>
@endsection

@section('content')
<h2 class="text-center mb-3">Crear nueva receta </h2>

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <form method="POST" action={{router('recetas.store')}}>
        @csrf
        <div class="form-group"> 
            <label for="nombre">Nombre Receta</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Receta">
        </div>

        <div class="form-group">
            <input type="sumit" class="btn-btn-primary" value="Agregar Receta">
        </div>

        </form>
    </div>
</div>
@endsection