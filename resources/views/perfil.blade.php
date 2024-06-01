@extends('layouts.dashboard')

@section('content')
<div class="row align-items-center mb-3">
	<div class="col-6 text-start">
		<h3 class="text-uppercase my-1"><i class="fas fa-user"></i> Perfil</h3>
	</div>
</div>

<div class="row">
	<div class="col-12 col-md-4">
		<div class="card">
			<div class="card-body text-center p-4">
				<img src="{{url('img/user-default.jpg')}}" class="w-50 rounded-circle border mb-4">
				<div class="info">
					<div class="title text-uppercase" style="font-size: 1.2rem;">
						<b>{{auth()->user()->name}}</b>
					</div>
					<div class="desc fw-bold text-uppercase" style="font-size: .7rem;"><i class="fas fa-user"></i> {{auth()->user()->username}}</div>
					<div class="desc fw-bold text-uppercase" style="font-size: .7rem;"><i class="fas fa-address-card"></i> Rol: {{$roles[auth()->user()->rol_]}}</div>
					<div class="desc fw-bold" style="font-size: .7rem;"><i class="fas fa-phone"></i> {{auth()->user()->phone_}}</div>
					<div class="desc fw-bold" style="font-size: .7rem;"><i class="fas fa-envelope"></i> {{auth()->user()->email_}}</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12 col-md-8">
		<!-- Pestañas -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="datos_personales_tab" data-bs-toggle="tab" data-bs-target="#datos_personales_tab_pane" type="button" role="tab" aria-controls="datos_personales_tab_pane" aria-selected="true">Datos perfil</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="seguridad_tab" data-bs-toggle="tab" data-bs-target="#seguridad_tab_pane" type="button" role="tab" aria-controls="seguridad_tab_pane" aria-selected="false">Seguridad</button>
			</li>
		</ul>

		<!-- Contenido -->
		<div class="tab-content bg-white" id="myTabContent">
			<div class="tab-pane fade show active" id="datos_personales_tab_pane" role="tabpanel" aria-labelledby="datos_personales_tab" tabindex="0">
				<div class="card">
					<div class="card-body p-4">
						<h4>Datos de la cuenta</h4>
						<form name="formulario_perfil" id="formulario_perfil" method="post" action="{{route('profile.update')}}">
							@csrf
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="nombre">Nombre completo</label>
										<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre completo" value="{{auth()->user()->name}}">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="telefono">telefono</label>
										<input type="text" class="form-control" name="telefono" id="telefono" placeholder="ingrese el teléfono" value="{{auth()->user()->phone_}}">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="correo">Correo electrónico</label>
										<input type="text" class="form-control" name="correo" id="correo" placeholder="Ingrese el correo electrónico" value="{{auth()->user()->email_}}">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="usuario">Nombre de usuario</label>
										<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese el correo electrónico" value="{{auth()->user()->username}}">
									</div>
								</div>
							</div>
							<div class="text-end">
								<button type="submit" class="btn btn-primary" id="btn_guardar_dp"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="seguridad_tab_pane" role="tabpanel" aria-labelledby="seguridad_tab" tabindex="0">
				<div class="card">
					<div class="card-body p-4">
						<h4>Seguridad</h4>
						<form name="formulario_seguridad" id="formulario_seguridad" method="post" action="{{route('profile.password')}}">
							@csrf
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="contrasena1">Nueva contraseña</label>
										<input type="password" class="form-control" name="contrasena1" id="contrasena1" placeholder="Ingrese la nueva contraseña" value="{{auth()->user()->iasd}}">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="contrasena2">Repetir la contraseña</label>
										<input type="password" class="form-control" name="contrasena2" id="contrasena2" placeholder="Repita la nueva contraseña" value="{{auth()->user()->iasd}}">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group mb-3">
										<label for="contrasena3">Contraseña actual</label>
										<input type="password" class="form-control" name="contrasena3" id="contrasena3" placeholder="Ingrese su contraseña actual" value="{{auth()->user()->iasd}}">
									</div>
								</div>
							</div>
							<div class="text-end">
								<button type="submit" class="btn btn-primary" id="btn_guardar_pw"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	const regex_correo = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
	const formulario_perfil = document.getElementById("formulario_perfil");
	formulario_perfil.addEventListener("submit", function(e) {
		e.preventDefault();

		// Elementos
		const nombre = document.getElementById("nombre");
		const telefono = document.getElementById("telefono");
		const correo = document.getElementById("correo");
		const usuario = document.getElementById("usuario");
		const boton = document.getElementById("btn_guardar_dp");

		// Validamos los campos.
		if (nombre.value == "") {
			alert('¡Ingrese su nombre completo!');
			nombre.focus();
		} else if (nombre.value.length < 8) {
			alert('¡El nombre debe tener al menos 8 caracteres!');
			nombre.focus();
		} else if (telefono.value == "") {
			alert("¡Ingrese su número de teléfono!");
			telefono.focus();
		} else if (correo.value == "") {
			alert("¡Ingrese su correo electrónico!");
			correo.focus();
		} else if (!regex_correo.test(correo.value)) {
			alert("¡Ingrese un correo electrónico válido!");
			correo.focus();
		} else if (usuario.value == "") {
			alert("¡Ingrese un nombre de usuario!");
			usuario.focus();
		} else {
			boton.setAttribute("disabled", true);
			fetch(formulario_perfil.getAttribute('action'), {
				method: 'post',
				body: new FormData(formulario_perfil),
			}).then(response => response.json()).then(data => {
				boton.removeAttribute("disabled");
				if (data.status != "success") {
					alert('¡Ocurrió un error, intente nuevamente!');
					return;
				}

				// Si todo funcionó correctamente, mandamos mensaje de exito al usuario y recargamos la página.
				alert(data.response.message);
				location.reload();
			});
		}
	});

	const formulario_seguridad = document.getElementById("formulario_seguridad");
	formulario_seguridad.addEventListener("submit", function(e) {
		e.preventDefault();

		// Capturamos los elementos del formulario.
		const contrasena1 = document.getElementById("contrasena1");
		const contrasena2 = document.getElementById("contrasena2");
		const contrasena3 = document.getElementById("contrasena3");
		const boton = document.getElementById("btn_guardar_pw");

		// Validamos los campos.
		if (contrasena1.value == "") {
			alert("¡Ingrese la nueva contraseña!");
			contrasena1.focus();
		} else if (contrasena1.value.length < 6) {
			alert("¡La contraseña debe tener al menos 6 caracteres!");
			contrasena1.focus();
		} else if (contrasena2.value == "") {
			alert("¡Repita la contraseña para confirmar!");
			contrasena2.focus();
		} else if (contrasena1.value != contrasena2.value) {
			alert("¡La contraseñas no coinciden!");
			contrasena2.focus();
		} else if (contrasena3.value == "") {
			alert("¡Ingrese su contraseña actual para confirmar!");
			contrasena3.focus();
		} else {
			boton.setAttribute("disabled", true);
			fetch(formulario_seguridad.getAttribute('action'), {
				method: 'post',
				body: new FormData(formulario_seguridad),
			}).then(response => response.json()).then(data => {
				boton.removeAttribute("disabled");
				if (data.status != "success") {
					alert(data.response.message);
					return;
				}

				// Si todo funcionó correctamente, mandamos mensaje de exito al usuario y recargamos la página.
				alert(data.response.message);
				location.reload();
			});
		}
	});
</script>
@endsection
