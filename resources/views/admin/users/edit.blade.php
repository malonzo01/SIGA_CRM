@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Administrar Usuarios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item ">Editar</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-flex justify-content-end border-0 px-0 pb-4">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}"><i class="fas fa-reply"></i> Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <h1 class="modal-title text-uppercase fs-5 fw-bold" >
                    <i class="fas fa-file-signature"></i>
                    Editar
                </h1>
                {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}
                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('name', ' Nombre', ['class' => 'fas fa-id-card']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre']) !!}

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('username', ' Nombre de Usuario', ['class' => 'fas fa-address-book']) !!}
                            {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de Usuario']) !!}

                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('phone', ' Teléfono', ['class' => 'fas fa-phone-alt']) !!}
                            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Teléfono']) !!}

                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('email', ' E-mail', ['class' => 'fas fa-envelope']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el E-mail']) !!}

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('password', ' Password' , ['class' => 'fas fa-user-lock']) !!}
                            {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el password']) !!}

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('confirm-password', ' Confirmar Password', ['class' => 'fas fa-user-shield']) !!}
                            {!! Form::text('confirm-password', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Ingrese la Confirmacion de Passwor',
                            ]) !!}

                            @error('confirm-password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-4">
                        <div class="form-group">
                            {!! Form::label('roles', ' Roles', ['class' => 'fas fa-id-card-alt']) !!}
                            {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'placeholder' => 'Seleccione el Rol']) !!}

                            @error('roles')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end border-0 px-0 pb-0">
                        {!! Form::Button('<i class="fas fa-floppy-disk" aria-hidden="true"></i> Guardar', [
                            'class' => 'btn btn-primary',
                            'type' => 'submit',
                            'id' => 'id-button',
                        ]) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop

