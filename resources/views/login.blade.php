@extends('layouts.auth')

@section('content')
<style>
	h4.title-group {
		border-bottom: 1px dashed;
		color: #0F4690;
		font-weight: 600;
		margin-bottom: 5px;
		padding-bottom: 5px;
		padding-top: 20px;
	}

	.form-control,
	.form-select,
	input#vin {
		border: 1px solid #ced4da;
		border-radius: 15px;
		color: #8c8c8c;
		color: var(--gray-text);
		font-size: 12px;
		height: 30px;
		padding: 2px 10px;
	}

	@media (min-width: 320px) and (max-width: 480px) {

		.row .form-group-design {
			width: 50%;
		}

	}
</style>

<div class="container">
	<section class="section register d-flex flex-column align-items-center justify-content-center py-4 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
					<div class="d-flex justify-content-center py-4">
						<a href="index.html" class="logo d-flex align-items-center w-auto">
							<img src="{{url('img/logo.png')}}" alt="{{ config('app.name', 'Laravel') }}">
							<span class="d-none d-lg-block">{{ config('app.name', 'Laravel') }}</span>
						</a>
					</div><!-- End Logo -->

					<div class="card mb-3">
						<div class="card-body">
							<div class="pt-4 pb-2">
								<h5 class="card-title text-center pb-0 fs-4">Iniciar sesión</h5>
							</div>
							<form class="row g-3 needs-validation" name="form_login" id="form_login" method="post" action="{{route('session.login')}}">
								@csrf
								<div class="col-12">
									<label for="username" class="form-label">Nombre de usuario</label>
									<input type="text" name="username" class="form-control" id="username" required>
								</div>
								<div class="col-12">
									<label for="password" class="form-label">Contraseña</label>
									<input type="password" name="password" class="form-control" id="password" required>
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection