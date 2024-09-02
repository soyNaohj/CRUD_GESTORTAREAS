<?php

namespace App\Http\Controllers;

use App\Models\Tarea; 
use Illuminate\Http\Request;

class TareaController extends Controller //JOHAN SERRATO ACOSTA
{
   /* public function index()
    {
       $tareas = Tarea::all(); // Obtén todas las tareas
          //return 'hola mundo';
        return view('tareas.index', compact('tareas'));
    }*/
    public function index(Request $request)
{
    // filtrado desde la solicitud
    $estado = $request->query('estado');

    // seleccionado un estado, filtra las tareas
    if ($estado) {
        $tareas = Tarea::where('completado', $estado)->get();
    } else {
        $tareas = Tarea::all();
    }

    return view('tareas.index', compact('tareas'));
}


    public function create()
    {
        return view('tareas.create'); // formulario para crear una nueva tarea
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'completado' => 'required|in:Pendiente,Completada',
           
        ]);

        // Crea una nueva tarea
        Tarea::create($validatedData);

        // Redirige a la lista de tareas
        return redirect()->route('tareas.index')->with('success', 'Tarea creada exitosamente.');
    }

    public function show(Tarea $tarea)
    {
        return view('tareas.show', compact('tarea')); // Muestra los detalles de una tarea
    }

    public function edit(Tarea $tarea)
    {
        return view('tareas.edit', compact('tarea')); // Muestra el formulario para editar una tarea
    }

    public function update(Request $request, Tarea $tarea)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'completado' => 'required|in:Pendiente,Completada',

        ]);

        // Actualiza la tarea
        $tarea->update($validatedData);

        // Redirige a la lista de tareas
        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada exitosamente.');
    }

    public function destroy(Tarea $tarea)
    {
        // Elimina la tarea
        $tarea->delete();

        // Redirige a la lista de tareas 
        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada exitosamente.');
    }


    public function toggleCompletado(Tarea $tarea)
    {
    
        if ($tarea->completado === 'Completada') {
            $tarea->completado = 'Pendiente';
        } else {
            $tarea->completado = 'Completada';
        }

        //dd($tarea->completado); 
        $tarea->save();
    
        return redirect()->back()->with('success', 'Estado de la tarea actualizado correctamente.');
    }


}