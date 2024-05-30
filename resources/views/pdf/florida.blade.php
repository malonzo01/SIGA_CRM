<style>
	@page {
		margin-left: 1.2cm;
		margin-right: 1.2cm;
		margin-top: 0.2cm;
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
		background-image: url("img/placas/fondo.png");
       /* background: url("{{url('img/placas/fondo.png')}}");*/
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top center;
		/*background-size: 350px 160px;
        padding-bottom: 170px;*/
		background-size: 850px 850px;
		padding-bottom: 170px;
       
	}
</style>

<div class="div-master">
	<table style="border-spacing: 0;">
		<tr>
			<td width="480">
			</td>
			<td width="100">
				<p style="padding-top:35px">
					<img src="data:image/png;base64,{{ base64_encode($dirImage)}}" width="65" />

				</p>
			</td>
		</tr>
	</table>

	<center>
		<h3 style="font-size:13px;margin-top:30px;text-decoration: underline;">DEALER ISSUED IN-TRANSIT CERTIFICATE</h3>
	</center>

	<center>
		<h3 style="font-size:13px;margin-top:20px;font-weight:400">ISSUED BY: TOMMIE VAUGHN MOTORS, INC</h3>
	</center>

	<center>
		<h3 style="font-size:13px;margin-top:30px;">FLORIDA</h3>
	</center>

	<h3 style="font-size:13px;margin-top:10px;margin-left:120px">PERMIT NO. X04591796</h3>

	<table style="border-spacing: 0;">
		<tr>
			<td width="223">
				<h3 style="font-size:13px;margin-top:30px;">PLATE N°: {{ $tag_number }}</h3>
				<h3 style="font-size:13px;margin-top:14px;font-weight:400">VEHICLE YEAR: {{ $request->year }}</h3>
				<h3 style="font-size:13px;margin-top:14px;font-weight:400">MAKE/MOD: {{ $request->make }}/{{ $request->model }}</h3>
				<h3 style="font-size:13px;margin-top:14px;font-weight:400">COLOR: {{ $request->major_color }}</h3>
				<h3 style="font-size:13px;margin-top:14px;text-decoration: underline;">TEMPORARY INSURED BY:</h3>
				<h3 style="font-size:13px;margin-top:-4px;">ISSUED BY: TOMMIE VAUGHN MOTORS, INC</h3>
				<h3 style="font-size:13px;margin-top:-12px;">POLICY NO: P864253</h3>
				<h3 style="font-size:13px;margin-top:-10px;">COMPANY CODE/NAIC: N/A</h3>
				<h3 style="font-size:13px;margin-top:14px;text-decoration: underline;">OWNER (S) OF THE ABOVE VEHICLE</h3>
				<h3 style="font-size:13px;margin-top:14px;font-weight:400">
					<strong>NAME:</strong> {{ $request->name1 }} {{ $request->name2 }}<br>
					{{ $request->address }} <br>{{ $request->city }}, {{ $request->state }} <br>{{ $request->zip }}
				</h3>
			</td>
			<td width="80">
				<center>
					<h3 style="font-size:15px;margin-top:-165%;font-weight:400">CLASS/CAT:A</h3>
					<h3 style="font-size:15px;margin-top:0px;font-weight:400">TITLE N/A NO</h3>
				</center>
			</td>
			<td width="223">
				<h3 style="font-size:13px;margin-top:-28%;margin-left:60px;font-weight:400">
					<strong>VIN:</strong> {{ $request->vin }}<br><br>
					<strong>EXPIRATION:</strong> {{ strtoupper($lateDay) }}
				</h3><br>
				<h3 style="font-size:13px;margin-top:-9px;margin-left:60px;font-weight:400">
					I ___________________have<br>
					Receive an intransit certificate<br>
					For the above vehicle
				</h3><br>
				<h3 style="font-size:13px;margin-top:-9px;margin-left:60px;font-weight:700">
					<strong>CERTIFICATE ISSUED BY</strong>
				</h3><br>
				<h3 style="font-size:13px;margin-top:-9px;margin-left:60px;font-weight:400">
					TOMMIE VAUGHN MOTORS, INC<br>
					AUTO DEALER<br>
					PERMIT NO. X04591796
				</h3>
			</td>
		</tr>
	</table>

</div>

<!-- <div class="page_break"></div>

<div class="div-master">
    <center><h3 style="border-bottom: 1px solid #000;">BUYER'S TAG RECEIPT - BUYER'S COPY</h3></center>
    <div style="width:100%; margin-bottom:20px;margin-top:-20px;">
        <table style="border-spacing: 0;">
                <tr>
                    <td width="128">
                        <p>Tag Number:</p>
                    </td>
                    <td width="128">
                        <p>{{ $tag_number }}</p>
                    </td>
                    <td width="128">
                        <p>Date of Sale:</p>
                    </td>
                    <td width="128">
                        <p>{{ strtoupper($initDay) }}</p>
                    </td>
                </tr>
                <tr>
                    <td width="128">
                        &nbsp;
                    </td>
                    <td width="128">
                        &nbsp;
                    </td>
                    <td width="128">
                        <p style="margin-top:-15px">Expiration Date:</p>
                    </td>
                    <td width="128">
                        <p style="margin-top:-15px">{{ strtoupper($lateDay) }}</p>
                    </td>
                </tr>
        </table>
    </div>
    <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="128">
                    <p>Issue Date:</p>
                    <p style="margin-top:-15px">VIN:</p>
                    <p style="margin-top:-15px">Year:</p>
                </td>
                <td width="128">
                    <p>{{ $initDay }}</p>
                    <p style="margin-top:-15px">{{ $request->vin }}</p>
                    <p style="margin-top:-15px">{{ $request->year }}</p>
                </td>
                <td width="128">
                    <p>&nbsp;</p>
                    <p style="margin-top:-15px">&nbsp;</p>
                    <p style="margin-top:-15px">Body Style:</p>
                </td>
                <td width="128">
                    <p>&nbsp;</p>
                    <p style="margin-top:-15px">&nbsp;</p>
                    <p style="margin-top:-15px">{{ $request->body_style }}</p>
                </td>
            </tr>
            <tr>
                <td width="128">
                    <p style="margin-top:-15px;">Make:</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">{{ $request->make }}</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">Model:</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">{{ $request->model }}</p>
                </td>
            </tr>
            <tr>
                <td width="128">
                    <p style="margin-top:-15px;">Major Color:</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">{{ $request->major_color }}</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">Minor Color:</p>
                </td>
                <td width="128">
                    <p style="margin-top:-15px;">{{ $request->minor_color }}</p>
                </td>
            </tr>
    </table>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td width="278">
                    <p style="margin-left:50px">Issuing Dealer:</p>
                </td>
                <td width="278">
                    <p>TOMMIE VAUGHN MOTORS, INC.</p>
                </td>
            </tr>
            <tr>
                <td width="278">
                    <p style="margin-left:50px;margin-top:-15px;">Dealer Number:</p>
                </td>
                <td width="278">
                    <p style="margin-top:-15px;">{{ $request->deler_number }}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td width="278">
                    <p style="margin-left:50px">Purchaser:</p>
                </td>
                <td width="278">
                    <p>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td width="278">
                    <p style="margin-left:50px;margin-top:-15px;">Name 1:</p>
                </td>
                <td width="278">
                    <p style="margin-top:-15px;">{{ $request->name1 }} {{ $request->name2 }}</p>
                </td>
            </tr>
            <tr>
                <td width="278">
                    <p style="margin-left:50px;margin-top:-15px;">Address:</p>
                </td>
                <td width="278">
                    <p style="margin-top:-15px;">{{ $request->address }} <br>{{ $request->city }}, {{ $request->state }} <br>{{ $request->zip }}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <center>
    <p style="text-align:left;margin-left:80px">BUYER is required to keep this receipt in the vehicle until vehicle is.<br>
    registered and metal plates are placed on the vehicle.</p>
    </center>
    <center><h3 style="font-weight: 400">BUYER'S COPY</h3></center>
</div> -->