<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()

    {
        $personas = Persona::all();
        return response()->json([
            "success" => true,
            "message" => "Lista de Personas ",
            "data" => $personas
        ]);
    }

    public function show($id)
    {
        $persona = Persona::find($id);
        if (is_null($persona)) {
            return $this->sendError('Persona no encontrada.');
        }
        return response()->json([
            "success" => true,
            "message" => "Persona encontrada exitosamente.",
            "data" => $persona
        ]);
    }
}
