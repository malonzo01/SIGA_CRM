@extends('layouts.dashboard')

@section('content')
    <div class="row align-items-center mb-3">
        <div class="col-6 text-start">
            <h3 class="text-uppercase mb-0"><i class="fas fa-users"></i> Users</h3>
        </div>
        <div class="col-6 text-end">
            @can('admin.users.create')
                <a class="btn btn-primary btn-sm" id="btn_nuevo" href="{{ route('admin.users.create') }}"><i
                        class="fas fa-plus"></i>Registrar</a>
            @endcan
        </div>
    </div>
    <section class="section dashboard">
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success my-2">
                <p>{{ $message }}</p>
            </div>
        @endif
        @livewire('admin.user-index')
    </section>
@stop

@section('css')

@stop

@section('scripts')
    @if (session('info') == 'ok')
        <script>
            Swal.fire({
                title: "!Buen trabajo!",
                text: "La User se Elimino con exito.",
                icon: "success"
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                }
            });
        });
    </script>
    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Estas seguro?",
                text: "!No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "!Sí, eliminar!",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
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
                    document.getElementById('editar_nombre').value = data.response.data.name;
                    document.getElementById('editar_telefono').value = data.response.data.phone;
                    document.getElementById('editar_correo').value = data.response.data.email;
                    document.getElementById('editar_rol').value = data.response.data.rol;
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
@stop
