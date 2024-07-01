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
                        @if ($totalSales && $detailedSales)
                            <div class="row">
                                <div>
                                    <h4>Total de Ventas</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                                <th>Usuario</th>
                                                <th>Desde</th>
                                                <th>Hasta</th>
                                                <th>Total de Placas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($totalSales as $sale)
                                                <tr>
                                                    <td>{{ $sale->user }}</td>
                                                    <td>{{ $dateInit }}</td>
                                                    <td>{{ $dateFinal }}</td>
                                                    <td>{{ $sale->plates_count }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div >
                                    <h4>Detalle de Ventas</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Usuario</th>
                                                <th>Seguro</th>
                                                <th>Total de Placas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detailedSales as $sale)
                                                <tr>
                                                    <td>{{ $sale->user }}</td>
                                                    <td>{{ $sale->insurance }}</td>
                                                    <td>{{ $sale->plates_count }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        <!-- /.card-body -->
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
