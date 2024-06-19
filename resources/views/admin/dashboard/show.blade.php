@extends('layouts.dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Plates by Insurance by Seller</h1>
    </div>
    <!-- Main content -->
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Plates by Insurance by {{ $user->name }}</h3>
                    </div>
                    <!-- /.card-header -->
                    @if ($userPlatesPerInsurance->count())
                        <div class="card-body">
                            <table id="plate_insurance_seller" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Insurance</th>
                                        <th>Total Plates</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userPlatesPerInsurance as $userPlate)
                                        <tr>
                                            <td>{{ $userPlate->insurance }}</td>
                                            <td>{{ $userPlate->plates_count }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Insurance</th>
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
    </div>
    <!-- /.container-fluid -->

@stop
