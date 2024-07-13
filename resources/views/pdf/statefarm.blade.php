<style>
	@page {
		margin-left: 0.5cm;
		margin-right: 0.5cm;
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

	<div style="width:100%;margin-top: -20px;">

		<p style="position:absolute"><strong><span style="color: rgb(226, 80, 65);"><span style="font-size: 21px; font-family: Arial, Helvetica, sans-serif;">Insurance Identification Card - State Farm</span></span></strong></p>
		<table style="border-spacing: 0;margin-top: 0px;">
			<tr>
				<td width="75">
					<p><strong><span style="font-size: 9.5px;">FAX INSTRUCTIONS:&nbsp;</span></strong></p>
				</td>
				<td width="400">
					<br><br>
					<ol>
						<li style="font-weight: bold; font-size: 9px;"><strong>The entire page must be faxed.</strong></li>
						<li style="font-weight: bold; font-size: 9px;"><strong>If submitted to DMV, either the entire page or the second ID card will be retained.</strong></li>
						<li style="font-weight: bold; font-size: 9px;"><strong>A faxed ID card must be replaced with a scannable ID card within 14 days of the effective date.</strong></li>
						<li style="font-weight: bold; font-size: 9px;"><strong>DMV will not accept a faxed ID card without a scannable barcode.</strong></li>
					</ol>
				</td>
			</tr>
		</table>
		<hr style="margin-top:-10px;margin-bottom:-10px;">
		<table style="border-spacing: 0;margin-top: 0px;">
			<tr>
				<td>
					<p style="font-size: 8px;">THIS ID CARD MUST BE CARRIED IN THE INSURED VEHICLE FOR PRODUCTION UPON DEMAND</p>
					<ul style="margin-top:-10px;margin-left:-25px">
						<li style="font-size: 8px;"><strong>WARNING:</strong> Any person who issues ar produces an 1D card knowing that an Owner&apos;s Policy of Insurance is nat in effect may be committing a misdemeanor. In addition, a person who presents an 1D card if insurance &iexcl;is not in effect may be committing a misdemeanor. The name of the registrant and the name of the insured must coincide.</li>
						<li style="font-size: 8px;">REPLACEMENT VEHICLE NOTATION: DMV WILL ONLY PROCESS A VEHICLE CHANGE (RE-REGISTRATION) USING THE REPLACED VEHICLE&apos;S CURRENT REGISTRATION.</li>
						<li style="font-size: 8px;"><strong>IMPORTANT NOTICE:</strong> This temporary card will be replaced by a card lo be issued by the insurance company named on the card. Ifyou do not receive a replacement permanent card prior to the expiration of this card, contact your insurance company or agent.</li>
						<li style="font-size: 8px;"><strong>IF YOU HAVE AN ACCIDENT - NOTIFY POLICE IMMEDIATELY</strong> - 1) Get names, addresses, and phone numbers of persons involved and witnesses. Also get driver license numbers of persons involved and license plate numbers/states of vehicles. 2) Don&apos;t admit fault ar discuss the accident with anyone but State Farm or police. 3) Promptly notify your&nbsp;<span style="font-size: 10px;">agent, log on to statefarm.com&eacute;, or visil your State Farm mobile app to file a claim.</span></li>
					</ul>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -25px;">
			<tr>
				<td width="65">
					<p style="font-size: 12px;">FS-21</p>
				</td>
				<td width="320">
					<p style="font-size: 12px;"><strong>INSURANCE STATE IDENTIFICATION CARD</strong></p>
				</td>
				<td width="70" rowspan="2">
					<p style="font-size: 12px;"><img src="{{public_path('img/logo_state.png')}}" width="40"/></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -50px;">
			<tr>
				<td width="65">
					<p style="font-size: 12px;">328</p>
				</td>
				<td width="320">
					<p style="font-size: 12px;">STATE FARM MUTUAL AUTOMOBILE INSURANCE COMPANY</p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -5px;">
			<tr>
				<td width="250" style="border-right: 1px solid red;">
					<p style="font-size: 11px; margin-top: -10px;">An authorized INSURANCE insurer has issued an Owner&apos;s Policy of</p>
					<p style="font-size: 11px; margin-top:-10px">Liability Insurance complying with Article 6 (Motor Vehicle Financial</p>
					<p style="font-size: 11px; margin-top:-10px">Security Act) af the INSURANCE Vehicle and Traffic lawto:&nbsp;</p>
					<p style="margin-top:-6px"><strong style="font-size: 13px;"><span style="font-size: 11px;">Policy Number:</span> {{ $policy }}&nbsp;</strong></p>
					<p style="font-size: 13px;margin-top:-3px">{{ $request->name1 }} {{ $request->name2 }}</p>
					<p style="font-size: 13px;margin-top:-16px">{{ $request->address }}</p>
					<p style="font-size: 13px;margin-top:-16px">{{ $request->city }}, {{ $request->state }} {{ $request->zip }}</p>
				</td>
				<td width="130" style="padding-left:5px;margin-top: -130px;">
					<p><span style="color: rgb(226, 80, 65); font-size: 11px;"><strong>Effective Date</strong></span></p>
					<p style="margin-top:-14px"><span style="color: rgb(0, 0, 0); font-size: 9px;">(Not acceptable to obtain registration after</span></p>
					<p style="margin-top:-15px"><span style="color: rgb(0, 0, 0); font-size: 9px;">45 days from effective date.)</span></p>
					<p style="margin-top:-15px"><span style="color: rgb(0, 0, 0); font-size: 13px;"><strong>{{ $initDay_Qr_time }}</strong></span></p>
					<p style="margin-top:-15px"><span style="color: rgb(226, 80, 65); font-size: 11px;"><strong>Expiration Date</strong></span></p>
					<p style="margin-top:-16px"><span style="color: rgb(0, 0, 0); font-size: 13px;"><strong>{{ $lateDay_Qr_time }}</strong></span></p>
				</td>
				<td width="220" style="border-left: 1px solid red;padding-left:20px">
					<p><span style="font-size: 13px;">Name &amp; Address of Issuer</span></p>
					<p style="margin-top:-6px"><span style="font-size: 13px;">State Farm Mutual Automobile</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Insurance Company</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">PO Box 2358</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Bloominaton, IL 61702-2358</span></p>
					<p style="margin-top:-14px"><span style="font-size: 10px;">Applicable with respect to the following Motor Vehicle:</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Year &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Make</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;"><span style="font-size: 13px;">{{ $request->year }} &nbsp; &nbsp; &nbsp;{{ $request->make }}</span></span></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -15px;background:white;width:100%">
			<tr>
				<td width="250">
					<p style="font-size: 14px;margin-top:-3px">AGENT: CABRAL, EDWIN</p>
					<p style="font-size: 14px;margin-top:-17px">PHONE# 718-847-4747</p>
					<p style="font-size: 14px;margin-top:-17px;"><strong>For Emergency Road Service call 1-877-627-5757</strong></p>
				</td>
				<td width="130" style="padding-left:5px">

				</td>
				<td width="220" style="padding-left:20px">
					<p style="margin-top:-14px"><span style="font-size: 10px;">Vehicle Identification Number</span></p>
					<p style="margin-top:-14px"><span style="font-size: 11px;"><span style="font-size: 13px;">{{ $request->vin }}</span></span></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -10px;background:white;width:100%">
			<tr>
				<td width="600">
					<p><img src="{{public_path('/placas/'.$filename)}}" width="400" height="70" /></p>
					<center>
						<p style="margin-top:-10px;font-size: 12px;"><strong>PLEASE DO NOT FOLD CARD ON THE BARCODE</strong></p>
					</center>
					<hr>
				</td>
			</tr>
		</table>
	</div>

</div>
<div class="div-master1">

	<div style="width:100%;margin-top: -10px;">

		<table style="border-spacing: 0;margin-top: 0px;">
			<tr>
				<td>
					<p style="font-size: 8px;">THIS ID CARD MUST BE CARRIED IN THE INSURED VEHICLE FOR PRODUCTION UPON DEMAND</p>
					<ul style="margin-top:-10px;margin-left:-25px">
						<li style="font-size: 8px;"><strong>WARNING:</strong> Any person who issues ar produces an 1D card knowing that an Owner&apos;s Policy of Insurance is nat in effect may be committing a misdemeanor. In addition, a person who presents an 1D card if insurance &iexcl;is not in effect may be committing a misdemeanor. The name of the registrant and the name of the insured must coincide.</li>
						<li style="font-size: 8px;">REPLACEMENT VEHICLE NOTATION: DMV WILL ONLY PROCESS A VEHICLE CHANGE (RE-REGISTRATION) USING THE REPLACED VEHICLE&apos;S CURRENT REGISTRATION.</li>
						<li style="font-size: 8px;"><strong>IMPORTANT NOTICE:</strong> This temporary card will be replaced by a card lo be issued by the insurance company named on the card. Ifyou do not receive a replacement permanent card prior to the expiration of this card, contact your insurance company or agent.</li>
						<li style="font-size: 8px;"><strong>IF YOU HAVE AN ACCIDENT - NOTIFY POLICE IMMEDIATELY</strong> - 1) Get names, addresses, and phone numbers of persons involved and witnesses. Also get driver license numbers of persons involved and license plate numbers/states of vehicles. 2) Don&apos;t admit fault ar discuss the accident with anyone but State Farm or police. 3) Promptly notify your&nbsp;<span style="font-size: 10px;">agent, log on to statefarm.com&eacute;, or visil your State Farm mobile app to file a claim.</span></li>
					</ul>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -25px;">
			<tr>
				<td width="65">
					<p style="font-size: 12px;">FS-21</p>
				</td>
				<td width="320">
					<p style="font-size: 12px;"><strong>INSURANCE STATE IDENTIFICATION CARD</strong></p>
				</td>
				<td width="70" rowspan="2">
					<p style="font-size: 12px;"><img src="{{public_path('img/logo_state.png')}}" width="40"/></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -50px;">
			<tr>
				<td width="65">
					<p style="font-size: 12px;">328</p>
				</td>
				<td width="320">
					<p style="font-size: 12px;">STATE FARM MUTUAL AUTOMOBILE INSURANCE COMPANY</p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -5px;">
			<tr>
				<td width="250" style="border-right: 1px solid red;">
					<p style="font-size: 11px; margin-top: -10px;">An authorized INSURANCE insurer has issued an Owner&apos;s Policy of</p>
					<p style="font-size: 11px; margin-top:-10px">Liability Insurance complying with Article 6 (Motor Vehicle Financial</p>
					<p style="font-size: 11px; margin-top:-10px">Security Act) af the INSURANCE Vehicle and Traffic lawto:&nbsp;</p>
					<p style="margin-top:-6px"><strong style="font-size: 13px;"><span style="font-size: 11px;">Policy Number:</span> {{ $policy }}&nbsp;</strong></p>
					<p style="font-size: 13px;margin-top:-3px">{{ $request->name1 }} {{ $request->name2 }}</p>
					<p style="font-size: 13px;margin-top:-16px">{{ $request->address }}</p>
					<p style="font-size: 13px;margin-top:-16px">{{ $request->city }}, {{ $request->state }} {{ $request->zip }}</p>
				</td>
				<td width="130" style="padding-left:5px;margin-top: -130px;">
					<p><span style="color: rgb(226, 80, 65); font-size: 11px;"><strong>Effective Date</strong></span></p>
					<p style="margin-top:-14px"><span style="color: rgb(0, 0, 0); font-size: 9px;">(Not acceptable to obtain registration after</span></p>
					<p style="margin-top:-15px"><span style="color: rgb(0, 0, 0); font-size: 9px;">45 days from effective date.)</span></p>
					<p style="margin-top:-15px"><span style="color: rgb(0, 0, 0); font-size: 13px;"><strong>{{ $initDay_Qr_time }}</strong></span></p>
					<p style="margin-top:-15px"><span style="color: rgb(226, 80, 65); font-size: 11px;"><strong>Expiration Date</strong></span></p>
					<p style="margin-top:-16px"><span style="color: rgb(0, 0, 0); font-size: 13px;"><strong>{{ $lateDay_Qr_time }}</strong></span></p>
				</td>
				<td width="220" style="border-left: 1px solid red;padding-left:20px">
					<p><span style="font-size: 13px;">Name &amp; Address of Issuer</span></p>
					<p style="margin-top:-6px"><span style="font-size: 13px;">State Farm Mutual Automobile</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Insurance Company</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">PO Box 2358</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Bloominaton, IL 61702-2358</span></p>
					<p style="margin-top:-14px"><span style="font-size: 10px;">Applicable with respect to the following Motor Vehicle:</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;">Year &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Make</span></p>
					<p style="margin-top:-14px"><span style="font-size: 13px;"><span style="font-size: 13px;">{{ $request->year }} &nbsp; &nbsp; &nbsp;{{ $request->make }}</span></span></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -15px;background:white;width:100%">
			<tr>
				<td width="250">
					<p style="font-size: 14px;margin-top:-3px">AGENT: CABRAL, EDWIN</p>
					<p style="font-size: 14px;margin-top:-17px">PHONE# 718-847-4747</p>
					<p style="font-size: 14px;margin-top:-17px;"><strong>For Emergency Road Service call 1-877-627-5757</strong></p>
				</td>
				<td width="130" style="padding-left:5px">

				</td>
				<td width="220" style="padding-left:20px">
					<p style="margin-top:-14px"><span style="font-size: 10px;">Vehicle Identification Number</span></p>
					<p style="margin-top:-14px"><span style="font-size: 11px;"><span style="font-size: 13px;">{{ $request->vin }}</span></span></p>
				</td>
			</tr>
		</table>
		<table style="border-spacing: 0;margin-top: -10px;background:white;width:100%">
			<tr>
				<td width="600">
					<p><img src="{{public_path('/placas/'.$filename)}}" width="400" height="70" /></p>
					<center>
						<p style="margin-top:-10px;font-size: 12px;"><strong>PLEASE DO NOT FOLD CARD ON THE BARCODE</strong></p>
					</center>
					<hr>
				</td>
			</tr>
		</table>
	</div>

</div>

