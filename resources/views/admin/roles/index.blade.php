@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Administrar Roles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item ">Listado</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="d-flex justify-content-end border-0 px-0 pb-4">
            @can('admin.roles.create')
                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.create') }}">Nuevo Rol</a>
            @endcan
        </div>
        <div class="card">

            @if ($roles->count())
                <div class="card-body">
                    <table class="table table-striped table-hover" id="roles">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ROLE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td width="150px">
                                        <form id="frmDatos" action="{{ route('admin.roles.destroy', $role) }}"
                                            class="d-inline formulario-eliminar" method="POST">
                                            @can('admin.roles.edit')
                                                <a href="{{ route('admin.roles.edit', $role) }}"
                                                    class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar"><i
                                                        class="fa fa-lg fa-fw fa-pen"></i>
                                                </a>
                                            @endcan
                                            @csrf
                                            @method('delete')
                                            @can('admin.roles.destroy')
                                                <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                    title="Eliminar">
                                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                                </button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">

                </div>
            @else
                <div class="card-body">
                    <strong>No hay registros...</strong>
                </div>
            @endif
        </div>
    </section>
@stop

@section('css')

@stop

@section('js')
    @if (session('info') == 'ok')
        <script>
            Swal.fire({
                title: "!Buen trabajo!",
                text: "El Rol se Elimino con exito.",
                icon: "success"
            });
        </script>
    @endif
    <script>
        console.log('Hi!');
    </script>
    <script>
        $(document).ready(function() {
            $('#roles').DataTable({
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
@stop
