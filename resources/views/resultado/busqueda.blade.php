@extends('layouts.auth')

@section('content')
<style>
    .centro{

        margin-left:auto;
        margin-right:auto;
        width:20%;
    }
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
	<section class="section register d-flex flex-column align-items-center justify-content-center py-6 mb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3">
						<div class="card-body">
							<div class="pt-4 pb-2 text-center">
                                <a href="$appurl/iniciar_sesion" >
							        <img src="{{url($dirLogo)}}" style="width:50%">
						        </a>
								<h5 class="card-title text-center pb-0 fs-4">DATOS CONSULTADOS</h5>
							</div>
                            <div class="row">
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">TagNo:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->plate}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">TagType:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">BUYERS TAG</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Effective Timestamp:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->date_issue}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Verification Code</span></div>
                                <div class="col-6"><span style=" font-size:12px;">05202419JI</span></div>


                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Create Timestamp:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->date_issue}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">End Timestamp:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->date_exp}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Status Code:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">ACTIVE</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">VIN:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->vin}}</span></div>


                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Model Year:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->year}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Make:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->make}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Vehicle BodyType:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">4D</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Major Color:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->major_color}}</span></div>


                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Dealer GDN:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->dealer_number}}</span></div>
                                <div class="col-6"><span style=" font-size:12px; font-weight:bold;">Dealer Name:</span></div>
                                <div class="col-6"><span style=" font-size:12px;">{{$nuevo->name1.' '.$nuevo->name2}}</span></div>
                                <div class="col-4"><span style=" font-size:12px; font-weight:bold;">Dealer DBA:</span></div>
                                <div class="col-8"><span style=" font-size:12px;">{{$nuevo->seller}}</span></div>
                                <div class="col-4"><span style=" font-size:12px; font-weight:bold;">Address:</span></div>
                                <div class="col-8"><span style=" font-size:12px; ">{{$nuevo->address.', '.$nuevo->city.', '.$nuevo->state.' '.$nuevo->zip}}</span></div>

                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
