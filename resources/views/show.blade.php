@extends('layouts.app')

@section('content')
    <h1>Detalles del Alumno</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>ID:</th>
                <td>{{ $alumno->idAlumno }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $alumno->nombre }}</td>
            </tr>
            <tr>
                <th>Apellidos:</th>
                <td>{{ $alumno->apellidos }}</td>
            </tr>
            <tr>
                <th>Edad:</th>
                <td>{{ $alumno->edad }}</td>
            </tr>
            <tr>
                <th>Correo:</th>
                <td>{{ $alumno->correo }}</td>
            </tr>
            <tr>
                <th>Carrera:</th>
                <td>{{ $alumno->carrera }}</td>
            </tr>
            <tr>
                <th>Grado de Estudios:</th>
                <td>{{ $alumno->grado_estudios }}</td>
            </tr>
            <tr>
                <th>Contacto:</th>
                <td>{{ $alumno->contacto }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
