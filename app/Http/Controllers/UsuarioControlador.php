<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class UsuarioControlador extends Controller
{
	public $roles = [
		"1" => "Administrador",
		"2" => "Vendedor",
		"3" => "Webmaster",
	];

	// Display a listing of the resource.
	public function index()
	{
		$usuarios = Usuario::all();
		return view('usuarios', [
			'roles'	=> $this->roles,
			'usuarios' => $usuarios
		]);
	}

	// Show the form for creating a new resource.
	public function create()
	{
	}

	// Store a newly created resource in storage.
	public function store(Request $request)
	{
		// Realizamos la válidaciones [Manualmente].
		$msgerror = "";
		if ($request->nombre == "") {
			$msgerror = "Ingrese el nombre del usuario";
		} else if (strlen($request->nombre) < 10 or strlen($request->nombre) > 60) {
			$msgerror = "El nombre debe tener un mínimo de 10 caracteres y un máximo de 60 caracteres";
		} else if ($request->telefono == "") {
			$msgerror = "Ingrese el teléfono del usuario";
		} else if ($request->correo == "") {
			$msgerror = "Ingrese el correo electrónico del usuario";
		} else if (!filter_var($request->correo, FILTER_VALIDATE_EMAIL)) {
			$msgerror = "Ingrese un correo electrónico válido";
		} else if ($request->rol == "") {
			$msgerror = "Seleccione un rol para el usuario";
		}

		// Verificamos si ocurrió un error en las validaciones.
		if ($msgerror != "") {
			$response = ["status" => "error", "response" => ["message" => $msgerror, "data" => []]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Verificamos si ya se encuentra registrado en la base de datos.
		$isset = Usuario::select('iduser')
			->where('name_', '=', $request->nombre)
			->first();
		if ($isset) {
			$response = ["status" => "warning", "response" => ["message" => "¡Este usuario ya se encuentra registrado!", "data" => []]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Generamos un usuario aleatorio.
		$username = explode(' ', $request->nombre)[0] . rand(100000, 999999);

		// Registramos un nuevo usuario.
		$usuario = new Usuario();
		$usuario->name_ = $request->nombre;
		$usuario->phone_ = $request->telefono;
		$usuario->email_ = $request->correo;
		$usuario->rol_ = $request->rol;
		$usuario->username = $username;
		$usuario->password = password_hash($username, PASSWORD_DEFAULT);
		$usuario->save();

		// Retornamos el mensaje de exito.
		$response = ["status" => "success", "response" => ["message" => "¡Usuario registrado exitosamente!", "data" => []]];
		return response($response, 200)->header('Content-Type', 'text/json');
	}

	// Display the specified resource.
	public function show(string $id)
	{
	}

	// Show the form for editing the specified resource.
	public function edit(string $id)
	{
		$usuario = Usuario::find($id);
		if (!$usuario) {
			$response = ["status" => "error", "response" => ["message" => "¡Este usuario no fue encontrada!", "data" => []]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Retornamos el mensaje de exito.
		$response = ["status" => "success", "response" => ["message" => "¡Consulta exitosa!", "data" => $usuario]];
		return response($response, 200)->header('Content-Type', 'text/json');
	}

	// Update the specified resource in storage.
	public function update(Request $request, string $id)
	{
		// Realizamos la válidaciones [Manualmente].
		$msgerror = "";
		if ($request->nombre == "") {
			$msgerror = "Ingrese el nombre del usuario";
		} else if (strlen($request->nombre) < 10 or strlen($request->nombre) > 60) {
			$msgerror = "El nombre debe tener un mínimo de 10 caracteres y un máximo de 60 caracteres";
		} else if ($request->telefono == "") {
			$msgerror = "Ingrese el teléfono del usuario";
		} else if ($request->correo == "") {
			$msgerror = "Ingrese el correo electrónico del usuario";
		} else if (!filter_var($request->correo, FILTER_VALIDATE_EMAIL)) {
			$msgerror = "Ingrese un correo electrónico válido";
		} else if ($request->rol == "") {
			$msgerror = "Seleccione un rol para el usuario";
		}

		// Verificamos si ocurrió un error en las validaciones.
		if ($msgerror != "") {
			$response = ["status" => "error", "response" => ["message" => $msgerror, "data" => []]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Verificamos si ya se encuentra registrado en la base de datos.
		$isset = Usuario::select('iduser')
			->where('name_', '=', $request->nombre)
			->where('iduser', '!=', $id)
			->first();
		if ($isset) {
			$response = ["status" => "warning", "response" => ["message" => "¡Este usuario ya se encuentra registrado!", "data" => []]];
			return response($response, 200)->header('Content-Type', 'text/json');
		}

		// Registramos un nuevo usuario.
		$usuario = Usuario::find($id);
		$usuario->name_ = $request->nombre;
		$usuario->phone_ = $request->telefono;
		$usuario->email_ = $request->correo;
		$usuario->rol_ = $request->rol;
		$usuario->save();

		// Retornamos el mensaje de exito.
		$response = ["status" => "success", "response" => ["message" => "¡Usuario modificado exitosamente!", "data" => []]];
		return response($response, 200)->header('Content-Type', 'text/json');
	}

	// Remove the specified resource from storage.
	public function destroy(string $id)
	{
	}

	// Update status.
	public function status(string $id)
	{
		// Consultamos la marca a cambiar de estatus.
		$marca = Usuario::find($id);
		$marca->status = $marca->status != "A" ? "A" : "I";
		$marca->save();

		// Retornamos el mensaje de exito.
		return json_encode(["status" => "success", "response" => ["message" => "¡Estatus actualizado exitosamente!", "data" => []]]);
	}
}
