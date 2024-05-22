@extends('layouts.app')

@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno->idAlumno) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" value="{{ $alumno->apellidos }}">
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" class="form-control" value="{{ $alumno->edad }}">
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" class="form-control" value="{{ $alumno->correo }}">
        </div>
        <div class="form-group">
            <label for="carrera">Carrera:</label>
            <input type="text" name="carrera" class="form-control" value="{{ $alumno->carrera }}">
        </div>
        <div class="form-group">
            <label for="grado_estudios">Grado de Estudios:</label>
            <input type="text" name="grado_estudios" class="form-control" value="{{ $alumno->grado_estudios }}">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto:</label>
            <input type="text" name="contacto" class="form-control" value="{{ $alumno->contacto }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
