@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Administrar Roles</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item ">Crear</li>
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
            <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}"> Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <br>
                {!! Form::open(['route' => 'admin.roles.store']) !!}

                @include('admin.roles.partials.form')

                <div class="card-footer d-flex justify-content-end border-0 px-0 pb-0">
                    {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
