<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return view("admin.clientes.index", compact("clientes"));
    }

    public function create()
    {
        return view("admin.clientes.create");
    }

    public function store(Request $request)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            "nro_documento" => "required|unique:clientes",
            "nombres" => "required",
            "apellidos" => "required",
            "fecha_nacimiento" => "required",
            "genero" => "required",
            "email" => "required",
            "celular" => "required",
            "ref_celular" => "required"
        ]);

        $cliente = new Cliente();

        $cliente->nro_documento = $request->nro_documento;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->genero = $request->genero;
        $cliente->email = $request->email;
        $cliente->celular = $request->celular;
        $cliente->ref_celular = $request->ref_celular;

        $cliente->save();

        return redirect()->route("admin.cliente.index")
            ->with("mensaje", "Registro exitoso")
            ->with("icono", "success"); 
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view("admin.clientes.show", compact("cliente"));
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view("admin.clientes.edit", compact("cliente"));
    }

    public function update(Request $request, $id)
    {
        /* $datos = request()->all();

        return response()->json($datos); */

        $request->validate([
            "nro_documento" => "required|unique:clientes,nro_documento," . $id,
            "nombres" => "required|string|max:255",
            "apellidos" => "required|string|max:255",
            "fecha_nacimiento" => "required|date",
            "genero" => "required|in:MASCULINO,FEMENINO",
            "email" => "required|email|max:255",
            "celular" => "required|string|max:20",
            "ref_celular" => "required|string|max:20"
        ]);

        $cliente = Cliente::find($id);

        $cliente->nro_documento = $request->nro_documento;
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->genero = $request->genero;
        $cliente->email = $request->email;
        $cliente->celular = $request->celular;
        $cliente->ref_celular = $request->ref_celular;

        $cliente->save();

        return redirect()->route("admin.cliente.index")
            ->with("mensaje", "Modificación exitosa")
            ->with("icono", "success"); 
    }

    public function destroy(Cliente $cliente)
    {
        
    }
}
