<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class PerfilControlador extends Controller
{
	public $roles = [
		"1" => "Administrador",
		"2" => "Vendedor",
		"3" => "Webmaster",
	];

	public function profile()
	{
		// Mostramos el perfil del usuario y cargamos los tipos de roles.
		return view('perfil', [
			'roles' => $this->roles,
		]);
	}

	public function update(Request $request)
	{
		// Consultamos los datos del usuario y lo actualizamos.
		$perfil = Usuario::find(auth()->user()->iduser);
		$perfil->name_ = $request->nombre;
		$perfil->phone_ = $request->telefono;
		$perfil->email_ = $request->correo;
		$perfil->username = $request->usuario;
		$perfil->save();

		// Retornamos información al usuario.
		$response = ["status" => "success", "response" => ["message" => "¡Datos actualizado exitosamente!"]];
		return response($response, 200)->header('Content-Type', 'text/json');
	}

	public function password(Request $request)
	{
		// Consultamos los datos del usuario y lo actualizamos.
		$perfil = Usuario::find(auth()->user()->iduser);

		// Verificamos que la contraseña actual ingresada coincida con la contraseña de la base de datos.
		if (!password_verify($request->contrasena3, $perfil->password)) {
			$response = ["status" => "error", "response" => ["message" => "¡La contraseña ingresada es incorrecta!"]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Actualizamos la contraseña.
		$perfil->password = password_hash($request->contrasena1, PASSWORD_DEFAULT);
		$perfil->save();

		// Retornamos información al usuario.
		$response = ["status" => "success", "response" => ["message" => "¡Contraseña actualizada exitosamente!"]];
		return response($response, 200)->header('Content-Type', 'text/json');
	}
}
