@extends('layouts.app')

@section('content')
    <h1>Lista de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Agregar Alumno</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Correo</th>
                <th>Carrera</th>
                <th>Grado de Estudios</th>
                <th>Contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->idAlumno }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->carrera }}</td>
                    <td>{{ $alumno->grado_estudios }}</td>
                    <td>{{ $alumno->contacto }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->idAlumno) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->idAlumno) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->idAlumno) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

