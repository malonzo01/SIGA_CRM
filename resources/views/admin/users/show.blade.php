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
        <div class="row">
            <div class="col-lg-12 margin-tb mb-4">
                <div class="pull-left">
                    <h2>Show User</h2>
                    <div class="d-flex justify-content-end border-0 px-0 pb-4">
                        <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                {!! Form::model($user,['method'=>'PUT','route' => ['admin.users.update',$user->id]]) !!}
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre']) !!}

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('username', 'Nombre de Usuario') !!}
                                {!! Form::text('username', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre de Usuario']) !!}

                                @error('username')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('phone', 'Teléfono') !!}
                                {!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'Ingrese el Teléfono']) !!}

                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Ingrese el E-mail']) !!}

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::text('password', null, ['class'=>'form-control','placeholder'=>'Ingrese el password']) !!}

                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('confirm-password', 'Confirmar Password') !!}
                                {!! Form::text('confirm-password', null, ['class'=>'form-control','placeholder'=>'Ingrese la Confirmacion de Passwor']) !!}

                                @error('confirm-password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 mt-4">
                            <div class="form-group">
                                {!! Form::label('roles', 'Roles') !!}
                                {!! Form::select('roles[]', $roles,[], ['class'=>'form-control','placeholder'=>'Seleccione el Rol']) !!}

                                @error('roles')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end border-0 px-0 pb-0">
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
