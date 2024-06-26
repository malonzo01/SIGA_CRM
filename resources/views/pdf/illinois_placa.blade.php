<style>

    @page {
		margin:0px;
	}

	@font-face {
        font-family: 'Anton', sans-serif;
		src: url('/fonts/Anton_Regular.tff');
	}

	* {
		font-family: 'Anton', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
	}

	th {
		border-bottom: 1px solid black;
		border-collapse: collapse;
		font-weight: 400;
	}

	th,
	td {
		padding: 0px;
        vertical-align:top;
        height:20%;
	}

	table {
		border-collapse: collapse;
		padding: 0px;
	}

	table,
	tr,
	td {
		border: none;
        vertical-align:top;
        height:2%;
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
<body style="background-color: #f6c50d; padding:0px; ">
    <div class="div-master" style="height:60%; width:100%; ">
        <table style="height: 25%; margin-left:100px; margin-top:75px; margin-bottom:5px;">
            <tr><td colspan="3"><span style="font-family: 'Roboto', sans-serif;letter-spacing: 0em; font-weight:bold; font-size:3.8em;color:#000; text-align:center">ILLINOIS TEMPORARY PERMIT</span></td></tr>
            <tr>
                <td><span style="text-align: left;   font-size:1.2em; font-family: 'Anton', sans-serif;font-weight:700;color:#000;">VIN</span></td>
                <td><span style="margin-left:18px;   text-align: left; font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;color:#000;">YEAR</span></td>
                <td><span style="margin-left:-168px; text-align: left; font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;color:#000;">MAKE</span></td>
                <td><span style="margin-left:-208px; text-align: left; font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;color:#000;">MODEL</span></td>
                <td><span style="margin-left:-100px; text-align: left; font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;color:#000;">WEIGHT</span></td>
            </tr>
            <tr>
                <td><span>{{ $request->vin }}</span></td>
                <td><span style="margin-left:18px;">{{ $request->year }}</span></td>
                <td><span style="margin-left:-168px;">{{ $request->make }}</span></td>
                <td><span style="margin-left:-208px;">{{ $request->model }}</span></td>
                <td ><span style="margin-left:-100px;"></span></td>
            </tr>
            <tr><td colspan="3"><span style="font-size:150px; font-weight: bold; font-family: 'Anton', sans-serif;letter-spacing: 0em;color:#000; text-align:left">{{ $tag_number }}</span></td></tr>
            <tr><td><span style="font-family: 'Roboto', sans-serif;letter-spacing: 0em; font-weight:700; font-size:55px; color:#000;">Exp:</span></td>
                <td><span style="margin-left:-140px;font-family: 'Roboto', sans-serif;letter-spacing: 0em; font-weight:700; font-size:45px; color:#000;">{{ $lateDay_Qr }}</span></td></tr>
            <tr>
                <td><span style="text-align: left; font-size:18px; font-family: 'Anton', sans-serif;font-weight:700;color:#000;">DEALER</span></td>
                <td><span style="text-align: left; font-size:18px; font-family: 'Anton', sans-serif;font-weight:700;color:#000;">DLR#</span></td>
                <td><span style="margin-left:-200px;text-align: left; font-size:18px; font-family: 'Anton', sans-serif;font-weight:700;color:#000;">Issue Date</span></td>
                <td rowspan="2"><span><img src="data:image/png;base64,{{ base64_encode($dirImage)}}" style=" margin-left: -350px; width: 70px; height:70px"/></span>
			    </td>
            </tr>
            <tr>
                <td><span>{{ $request->seller }}</span></td>
                <td><span>{{ $request->deler_number }}</span></td>
                <td><span style="margin-left:-200px;">{{ $initDay_Qr }}</span></td>
            </tr>
        </table>
    </div>
    <div class="div-master" style=" height:20%; width:100%;margin-top:-1px;padding:0px; ">
        <table style=" border_top: 3px dashed #000;margin-top:0px;margin-bottom:0px;">
            <tr>
                <td style="width:50">
                    <span>
                        <img src="data:image/png;base64,{{ base64_encode($dirImage)}}" style=" margin-top:90px; margin-left: 10px; width: 55px; height:55px"/>
                    </span>
                </td>
                <td style="width:150.8; border-left: 0px dashed #000;">
                    <center>
                        <h4 style=" margin-top:10px; text-align: center; font-size:18px; padding: 0px ;color:#000;">Owner Copy Remove And Keep In Vehicle </h4>
                    </center>
                    <table style="margin-left:5%; margin-top:5px">
                        <tr>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif; font-weight:700;">VIN</td>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif; font-weight:700;">YEAR</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->vin }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->year }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">MAKE</td>
                            <td style="text-align:left; width:100.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">MODEL</td>
                            <td style="text-align:left; width:100.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">WEIGHT</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->make }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->model }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left; width:160.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">DEALER</td>
                            <td style="text-align:left; width:100.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">DLR #</td>
                            <td style="text-align:left; width:100.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">Issue Date</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->seller }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->deler_number }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $initDay_Qr }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">OWNER</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">ADDERSS</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->name1 }} <br>{{ $request->name2 }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->address }}
                                <br>{{ $request->city.',' }} {{ $request->state }}{{ $request->zip }}
                            </td>
                        </tr>
                    </table>
                    <table style="margin-left:5%; margin-top:15px">
                        <tr>
                            <td>
                                <center>
                                    <h4 style="margin-left:15px;  font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;">ILLINOIS TEMPORARY PERMIT</h4>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:150.8; border-left: 3px dashed #000; ">
                    <center>
                        <h4 style=" margin-top:10px; text-align: center; font-size:18px; padding: 0px ;color:#000;">Agent Copy Remove And Retain</h4>
                    </center>
                    <table style="margin-left:5%; margin-top:5px">
                        <tr>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif; font-weight:700;">VIN</td>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif; font-weight:700;">YEAR</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->vin }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->year }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; width:130.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">MAKE</td>
                            <td style="text-align:left; width:100.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">MODEL</td>
                            <td style="text-align:left; width:100.9px; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">WEIGHT</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->make }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->model }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;"></td>
                        </tr>
                        <tr>
                            <td style="text-align:left; width:160.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">DEALER</td>
                            <td style="text-align:left; width:100.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">DLR #</td>
                            <td style="text-align:left; width:100.9; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">Issue Date</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->seller }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->deler_number}}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $initDay_Qr }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">OWNER</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;font-weight:700;">ADDERSS</td>
                        </tr>
                        <tr>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->name1 }} <br>{{ $request->name2 }}</td>
                            <td style="text-align:left; font-size:0.8em; font-family: 'Roboto', sans-serif;">{{ $request->address }}
                                <br>{{ $request->city.',' }} {{ $request->state }}{{ $request->zip }}
                            </td>
                        </tr>
                    </table>
                    <table style="margin-left:8%;margin-top:15px;">
                        <tr>
                            <td>
                                <center>
                                    <h4 style="margin-left:15px;  font-size:1.2em; font-family: 'Roboto', sans-serif;font-weight:700;">ILLINOIS TEMPORARY PERMIT</h4>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width:50">
                    <span>
                        <img src="data:image/png;base64,{{ base64_encode($dirImage)}}" style="margin-top:90px; margin-left: 10px; width: 55px; height:55px"/>
                    </span>
                </td>
            </tr>
        </table>


    </div>

</body>
