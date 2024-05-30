@extends('layouts.dashboard')

@section('content')
<div class="pagetitle">
	<h1>Generar placa</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item ">Formulario</li>
			<li class="breadcrumb-item ">Generar placas</li>
			<li class="breadcrumb-item active">{{$insurences->$selected->name}}</li>
		</ol>
	</nav>
</div>

<section class="section dashboard">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="row" style="padding-top: 30px;">
					<div class="col-md-11 col-sm-12 text-center">
						<h4 class="text-uppercase">Generar Placa: {{$insurences->$selected->name}}</h4>
					</div>
				</div>

				<div class="card-body">
					<form name="form_generate_plate" id="form_generate_plate" method="POST" action="{{route('pdf.generate', ['insurence' => $selected])}}" enctype="multipart/form-data">
						@csrf
						@method('POST')
						<div class="row">
							<div class="col-sm-12">
								<h4 class="title-group">Información vehículo *</h4>
							</div>
							<div class="form-group col-md-4 col-sm-12 mt-4">
								<label>VIN: </label>
								<input type="text" name="vin" class="form-control" minlength="15" maxlength="17" placeholder="VIN" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
							</div>
							<div class="form-group col-md-4 col-sm-12 mt-4">
								<label>Sale Date *: </label>
								<input type="date" name="sale_date" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group col-md-4 col-sm-12 mt-4">
								<label>Days *: </label>
								<select name="days" class="form-control">
									<option value="">Select days</option>
									@foreach($days as $day)
									<option value="{{$day}}">{{$day}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Seller *: </label>
								<input type="text" name="seller" class="form-control" value="TOMMIE VAUGHN MOTORS, INC" placeholder="TOMMIE VAUGHN MOTORS, INC" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Deler number *: </label>
								<input type="text" name="deler_number" class="form-control" value="P153145" placeholder="P153145"  onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Make *: </label>
								<input type="text" name="make" class="form-control" placeholder="MAKE" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Body Style *: </label>
								<select name="body_style" class="form-control">
									<option value="">Select body style</option>
									@foreach($bodies as $body)
									<option value="{{$body}}">{{$body}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Year *: </label>
								<input type="text" name="year" class="form-control" placeholder="YEAR" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Model *: </label>
								<input type="text" name="model" class="form-control" placeholder="MODEL" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Major color *: </label>
								<select name="major_color" class="form-control">
									<option value="">Select color</option>
									@foreach($colors as $color)
									<option value="{{$color}}">{{$color}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Minor color *: </label>
								<select name="minor_color" class="form-control">
									<option value="">Select color</option>
									@foreach($colors as $color)
									<option value="{{$color}}">{{$color}}</option>
									@endforeach
								</select>
							</div>

							<div class="col-sm-12">
								<h4 class="title-group">Información comprador *</h4>
							</div>
							<input type="hidden" name="iduser" value="{{auth()->user()->username}}">
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Name 1 *: </label>
								<input type="text" name="name1" class="form-control" placeholder="NAME 1" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Name 2 *: </label>
								<input type="text" name="name2" class="form-control" placeholder="NAME 2" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Address *: </label>
								<input type="text" name="address" class="form-control" placeholder="ADDRESS" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>City *: </label>
								<input type="text" name="city" class="form-control" placeholder="CITY" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>State *: </label>
								<select name="state" class="form-control">
									<option value="">Select state</option>
									@foreach($states as $iso => $state)
									<option value="{{$iso}}">{{$state}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Zip *: </label>
								<input type="text" name="zip" class="form-control" placeholder="ZIP" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Email *: </label>
								<input type="email" name="email" class="form-control" placeholder="EMAIL" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group form-group-design col-md-4 col-sm-12 mt-4">
								<label>Phone *: </label>
								<input type="phone" name="phone" class="form-control" placeholder="PHONE" onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
						</div>
						<div class="card-footer d-flex justify-content-end border-0 px-0 pb-0">
							<button type="submit" class="btn btn-success" formtarget="_blank"><i class="fab fa-opencart"></i> Generar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection