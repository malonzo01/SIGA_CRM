@extends('layouts.dashboard')

@section('content')
<div class="row align-items-center mb-3">
	<div class="col-6 text-start">
		<h3 class="text-uppercase mb-0"><i class="fas fa-users"></i> Usuarios</h3>
	</div>
	<div class="col-6 text-end">
		<button class="btn btn-primary" id="btn_nuevo"><i class="fas fa-plus"></i> Registrar</button>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body p-3">
				<div class="table-responsive">
					<table class="table table-hover my-0" id="data-table">
						<thead>
							<tr>
								<th><i class="fas fa-id-card"></i> Nombre completo</th>
								<th><i class="fas fa-phone-alt"></i> Teléfono</th>
								<th><i class="fas fa-envelope"></i> Correo electrónico</th>
								<th><i class="fas fa-user"></i> Usuario</th>
								<th><i class="fas fa-id-card-alt"></i> Rol</th>
								<th><i class="fas fa-toggle-on"></i> Estatus</th>
								<th><i class="fas fa-cogs"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($usuarios as $usuario)
							<tr>
								<td>{{$usuario->name_}}</td>
								<td>{{$usuario->phone_}}</td>
								<td>{{$usuario->email_}}</td>
								<td>{{$usuario->username}}</td>
								<td>{{$roles[$usuario->rol_]}}</td>
								<td class="text-center">
									@if ($usuario->status == "A")
									<span class="badge bg-success"><i class="fas fa-check"></i> Activo</span>
									@elseif ($usuario->status == "P")
									<span class="badge bg-info"><i class="fas fa-clock"></i> Pendiente</span>
									@else
									<span class="badge bg-danger"><i class="fas fa-times"></i> Inactivo</span>
									@endif
								</td>
								<td>
									@if (auth()->user()->iduser != $usuario->iduser)
									<button type="button" class="btn btn-primary btn-sm btn_editar" data-id="{{$usuario->iduser}}"><i class="fas fa-edit"></i></button>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_registrar" tabindex="-1" aria-labelledby="modal_registrar_label" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header border-0 pt-4 px-4 pb-0">
				<h1 class="modal-title text-uppercase fs-5 fw-bold" id="modal_registrar_label"><i class="fas fa-parking"></i> Registrar</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form class="forms-sample" name="formulario_registro" id="formulario_registro" method="POST" action="{{route('users.store')}}">
					@csrf
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="nuevo_nombre"><i class="fas fa-id-card"></i> Nombre completo</label>
								<input type="text" class="form-control" name="nombre" id="nuevo_nombre" placeholder="Ingrese el nombre completo">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="nuevo_telefono"><i class="fas fa-phone-alt"></i> Teléfono</label>
								<input type="text" class="form-control" name="telefono" id="nuevo_telefono" placeholder="ingrese el teléfono">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="nuevo_correo"><i class="fas fa-envelope"></i> Correo electrónico</label>
								<input type="email" class="form-control" name="correo" id="nuevo_correo" placeholder="Ingrese el correo electrónico">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="nuevo_rol"><i class="fas fa-id-card-alt"></i> Rol</label>
								<select class="form-control" name="rol" id="nuevo_rol" required>
									<option value="">Seleccione el rol</option>
									@foreach($roles as $index => $rol)
									<option value="{{$index}}">{{$rol}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="text-end">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cerrar</button>
						<button type="submit" class="btn btn-primary" id="btn_registrar"><i class="fas fa-save me-2"></i>Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_modificar" tabindex="-1" aria-labelledby="modal_modificar_label" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header border-0 pt-4 px-4 pb-0">
				<h1 class="modal-title text-uppercase fs-5 fw-bold" id="modal_modificar_label"><i class="fas fa-parking"></i> Modificar</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4">
				<form class="forms-sample" name="formulario_actualizacion" id="formulario_actualizacion" method="POST">
					@csrf
					@method('PATCH')
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="editar_nombre"><i class="fas fa-id-card"></i> Nombre completo</label>
								<input type="text" class="form-control" name="nombre" id="editar_nombre" placeholder="Ingrese el nombre completo">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="editar_telefono"><i class="fas fa-phone-alt"></i> Teléfono</label>
								<input type="text" class="form-control" name="telefono" id="editar_telefono" placeholder="ingrese el teléfono">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="editar_correo"><i class="fas fa-envelope"></i> Correo electrónico</label>
								<input type="email" class="form-control" name="correo" id="editar_correo" placeholder="Ingrese el correo electrónico">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group mb-3">
								<label for="editar_rol"><i class="fas fa-id-card-alt"></i> Rol</label>
								<select class="form-control" name="rol" id="editar_rol" required>
									<option value="">Seleccione el rol</option>
									@foreach($roles as $index => $rol)
									<option value="{{$index}}">{{$rol}}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="text-end">
						<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fas fa-times me-2"></i>Cerrar</button>
						<button type="submit" class="btn btn-primary" id="btn_modificar"><i class="fas fa-save me-2"></i>Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="{{url('js/configuracion.js')}}"></script>
<script>
	// Elementos HTML.
	const btn_nuevo = document.getElementById("btn_nuevo");
	const switch_estatus = document.querySelectorAll(".switch_estatus");
	const btn_editar = document.querySelectorAll(".btn_editar");
	const modal_registrar = new bootstrap.Modal('#modal_registrar');
	const formulario_registro = document.getElementById("formulario_registro");
	const modal_modificar = new bootstrap.Modal('#modal_modificar');
	const formulario_actualizacion = document.getElementById("formulario_actualizacion");

	// Eventos elementos HTML.
	// Agregar nuevo registro.
	btn_nuevo.addEventListener("click", function(e) {
		e.preventDefault();
		formulario_registro.reset();
		modal_registrar.show();
	});

	// Registrar datos.
	formulario_registro.addEventListener("submit", function(e) {
		e.preventDefault();

		// Elementos del formulario.
		const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		const nuevo_nombre = document.getElementById("nuevo_nombre");
		const nuevo_telefono = document.getElementById("nuevo_telefono");
		const nuevo_correo = document.getElementById("nuevo_correo");
		const nuevo_rol = document.getElementById("nuevo_rol");
		const btn_guardar = document.getElementById("btn_registrar");

		// Validamos los campos.
		if (nuevo_nombre.value == "") {
			alert('Ingrese el nombre del usuario');
			nuevo_nombre.focus();
		} else if (nuevo_nombre.value.length < 10 || nuevo_nombre.value.length > 60) {
			alert('El nombre debe tener un mínimo de 10 caracteres y un máximo de 60 caracteres');
			nuevo_nombre.focus();
		} else if (nuevo_telefono.value == "") {
			alert('Ingrese el teléfono del usuario')
			nuevo_telefono.focus();
		} else if (nuevo_correo.value == "") {
			alert('Ingrese el correo electrónico del usuario');
			nuevo_correo.focus();
		} else if (!emailRegex.test(nuevo_correo.value)) {
			alert('Ingrese un correo electrónico válido');
			nuevo_correo.focus();
		} else if (nuevo_rol.value == "") {
			alert('Seleccione un rol para el usuario');
			nuevo_rol.focus();
		} else {
			btn_guardar.setAttribute("disabled", true);
			fetch(`${formulario_registro.getAttribute('action')}`, {
				method: 'post',
				body: new FormData(formulario_registro)
			}).then(response => response.json()).then(data => {
				btn_guardar.removeAttribute("disabled");

				// Verificamos si ocurrió algún error.
				if (data.status != "success") {
					alert(data.response.message);
					return;
				}

				// Enviamos mensaje de exito.
				modal_registrar.hide();
				alert(data.response.message);
				location.reload();
			});
		}
	});

	// Consultar registro.
	Array.from(btn_editar).forEach(button_ => {
		button_.addEventListener('click', function(e) {
			e.preventDefault();

			// Capturamos el elemento que provoco el evento.
			const button_element = this;
			const id_data = button_element.getAttribute('data-id');

			// Realizamos la consulta AJAX.
			button_element.classList.add('loading');
			fetch(`${_url_}/usuarios/modificar/${id_data}`, {
				method: 'get'
			}).then(response => response.json()).then((data) => {
				button_element.classList.remove('loading');

				// Verificamos si ocurrió algún error.
				if (data.status != "success") {
					alert(data.response.message);
					return;
				}

				// Limpiamos el formulario y cargamos los datos consultados.
				formulario_actualizacion.reset();
				formulario_actualizacion.setAttribute('action', `${_url_}/usuarios/${id_data}`);
				document.getElementById('editar_nombre').value = data.response.data.name_;
				document.getElementById('editar_telefono').value = data.response.data.phone_;
				document.getElementById('editar_correo').value = data.response.data.email_;
				document.getElementById('editar_rol').value = data.response.data.rol_;
				modal_modificar.show();
			});
		});
	});

	// Modificar datos.
	formulario_actualizacion.addEventListener("submit", function(e) {
		e.preventDefault();

		// Elementos del formulario.
		const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
		const editar_nombre = document.getElementById("editar_nombre");
		const editar_telefono = document.getElementById("editar_telefono");
		const editar_correo = document.getElementById("editar_correo");
		const editar_rol = document.getElementById("editar_rol");
		const btn_guardar = document.getElementById("btn_modificar");

		// Validamos los campos.
		if (editar_nombre.value == "") {
			alert('Ingrese el nombre del usuario');
			editar_nombre.focus();
		} else if (editar_nombre.value.length < 10 || editar_nombre.value.length > 60) {
			alert('El nombre debe tener un mínimo de 10 caracteres y un máximo de 60 caracteres');
			editar_nombre.focus();
		} else if (editar_telefono.value == "") {
			alert('Ingrese el teléfono del usuario');
			editar_telefono.focus();
		} else if (editar_correo.value == "") {
			alert('Ingrese el correo electrónico del usuario');
			editar_correo.focus();
		} else if (!emailRegex.test(editar_correo.value)) {
			alert('Ingrese un correo electrónico válido');
			editar_correo.focus();
		} else if (editar_rol.value == "") {
			alert('Seleccione un rol para el usuario');
			editar_rol.focus();
		} else {
			btn_guardar.setAttribute('disabled', true);
			fetch(`${formulario_actualizacion.getAttribute('action')}`, {
				method: 'post',
				body: new FormData(formulario_actualizacion)
			}).then(response => response.json()).then(data => {
				btn_guardar.removeAttribute('disabled');

				// Verificamos si ocurrió algún error.
				if (data.status != "success") {
					alert(data.response.message);
					return;
				}

				// Enviamos mensaje de exito.
				modal_modificar.hide();
				alert(data.response.message);
				location.reload();
			});
		}
	});
</script>
@endsection