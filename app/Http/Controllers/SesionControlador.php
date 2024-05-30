<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\IllinoisModel;
use App\Models\MarylandModel;
use App\Models\ColoradoModel;
use App\Models\florida;
use App\Models\texas;
use App\Models\newyork;
use App\Models\newjersey;
use App\Models\geico;
use App\Models\insrnewyork;

class SesionControlador extends Controller
{
	public function mostrar_iniciar_sesion()
	{
		return view('login');
	}

	public function iniciar_sesion(Request $request)
	{
		// Consultamos si el usuario consultado existe.
		$usuario = Usuario::select('*')->where('username', '=', $request->username)->first();
		if (!$usuario) 
			return redirect()->route('session.login')->with('error', '¡El usuario ingresado no se encuentra registrado!');

		// Válidamos que la contraseña sea correcta.
		if (!password_verify($request->password, $usuario->password)) 
			return redirect()->route('session.login')->with('error', '¡La contraseña ingresada es incorrecta!');

		// Válidamos que la contraseña sea correcta.
		if ($usuario->status != "A") 
			return redirect()->route('session.login')->with('error', '¡El usuario no se encuentra activo, hable con el administrador!');

		// Guardamos la sesión y limpiamos el token.
		Auth::login($usuario);
		$request->session()->regenerate();
		return redirect()->route('dashboard.index')->with('success', '¡Sesión iniciada exitosamente!');
	}

	public function cerrar_sesion(Request $request)
	{
		// Cerramos la sesión y limpiamos el token.
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('session.login')->with('success', '¡Sesión finalizada exitosamente!');
	}

	public function consultar($state, $id)
	{
		switch ($state) {
			case 'geico':
				$nuevo=$this->buscar_geico($id);
				$dirLogo="img/placas/geico.png";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'florida':
				$nuevo=$this->buscar_florida($id);
				$dirLogo="img/placas/floridaConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'new_jersey':
				$nuevo=$this->buscar_new_jersey($id);
				$dirLogo="img/placas/newjerseyConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'new_york':
				$nuevo=$this->buscar_new_york($id);
				$dirLogo="img/placas/newyorkConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'new_york_insr':
				$nuevo=$this->buscar_new_york_insr($id);
				$dirLogo="img/placas/illinoisConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'texas':
				$nuevo=$this->buscar_texas($id);
				$dirLogo="img/placas/texasConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
				break;
			case 'colorado':
				$nuevo=$this->buscar_colorado($id);
				$dirLogo="img/placas/coloradoConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
			break;
			case 'Illinois':
				$nuevo=$this->buscar_illinois($id);
				$dirLogo="img/placas/illinoisConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
			break;
			case 'maryland':
				$nuevo=$this->buscar_maryland($id);
				$dirLogo="img/placas/marylandConsulta.jpg";
				return view('resultado/busqueda',['nuevo'=>$nuevo,'dirLogo'=>$dirLogo]);
			break;
		}
		
	}

	public function buscar_geico($id)
	{
		$post = geico::select('*')->where('idgeico', '=', $id)->first();
		return $post;	
	}
	public function buscar_florida($id)
	{
		$post = florida::select('*')->where('idflorida', '=', $id)->first();
		return $post;	
	}
	public function buscar_new_jersey($id)
	{
		$post = newjersey::select('*')->where('idnewjersey', '=', $id)->first();
		return $post;	
	}
	public function buscar_new_york($id)
	{
		$post = newyork::select('*')->where('idnewyork', '=', $id)->first();
		return $post;	
	}
	public function buscar_new_york_insr($id)
	{
		$post = insrnewyork::select('*')->where('idinsrny', '=', $id)->first();
		return $post;	
	}
	public function buscar_texas($id)
	{
		$post = texas::select('*')->where('idtexas', '=', $id)->first();
		return $post;	
	}
	public function buscar_colorado($id)
	{
		$post = coloradoModel::select('*')->where('idcolorado', '=', $id)->first();
		return $post;	
	}
	public function buscar_illinois($id)
	{
		$post = IllinoisModel::select('*')->where('id_illinois', '=', $id)->first();
		return $post;	
	}
	public function buscar_maryland($id)
	{
		$post = MarylandModel::select('*')->where('id_maryland', '=', $id)->first();
		return $post;	
	}
}
