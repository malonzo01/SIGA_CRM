@extends('layouts.dashboard')

@section('content')
<div class="pagetitle">
	<h1>Inicio</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Panel administrativo</li>
		</ol>
	</nav>
</div>

<section class="section dashboard">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Inicio</h5>
					<div class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
						Ya se encuentra disponible la nueva placa de Ohio
						<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				</div>
			</div>
		</div>

		<!-- Left side columns -->
		<div class="col-lg-12">
			<div class="row">
				@foreach($insurences as $index => $insurence)
				<div class="col-6 col-md-3 col-lg-2 mb-4">
					<a href="{{route('plate_car.generate', ['insurence' => $index])}}">
						<div class="card h-100 p-3 m-0"><span class="icon-placa {{$insurence->icon}}"></span><label class="label-placa">{{$insurence->name}}</label></div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection
