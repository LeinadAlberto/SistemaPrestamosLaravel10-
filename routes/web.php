<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index2')->middleware('auth');

// Rutas para Configuraciones
Route::get('/admin/configuraciones', [App\Http\Controllers\ConfiguracionController::class, 'index'])
->name('admin.configuracion.index')->middleware('auth');
Route::get('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'create'])
->name('admin.configuracion.create')->middleware('auth');
Route::post('/admin/configuraciones/create', [App\Http\Controllers\ConfiguracionController::class, 'store'])
->name('admin.configuracion.store')->middleware('auth');
Route::get('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'show'])
->name('admin.configuracion.show')->middleware('auth');
Route::get('/admin/configuraciones/{id}/edit', [App\Http\Controllers\ConfiguracionController::class, 'edit'])
->name('admin.configuracion.edit')->middleware('auth');
Route::put('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'update'])
->name('admin.configuracion.update')->middleware('auth');
Route::delete('/admin/configuraciones/{id}', [App\Http\Controllers\ConfiguracionController::class, 'destroy'])
->name('admin.configuracion.destroy')->middleware('auth');

// Rutas para Roles
Route::get('/admin/roles', [App\Http\Controllers\RoleController::class, 'index'])
->name('admin.role.index')->middleware('auth');
Route::get('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'create'])
->name('admin.role.create')->middleware('auth');
Route::post('/admin/roles/create', [App\Http\Controllers\RoleController::class, 'store'])
->name('admin.role.store')->middleware('auth');
Route::get('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'show'])
->name('admin.role.show')->middleware('auth');
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])
->name('admin.role.edit')->middleware('auth');
Route::put('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'update'])
->name('admin.role.update')->middleware('auth');
Route::delete('/admin/roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])
->name('admin.role.destroy')->middleware('auth');

// Rutas para Usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])
->name('admin.usuario.index')->middleware('auth');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])
->name('admin.usuario.create')->middleware('auth');
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])
->name('admin.usuario.store')->middleware('auth');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])
->name('admin.usuario.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])
->name('admin.usuario.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])
->name('admin.usuario.update')->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])
->name('admin.usuario.destroy')->middleware('auth');

// Rutas para Clientes
Route::get('/admin/clientes', [App\Http\Controllers\ClienteController::class, 'index'])
->name('admin.cliente.index')->middleware('auth');
Route::get('/admin/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])
->name('admin.cliente.create')->middleware('auth');
Route::post('/admin/clientes/create', [App\Http\Controllers\ClienteController::class, 'store'])
->name('admin.cliente.store')->middleware('auth');
Route::get('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'show'])
->name('admin.cliente.show')->middleware('auth');
Route::get('/admin/clientes/{id}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])
->name('admin.cliente.edit')->middleware('auth');
Route::put('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'update'])
->name('admin.cliente.update')->middleware('auth');
Route::delete('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])
->name('admin.cliente.destroy')->middleware('auth');

// Rutas para Prestamos
Route::get('/admin/prestamos', [App\Http\Controllers\PrestamoController::class, 'index'])
->name('admin.prestamo.index')->middleware('auth');
Route::get('/admin/prestamos/create', [App\Http\Controllers\PrestamoController::class, 'create'])
->name('admin.prestamo.create')->middleware('auth');
Route::post('/admin/prestamos/create', [App\Http\Controllers\PrestamoController::class, 'store'])
->name('admin.prestamo.store')->middleware('auth');
Route::get('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'show'])
->name('admin.prestamo.show')->middleware('auth');
Route::get('/admin/prestamos/{id}/edit', [App\Http\Controllers\PrestamoController::class, 'edit'])
->name('admin.prestamo.edit')->middleware('auth');
Route::put('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'update'])
->name('admin.prestamo.update')->middleware('auth');
Route::delete('/admin/prestamos/{id}', [App\Http\Controllers\PrestamoController::class, 'destroy'])
->name('admin.prestamo.destroy')->middleware('auth');