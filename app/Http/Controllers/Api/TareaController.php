<?php

namespace App\Http\Controllers\Api;
use App\Models\Tarea;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::latest()->get();

        return response()->json($tareas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);

        $tarea = Tarea::create($datos);

        return response()->json($tarea, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        return response()->json($tarea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        $datos = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable',
        ]);

        $tarea->update($datos);

        return response()->json($tarea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return response()->json([
            'mensaje' => 'Tarea eliminada correctamente',
        ]);
    }
}
