<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PersonasController extends Controller
{

    public function index()
    {
        //pagina inicio
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }

    public function lista()
    {
        $datos = Personas::all();
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //formulario donde nososotros
        //agregamos datos

        return view('agregar');
    }


    public function store(Request $request)
    {
        //guardar datos en BBDD
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->apellido1 = $request->post('apellido1');
        $personas->apellido2 = $request->post('apellido2');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado");
    }


    public function show($id)
    {
        //obtener  un registro de tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }
    public function edit($id)
    {
        //trae datos que se editan y los pone en un form
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }
    public function update(Request $request, $id)
    {
        //actualiza losdatosen la BBDD
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->apellido1 = $request->post('apellido1');
        $personas->apellido2 = $request->post('apellido2');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado");
    }

    public function destroy($id)
    {
        $personas = Personas::find($id);
        $personas->delete();

        return redirect()->route("personas.index")->with("success", "Eliminado");
    }
}