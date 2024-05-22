@extends('layouts.app')

@section('content')
    <h1>Agregar Nuevo Alumno</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">

    @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control">
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" class="form-control">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" class="form-control">
        </div>
        <div class="form-group">
            <label for="carrera">Carrera:</label>
            <input type="text" name="carrera" class="form-control">
        </div>
        <div class="form-group">
            <label for="grado_estudios">Grado de Estudios:</label>
            <input type="text" name="grado_estudios" class="form-control">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
