<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();

        return view ('admin.prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        $clientes = Cliente::all();

        return view('admin.prestamos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        
    }

    public function show(Prestamo $prestamo)
    {
        
    }

    public function edit(Prestamo $prestamo)
    {
        
    }

    public function update(Request $request, Prestamo $prestamo)
    {
        
    }

    public function destroy(Prestamo $prestamo)
    {
        
    }
}
