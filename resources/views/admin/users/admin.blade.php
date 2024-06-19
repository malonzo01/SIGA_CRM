@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard Administrador</h1>

    </div>
    <section class="section dashboard">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $insurances->count() }}</h3>

                        <p>Insurances</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $plates->count() }}</sup></h3>

                        <p>Plates Sold</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $users->count() }}</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Plates by Seller</h3>
                        </div>
                        <!-- /.card-header -->
                        @if ($plates->count())
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Seller Name</th>
                                            <th>Plates</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($totalPlatesPerUser as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->plates_count }}</td>
                                                <td>
                                                    <a href="{{ route('admin.dashboard.show', $user->id) }}"
                                                        data-id="{{ $user->id }}"
                                                        class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                        title="Editar"><i class="fa fa-lg fa-fw fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Seller Name</th>
                                            <th>Total Plates</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        @else
                            <div class="card-body">
                                <strong>No hay registros...</strong>
                            </div>
                        @endif
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Plates by Insurance</h3>
                        </div>
                        <!-- /.card-header -->
                        @if ($plates->count())
                            <div class="card-body">
                                <table id="plate_insurance" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Insurance</th>
                                            <th>Total Plates</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($totalPlatesPerInsurance as $insurance)
                                            <tr>
                                                <td>{{ $insurance->name }}</td>
                                                <td>{{ $insurance->plates_count }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Insurance</th>
                                            <th>Plates</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        @else
                            <div class="card-body">
                                <strong>No hay registros...</strong>
                            </div>
                        @endif
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop
