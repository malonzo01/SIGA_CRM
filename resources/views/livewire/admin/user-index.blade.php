    <div class="card">
        @if ($users->count())
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover my-0" id="data-table">
                        <thead>
                            <tr>
                                <th><i class="fas fa-id-card"></i> Nombre completo</th>
                                <th><i class="fas fa-phone-alt"></i> Teléfono</th>
                                <th><i class="fas fa-envelope"></i> Correo electrónico</th>
                                <th><i class="fas fa-user"></i> User</th>
                                <th><i class="fas fa-id-card-alt"></i> Rol</th>
                                <th><i class="fas fa-toggle-on"></i> Estatus</th>
                                <th><i class="fas fa-cogs"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $rolName)
                                                <span class="badge bg-primary">{{ $rolName }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($user->status == 'A')
                                            <span class="badge bg-success"><i class="fas fa-check"></i> Activo</span>
                                        @elseif ($user->status == 'P')
                                            <span class="badge bg-info"><i class="fas fa-clock"></i> Pendiente</span>
                                        @else
                                            <span class="badge bg-danger"><i class="fas fa-times"></i> Inactivo</span>
                                        @endif
                                    </td>
                                    <td width="150px">
                                        @can('admin.users.edit')
                                            @if (auth()->user()->id != $user->id)
                                                <a href="{{ route('admin.users.edit', $user) }}"
                                                    data-id="{{$user->id}}"
                                                    class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                    title="Editar"><i class="fa fa-lg fa-fw fa-edit"></i>
                                                </a>
                                            @endif
                                        @endcan
                                        @can('admin.users.destroy')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user], 'style' => 'display:inline']) !!}
                                            {!! Form::button('<i class="fa fa-lg fa-fw fa-trash"></i>', [
                                                'type' => 'enviar',
                                                'class' => 'btn btn-xs btn-default text-danger mx-1 shadow title=Editar',
                                            ]) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros...</strong>
            </div>
        @endif
    </div>
