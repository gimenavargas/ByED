<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    // Mostrar todos los alumnos
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    // Mostrar el formulario para crear un nuevo alumno
    public function create()
    {
        return view('alumnos.create');
    }

    // Guardar un nuevo alumno
    public function store(Request $request)
    {
        // Excluir el campo '_token' de los datos del formulario
        $data = $request->except('_token');
    
        // Guardar un nuevo alumno con los datos del formulario
        Alumno::create($data);
    
        // Redirigir a la lista de alumnos después de guardar el nuevo alumno
        return redirect()->route('alumnos.index');
    }
    // Mostrar un alumno específico
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }

    // Mostrar el formulario para editar un alumno
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }

    // Actualizar un alumno
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    // Eliminar un alumno
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
