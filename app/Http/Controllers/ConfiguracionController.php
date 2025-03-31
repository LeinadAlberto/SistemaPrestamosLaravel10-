<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuraciones = Configuracion::all();

        return view('admin.configuraciones.index', compact('configuraciones'));

        /* dd($configuraciones); */
    }

    public function create()
    {
        return view('admin.configuraciones.create');
    }

    public function store(Request $request)
    {
        // $datos = request()->all();

        // return response()->json($datos);
        $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "direccion" => "required",
            "telefono" => "required",
            "email" => "required",
            "logo" => "required"
        ]);

        $configuracion = new Configuracion();

        $configuracion->nombre = $request->nombre;
        $configuracion->descripcion = $request->descripcion;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->email = $request->email;
        $configuracion->web = $request->web;
        $configuracion->moneda = $request->moneda;
        $configuracion->logo = $request->file("logo")->store("logos", "public");

        $configuracion->save();

        return redirect()->route("admin.configuracion.index")
            ->with("mensaje", "Registro exitoso")
            ->with("icono", "success");
    }

    public function show($id)
    {
        $configuracion = Configuracion::find($id);

        return view("admin.configuraciones.show", compact("configuracion"));
    }

    public function edit($id)
    {
        $configuracion = Configuracion::find($id);

        return view("admin.configuraciones.edit", compact("configuracion"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required",
            "descripcion" => "required",
            "direccion" => "required",
            "telefono" => "required",
            "email" => "required"
        ]);

        $configuracion = Configuracion::find($id);

        $configuracion->nombre = $request->nombre;
        $configuracion->descripcion = $request->descripcion;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->email = $request->email;
        $configuracion->web = $request->web;
        $configuracion->moneda = $request->moneda;

        if ($request->hasFile("logo")) {
            Storage::delete('public/' . $configuracion->logo); // Elimina la imagen anterior
            $configuracion->logo = $request->file("logo")->store("logos", "public");
        }

        $configuracion->save();

        return redirect()->route("admin.configuracion.index")
            ->with("mensaje", "Modificación exitosa")
            ->with("icono", "success");
    }

    public function destroy($id)
    {
        $configuracion = Configuracion::find($id);

        Storage::delete('public/' . $configuracion->logo); // Borra la imágen asociada a la configuración

        Configuracion::destroy($id);

        return redirect()->route("admin.configuracion.index")
        ->with("mensaje", "Registro eliminado exitosamente")
        ->with("icono", "success");
    }
}
