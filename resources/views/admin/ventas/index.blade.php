@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Sales Report per User</h1>
    </div>
    <!-- Main content -->
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h1 class="modal-title text-uppercase fs-5 fw-bold" id="modal_registrar_label"><i
                                class="fas fa-registered"></i> Registrar</h1>
                        {!! Form::open(['route' => 'admin.ventas.store', 'method' => 'POST']) !!}
                        <div class="row">
                            <div>
                                <div class="form-group">
                                    {!! Form::label('usuario', ' Usuario ') !!}
                                    {!! Form::select('user[]', $users, [], ['class' => 'form-control', 'placeholder' => 'Seleccione el Usuario']) !!}

                                    @error('usuario')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <div class="d-flex flex-column">
                                        {!! Form::label('startDate', 'Fecha Inicio:') !!}
                                        {!! Form::date('startDate', \Carbon\Carbon::now()) !!}
                                    </div>

                                    @error('startDate')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div >
                                <div class="form-group">
                                    <div class="d-flex flex-column">
                                        {!! Form::label('endDate', 'Fecha Fin:') !!}
                                        {!! Form::date('endDate', \Carbon\Carbon::now()) !!}
                                    </div>

                                    @error('endDate')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end border-0 px-0 pb-0">
                                {!! Form::Button('Procesar', [
                                    'class' => 'btn btn-primary',
                                    'type' => 'submit',
                                    'id' => 'id-button',
                                ]) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

@stop
