<style>
	@page {
		margin-left: 1.8cm;
		margin-right: 0cm;
		margin-top: 0.2cm;
		margin-bottom: 0cm;
	}

	@font-face {
		font-family: Helvetica;
		src: url('/fonts/Helvetica-Narrow.tff');
	}

	* {
		font-family: Helvetica;
	}

	table,
	th,
	td,
	p,
	div,
	b {
		margin: 0;
		padding: 0
	}

	th {
		border-bottom: 1px solid black;
		border-collapse: collapse;
		font-weight: 400;
	}

	th,
	td {
		padding: 0px;
	}

	table {
		border-collapse: collapse;
		padding: 0px;
	}

	table,
	tr,
	td {
		border: none;
	}

	.page_break {
		page-break-before: always;
	}

	/* .div-master{
		background: url("{{url('img/placas/IMG_20231218_103448_727.png')}}");
		background-size: cover;
		background-repeat: no-repeat;
		background-size: 1100px 580px;
	} */
	.b {
		text-orientation: upright;
		color: white;
		font-weight: bold;
	}
</style>

<div class="div-master" style="width:100%; margin-bottom:20px;padding:0px 0px 0px 0px;">
	<table style="border-spacing: 0;margin-top:-140px;">
		<tr>
			<td width="130">
				<p>
					<img src="{{public_path('img/placas/nj_seal_lg.png')}}" width="100" />
				</p>
			</td>
			<td width="700">
				<h4 style="font-size:10em;font-family: 'Times New Roman', Times, serif;margin-left:-60px;letter-spacing: 0.01em;">New Jersey</h4>
			</td>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: -290px;margin-bottom:-0px">
		<tr>
			<td width="70"></td>
			<td width="600">
				<h4 style="font-size:2.5em;font-family: 'Roboto', sans-serif;text-align:center;font-weight:400">{{ $request->days }} Day Resident Temporary Plate</h4>
			</td>
		</tr>
	</table>
	<table style="border-spacing: 0;">
		<tr>
			<td width="830">
				<h4 style="font-size:15em;font-family: 'Roboto', sans-serif;letter-spacing: 0em;margin-top: -85px;transform: scale(1, 1.3)">{{ $tag_number }}</h4>
			</td>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: -438px">
		<tr>
			<td width="180">
				<h4 style="font-size:20px;font-weight:400;margin-top:0px;margin-left:-24px;white-space:pre">{{ $tag_number }} ISSUE {{ $initDaySt }}</h4>
				<h4 style="font-size:20px;font-weight:400;margin-top:-28px;margin-left:-24px;white-space:pre">VIN: {{ $request->vin }}</h4>
				<h4 style="font-size:20px;font-weight:400;margin-top:-26px;margin-left:-24px;white-space:pre">{{ $request->year }} {{ $request->make }} {{ $request->model }}, {{ $request->major_color }}</h4>
			</td>
			<td width="360">
				<center>

					<h6 style="font-size:50px;margin-top:86px;">EXP {{ strtoupper($lateDay_MdY) }}</h6><br>
					<h6 style="font-size:22.5px;margin-top:-130px;font-weight:400">Attach this section to the rear of the vehicle</h6>
				</center>
			</td>
			<td width="50">
				<p style="margin-top:-45px;margin-left:50px">
					<img src="data:image/png;base64,{{ base64_encode($dirImage)}}" width="90" />
				</p>
			</td>
		</tr>
	</table>

</div>

<div class="page_break"></div>

<div class="div-master" style="width:100%; margin-left:-20px;padding:180px 0px 0px 0px;">
	<table style="border-spacing: 0;">
		<tr style="padding: 2px 0px 2px 0px;">
			<th width="535">
				<h4 style="font-size:1.3em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">TEMPORARY VEHICLE REGISTRATION</h4>
			</th>
			<th width="220">
				<h4 style="font-size:1.3em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">DEALER COPY</h4>
			</th>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: 0px;margin-bottom:-0px;border-bottom:1px solid black;">
		<tr style="padding: 2px 0px 2px 0px;">
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Plate</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $tag_number }}</h4>
			</th>
			<th width="110">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Issue date</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $initDaySt }}</h4>
			</th>
			<th width="105">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Expiration date</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $lateDaySt }}</h4>
			</th>
			<th width="180">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">VIN</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->vin }}</h4>
			</th>
			<th width="80">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Plate</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $tag_number }}</h4>
			</th>
			<th width="100">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">VIN</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->vin }}</h4>
			</th>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: 0px;margin-bottom:-0px;border-bottom:1px solid black;">
		<tr style="padding: 2px 0px 2px 0px;">
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Year</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->year }}</h4>
			</th>
			<th width="110">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Make</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->make }}</h4>
			</th>
			<th width="105">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Model</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->model }}</h4>
			</th>
			<th width="100">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Body Style</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->body_style }}</h4>
			</th>
			<th width="80">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Color</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->major_color }}</h4>
			</th>
			<th width="80">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Issue date</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $initDaySt }}</h4>
			</th>
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Expiration date</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $lateDaySt }}&nbsp;&nbsp;&nbsp;&nbsp;</h4>
			</th>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: -1px;margin-bottom:-0px;border-bottom:1px solid black;">
		<tr style="padding: 2px 0px 2px 0px;">
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Name</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->name1 }}</h4>
			</th>
			<th width="110">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Mailing Address</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->address }}</h4>
			</th>
			<th width="105">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">City</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->city }}</h4>
			</th>
			<th width="100">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">State</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->state }}</h4>
			</th>
			<th width="80">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Zip</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->zip }}</h4>
			</th>
			<th width="80">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Make</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->make }}</h4>
			</th>
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Model</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->model }}</h4>
			</th>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-top: -1px;margin-bottom:-0px;border-bottom:1px solid black;">
		<tr style="padding: 2px 0px 2px 0px;">
			<th width="140">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Dealer License</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->deler_number }}</h4>
			</th>
			<th width="110">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Dealership</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->seller }}</h4>
			</th>
			<th width="165">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Insurance company</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">12289 Personal Service</h4>
			</th>
			<th width="350">
				<h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Policy/Binder number</h4>
				<h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">4826492</h4>
			</th>
		</tr>
		<!--<tr style="padding: 2px 0px 2px 0px;">
                <th width="355">
                    <h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Dealer License</h4>
                    <h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->deler_number }}</h4>
                </th>
                <th width="400">
                    <h4 style="font-size:1.1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:700;margin-top:8px">Dealership</h4>
                    <h4 style="font-size:1em;font-family: 'Roboto', sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px">{{ $request->seller }}</h4>
                </th>
            </tr>-->
	</table>
</div>
