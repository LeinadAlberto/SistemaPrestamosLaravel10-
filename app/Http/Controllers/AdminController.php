<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\User;
use App\Models\Cliente;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $total_configuraciones = Configuracion::count();
        $total_roles = Role::count();
        $total_usuarios = User::count();
        $total_clientes = Cliente::count();

        return view("admin.index", compact( 'total_configuraciones',
                                            'total_roles',
                                            'total_usuarios',
                                            'total_clientes'));
        
    }
}
