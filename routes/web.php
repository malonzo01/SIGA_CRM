<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use iio\libmergepdf\Merger;
use Barryvdh\DomPDF\Facade\Pdf;

// Rutas cuando el usuario haya iniciado sesión.
Route::middleware('auth')->group(function () {
	// Gestión [Dashboard].
	Route::get('/', [App\Http\Controllers\PanelControlador::class, 'index'])->name('dashboard.index');

    //Rutas Administrativas
    Route::resource('/admin/users', UserController::class)->except('show')->names('admin.users');
    Route::resource('/admin/role', RoleController::class)->except('show')->names('admin.roles');
    Route::resource('/admin/dashboard', DashboardController::class)->names('admin.dashboard');

	// Gestión [Placas].
	Route::controller(GlobalController::class)->group(function () {
		Route::get('data/{id}', 'showqr');
		Route::get('/placa/{insurence}', 'generate_plate')->name('plate_car.generate');
		Route::post('/placa/generar/pdf/{insurence}', 'generate_pdf')->name('pdf.generate');
	});

	Route::controller(GlobalController::class)->group(function () {
		Route::post('/texas_nuevo_pdf', 'texas_nuevo_pdf');
		Route::post('/new_jersey_pdf', 'new_jersey_pdf');
		Route::post('/new_york_pdf', 'new_york_pdf');
		Route::post('/temp_new_york_insurance_pdf', 'temp_new_york_insurance_pdf');
		Route::post('/colorado_pdf', 'colorado_pdf');
		Route::post('/florida_pdf', 'florida_pdf');
	});

	// Gestión [Users].
	Route::controller(App\Http\Controllers\UsuarioControlador::class)->group(function () {
		Route::get('/usuarios', 'index')->name('users.index');
		Route::get('/usuarios/registrar', 'create')->name('users.create');
		Route::post('/usuarios', 'store')->name('users.store');
		Route::get('/usuarios/modificar/{id}', 'edit')->name('users.edit');
		Route::patch('/usuarios/{id}', 'update')->name('users.update');
	});

	// Gestión [Datos del perfil].
	Route::controller(App\Http\Controllers\PerfilControlador::class)->group(function () {
		Route::get('/perfil', 'profile')->name('profile.index');
		Route::post('/perfil', 'update')->name('profile.update');
		Route::post('/perfil/contrasenas', 'password')->name('profile.password');
	});

	// Cerrar sesión.

    Route::controller(App\Http\Controllers\SesionControlador::class)->group(function () {
		Route::get('/cerrar_sesion', 'cerrar_sesion')->name('session.logout');

	});
});

Route::get('/consultar/{state}/{id}', [App\Http\Controllers\SesionControlador::class, 'consultar'])->name('consultar');

// Rutas si el usuario no ha iniciado sesión.
Route::middleware('guest')->group(function () {
	Route::controller(App\Http\Controllers\SesionControlador::class)->group(function () {
		Route::get('/iniciar_sesion', 'mostrar_iniciar_sesion')->name('session.login');
		Route::post('/iniciar_sesion', 'iniciar_sesion')->name('session.login');
	});
});



