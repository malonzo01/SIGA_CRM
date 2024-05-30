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
						Ya se encuentra disponible la nueva placa de texas
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

				<?php /*
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-cali"></span><label class="label-placa">California</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-ct"></span><label class="label-placa">Connecticut</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-florida"></span><label class="label-placa">Florida</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-ga"></span><label class="label-placa">Georgia</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-il"></span><label class="label-placa">Illinois</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-in"></span><label class="label-placa">Indiana</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-inspect"></span><label class="label-placa">Inspect</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-isurance"></span><label class="label-placa">Insurance</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-isurance"></span><label class="label-placa">Insurance Falcon</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-isurance"></span><label class="label-placa">Insurance Geico</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-la"></span><label class="label-placa">Louisiana</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-md"></span><label class="label-placa">Maryland</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-ma"></span><label class="label-placa">Massachusetts</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-mo"></span><label class="label-placa">Missouri</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-nm"></span><label class="label-placa">New Mexico</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-nc"></span><label class="label-placa">North Carolina</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-oh"></span><label class="label-placa">Ohio</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-pa"></span><label class="label-placa">Pennsylvania</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-sc"></span><label class="label-placa">South Carolina</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-tn"></span><label class="label-placa">Tennessee</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-texas"></span><label class="label-placa">Texas Agente</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-texas"></span><label class="label-placa">Texas Vieja</label></div>
						<div class="card h-100 p-3 m-0"><span class="icon-placa icon-vg"></span><label class="label-placa">Virginia</label></div>
					*/ ?>
			</div>
		</div>
	</div>
</section>
@endsection