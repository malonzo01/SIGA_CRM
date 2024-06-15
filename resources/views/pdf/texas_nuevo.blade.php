<style>
	@page {
		margin-left: 1.5cm;
		margin-right: 1.5cm;
		margin-top: 2cm;
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
		background: url('img/placas/IMG_20231208_143230_061.png');
		background-size: cover;
		background-repeat: no-repeat;
		background-position: top 86px;
		background-size: 670px 670px;
		padding-bottom: 170px;
	}
</style>

<div class="div-master">
	<center>
		<h3 style="border-bottom: 1px solid #000;">BUYER'S TAG RECEIPT - DEALER'S COPY</h3>
	</center>
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
					<p style="margin-top:-15px">{{ strtoupper($lateDay_MdY) }}</p>
				</td>
			</tr>
		</table>
	</div>
	<p>Give buyer's receipt to buyer. PLACE THIS DEALER'S COPY IN SALES FILE.<br>
		It is part of the sales records required to be kept and subject to inspection by TxDMV. Verify this information before distributing copies:</p>
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
	<center>
		<h3 style="font-weight: 400">DEALER'S COPY</h3>
	</center>
</div>

<div class="page_break"></div>

<div class="div-master">
	<center>
		<h3 style="border-bottom: 1px solid #000;">BUYER'S TAG RECEIPT - BUYER'S COPY</h3>
	</center>
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
					<p style="margin-top:-15px">{{ strtoupper($lateDay_MdY) }}</p>
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
	<center>
		<h3 style="font-weight: 400">BUYER'S COPY</h3>
	</center>
</div>
