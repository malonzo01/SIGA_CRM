<style>
	@page {
		margin-left: 1.5cm;
		margin-right: 1.5cm;
		margin-top: 0.5cm;
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

	.page_break {
		page-break-before: always;
	}

	.div-master {
		background: url("{{url('img/placas/IMG_20231208_143230_061.png')}}");
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top 86px;
		background-size: 670px 670px;
		padding-bottom: 170px;
	}
</style>

<div class="div-master1">

	<div style="width:100%;">

		<table style="border-spacing: 0;margin-top: 0px;">
			<tr>
				<td width="300">
					<p><img src="{{public_path('img/geico.png')}}" width="220" /></p>
					<p style="font-size: 15px;margin-top:-20px">GEICO NEW YORK INSURANCE COMPANY<br>P.O. Box 9520<br>Fredericksburg, VA 22403-9500</p><br>
					<p style="font-size: 15px;margin-top: 10px">Date Issued: {{ $initDay }}</p>
				</td>
				<td width="250">
					<h3 style="font-weight: bold; font-size: 32px;text-align:center">Declarations Page</h3>
					<p style="font-size: 12px;text-align:center;margin-top:-34px">This is a description of your coverage<br>Please retain for your records.</p>
					<p style="font-size: 22px;">Policy Number: {{ $policy }}<br>Coverage Period:<br>{{$initDaySt}} through {{$lateDaySt}}</p>
					<p style="font-size: 12px;margin-top:-24px">{{ $current_time }}. standard time at the address of the insured.</p>
				</td>
			</tr>
		</table>

		<table style="border-spacing: 0;margin-top: 0px;">
			<tr>
				<td width="240">
					<p style="font-size: 15px;margin-top:30px">{{ $request->name2 }}, {{ $request->name1 }}<br>{{ $request->address }}<br>{{ $request->city }}, {{ $request->state }} {{ $request->zip }}</p><br>
					<p style="font-size: 15px;margin-top:0px">Email Address:none</p><br>
				</td>
				<td width="310">
					<p><img src="{{public_path('/placas/'.$filename)}}" width="380" height="120" /></p>
				</td>
			</tr>
		</table>

		<table style="border-spacing: 0;margin-top: -10px;">
			<tr>
				<td width="250">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Insured</p>
				</td>
				<td width="350">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Additional Drivers</p>
				</td>
			</tr>
			<tr>
				<td width="250">
					<p style="font-size: 15px;margin-top:-10px">{{ $request->name2 }}, {{ $request->name1 }}</p>
				</td>
				<td width="350">
					<p style="font-size: 15px;font-weight:bold;margin-top:-10px">None</p>
				</td>
			</tr>
		</table>

		<table style="border-spacing: 0;margin-top: -20px;">
			<tr>
				<td width="120">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Vehicles</p>
				</td>
				<td width="130">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">VIN</p>
				</td>
				<td width="145">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Vehicle Location</p>
				</td>
				<td width="175">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Finace Company/<br>Lienholder</p>
				</td>
			</tr>
			<tr>
				<td width="120">
					<p style="font-size: 15px;margin-top:-10px">{{ $request->year }} {{ $request->make }}</p>
				</td>
				<td width="130">
					<p style="font-size: 15px;margin-top:-10px">{{ $request->vin }}</p>
				</td>
				<td width="145">
					<p style="font-size: 15px;margin-top:-10px">{{ $request->city }}, {{ $request->state }}</p>
				</td>
				<td width="175">
					<p style="font-size: 15px;margin-top:-10px"></p>
				</td>
			</tr>
		</table>

		<hr style="margin-top:-5px;margin-bottom:-15px;">

		<table style="border-spacing: 0;margin-top: -20px;">
			<tr>
				<td width="190">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Coverages*</p>
				</td>
				<td width="150">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold;text-align:center;padding-right:30px">Month /<br>Coverage</p>
				</td>
				<td width="170">
					<p style="font-size: 15px;text-decoration: underline;font-weight:bold">Total Months Paid</p>
				</td>
			</tr>
			<tr>
				<td width="190">
					<p style="font-size: 15px;margin-top:0px">Bcdily InjuryF Liability</p>
					<p style="font-size: 15px;margin-top:-10px">Each Person/Each Occurrence</p>
					<p style="font-size: 15px;margin-top:-10px">Property Damage Liability</p>
					<p style="font-size: 15px;margin-top:-10px">Medical Payments</p>
					<p style="font-size: 15px;margin-top:-10px">Uninsured & Underinsured Motorists</p>
					<p style="font-size: 15px;margin-top:-10px">Each Person/Each Occurrence</p>
					<p style="font-size: 15px;margin-top:-10px">Comprehensive</p>
				</td>
				<td width="150">
					<p style="font-size: 15px;margin-top:0px">
						@if($request->days == '30')
						1 MONTH COVERAGE
						@elseif($request->days == '60')
						2 MONTHS COVERAGE
						@elseif($request->days == '90')
						3 MONTHS COVERAGE
						@elseif($request->days == '120')
						4 MONTHS COVERAGE
						@elseif($request->days == '180')
						6 MONTHS COVERAGE
						@else
						1 YEAR COVERAGE
						@endif
					</p>
				</td>
				<td width="170">
					<p style="font-size: 15px;margin-top:0px">EVERY MONTHS PAID</p>
				</td>
			</tr>
		</table>

		<hr style="margin-top:-5px;margin-bottom:-15px;">

		<table style="border-spacing: 0;margin-top: -10px;">
			<tr>
				<td width="240">
					<div style="width:250px;padding:15px;margin-top:10px;border:1px solid black">
						<p style="font-size: 15px;">
							<strong>INSURED</strong><br>{{ $request->name2 }}, {{ $request->name1 }}<br>
							{{ $request->address }}<br>
							{{ $request->city }}, {{ $request->state }} {{ $request->zip }}
						</p>
					</div>
				</td>
				<td width="310">
					<p style="font-size: 15px;font-weight:bold;margin-top:100px"><img src="{{public_path('/placas/'.$filename)}}" width="380" height="120" /></p>
				</td>
			</tr>
		</table>

	</div>

</div>