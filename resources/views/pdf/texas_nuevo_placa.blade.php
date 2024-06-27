<style>
	@page {
		margin-left: 0.4cm;
		margin-right: 0.5cm;
		margin-top: 3.5cm;
		margin-bottom: 0cm;
	}

	@font-face {
		font-family: Helvetica;
		src: url('/fonts/Helvetica-Narrow.tff');
	}

	* {
		font-family: Helvetica;
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

	.div-master {
		background: url('img/placas/IMG_20231209_101020_671.png');
		background-size: cover;
		background-repeat: no-repeat;
		background-size: 1100px 580px;
	}

	.b {
		text-orientation: upright;
		color: white;
		font-weight: bold;
	}
</style>

<div class="div-master" style="width:100%; margin-bottom:20px;margin-top:-20px;padding:0px 0px 0px 50px;">
	<table style="border-spacing: 0;">
		<tr>
			<td width="100">
				<h6 style="font-size:44px;margin-top:-8px;">TEXAS</h6><br>
				<h6 style="font-size:44px;margin-top:-134px;">BUYER</h6>
			</td>
			<td width="440">
				<center>
					<h6 style="font-size:44px;margin-top:86px;">EXPIRES</h6><br>
					<h4 style="font-size:5.5em;margin-top:-140px;white-space: pre;">{{ strtoupper($lateDay_MdY) }}</h4>
				</center>
			</td>
			<td width="100">
                <!--
                <p style="margin-top:0px">
                    <img src="{{ public_path('/placas/' . $filename) }}" style="margin-right:0px;"
                        width="200" height="80" />
                </p>
                -->
				<p style="margin-top:0px;">
					<img src="data:image/png;base64,{{ base64_encode($dirImage)}}" width="130" />
				</p>

			</td>
		</tr>
	</table>
	<table style="border-spacing: 0;margin-bottom: -600px;">
		<tr>
			<td width="700">
				<center>
					<h4 style="font-size:12em;margin-top:-174px;letter-spacing: 0.01em;">{{ $tag_number }}</h4>
				</center>
			</td>
		</tr>
	</table>
	<table style="border-spacing: 0;">
		<tr>
			<td width="390">
				<h6 style="font-size:44px;margin-top:20px;">{{ $request->year }}</h6><br>
				<h6 style="font-size:44px;margin-top:-134px;">{{ $request->make }}</h6>
			</td>
			<td width="100">&nbsp;</td>
			<td width="100">
				<h6 style="font-size:26px;margin-top:0px; padding-top:50px">{{ $request->vin }}</h6><br>
				<h6 style="font-size:26px;margin-top:-80px;">TOMMIE VAUGHN</h6><br>
				<h6 style="font-size:26px;margin-top:-80px;">MOTORS, INC.</h6>
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;color:white;position:absolute;margin-top:-54%;margin-left:50.4%">
		<tr>
			<td width="700">
				<center>
					@foreach($chars as $char)
					<h4 style="font-size:38px;color:white;margin-bottom:-55px">{{ $char }}</h4>
					@endforeach
				</center>
			</td>
		</tr>
	</table>

</div>
