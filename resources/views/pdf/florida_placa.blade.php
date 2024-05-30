<style>
	@page {
		margin-left: 0.4cm;
		margin-right: 0.4cm;
		margin-top: 2.5cm;
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

	.b {
		text-orientation: upright;
		color: black;
		font-weight: bold;
	}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	li {
		float: left;
		padding-right: 60px
	}
</style>

<div class="div-master" style="width:100%;margin-top:-20px;padding:0px 0px 40px 20px;">

	<table style="border-spacing: 0">
		<tr>
			<td width="790">
				<center>
					<h6 style="font-size:18px;margin-top:8px;color:#fff;font-weight:bold;background:#000;padding:8px 0px">FLORIDA DEPARTMENT OF HIGHWAY SAFETY AND MOTOR VEHICLES</h6>
				</center>
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;background:#000;margin-top: -54px;margin-bottom:3%;padding-bottom:150px">
		<tr>
			<td width="244">
			</td>
			<td width="204">
			</td>
			<td width="10">
			</td>
			<td width=" 106.4">
				<center>
					<h4 style="font-size:9px;padding:0px 0px 0px 0px;color:#fff;">MONTH</h4>
				</center>
			</td>
			<td width="106.4">
				<center>
					<h4 style="font-size:9px;padding:0px 0px 0px 0px;color:#fff;">DAY</h4>
				</center>
			</td>
			<td width="106.4">
				<center>
					<h4 style="font-size:9px;padding:0px 0px 0px 0px;color:#fff;">YEAR</h4>
				</center>
			</td>
			<td width="13">
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;background:transparent;margin-top: -320px;margin-bottom:-4%">
		<tr>
			<td width="244">
				<h6 style="font-size:15px;margin-top:8px;color:#000;font-weight:bold;background:#fff;margin:14px 18px 24px 25px;">
					DEALER<br><br>
					TOMMIE VAUGHN MOTORS, INC<br><br>
					P153181
				</h6>
			</td>
			<td width="204">
				<center>
					<h6 style="font-size:48px;margin-top:8px;color:#000;font-weight:bold;background:#fff;margin:10px 10px 20px 0px;letter-spacing: 0.01em;transform:scaleY(1.6);">FLORIDA</h6>
				</center>
			</td>
			<td width="10" style="padding-top:12px">
				<center>
					@foreach($chars as $char)
					<h4 style="font-size:9px;color:white;margin-top:-9.4px;">{{ $char }}</h4>
					@endforeach
				</center>
			</td>
			@foreach($date_header as $char_head)
			<td width="53.7" height="20">
				<center>
					<h4 style="font-size:52px;color:white;background:#fff;padding:0px 0px 0px 0px;color:#000;margin-top:60px;transform:scaleY(1.5);border:1px solid black">{{ $char_head }}</h4>
				</center>
			</td>
			@endforeach
			<td width="10" style="padding-top:12px">
				<center>
					@foreach($chars as $char)
					<h4 style="font-size:9px;color:white;margin-top:-9.4px;">{{ $char }}</h4>
					@endforeach
				</center>
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;background:#fff;padding-top:50px">
		<tr>
			<td width="730">
				<center>
					<h4 style="font-size:12em;font-family: 'Roboto', sans-serif;letter-spacing: 0em;transform: scale(1, 1.8);margin-top:-1%;">{{ $tag_number }}</h4>
				</center>
			</td>
			<td width="70">
				<h6 style="font-size:15px;margin-top:-40px;color:#000;font-weight:bold;position:absolute">
					DEALER
				</h6>
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;margin-top:-30%">
		<tr>
			<td width="158">
				<center>
					<h6 style="font-size:18px;color:#000;"><strong>VIN#</strong><br><span style="font-weight:400">{{ $request->vin }}</span></h6>
				</center>
			</td>
			<td width="158">
				<center>
					<h6 style="font-size:18px;color:#000;"><strong>COLOR</strong><br><span style="font-weight:400">{{ $request->major_color }}</span></h6>
				</center>
			</td>
			<td width="158">
				<center>
					<h6 style="font-size:48px;color:#000;font-weight:bold;letter-spacing: 0.01em;transform:scaleY(1.6);">FLORIDA</h6>
				</center>
			</td>
			<td width="158">
				<center>
					<h6 style="font-size:18px;color:#000;"><strong>MAKE</strong><br><span style="font-weight:400">{{ $request->make }}</span></h6>
				</center>
			</td>
			<td width="158">
				<center>
					<h6 style="font-size:18px;color:#000;"><strong>Control#</strong><br><span style="font-weight:400">{{ $request->vin }}</span></h6>
				</center>
			</td>
		</tr>
	</table>

	<table style="border-spacing: 0;margin-top:-7%">
		<tr>
			<td width="790">
				<center>
					<h6 style="font-size:15px;margin-top:8px;color:#fff;font-weight:bold;background:#000;padding:8px 0px">DIVISION OF MOTOR VEHICLES</h6>
				</center>
			</td>
		</tr>
	</table>

</div>