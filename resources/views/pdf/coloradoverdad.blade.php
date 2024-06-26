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


</style>
<body style="padding:0px; ">
    <div class="div-master" style="height:80%; width:100%; ">
        <table>
            <tr>
                <td width="100%">
                    <img src="{{public_path('/img/placas/encabezadoColorado.png')}}" style="width: 1150px; height:120px"/>

                </td>

            </tr>
        </table>
        <table style=" width:100%; padding:35px 75px 0px 75px; border:3px solid #000;">
            <tr style="border:3px solid #000;">
                <td colspan="3"><span style="margin-left:100px; text-align: center; font-size:170px;letter-spacing: 10px;  font-family: 'Roboto', sans-serif;font-weight:400;color:#000;" >{{$tag_number}}</td>

            </tr>
            <tr>
                <td style="border:3px solid #000;">
                        <ul style="list-style:none; margin:0px; padding-left:5px; padding-bottom:50px; display:inline-block;">
                        <li style="font-size:9px;">E</li>
                        <li style="font-size:9px;">X</li>
                        <li style="font-size:9px;">P</li>
                        <li style="font-size:9px;">I</li>
                        <li style="font-size:9px;">R</li>
                        <li style="font-size:9px;">E</li>
                        </ul>
                        <span style=" display:inline-block; vertical-align:middle; font-size:140px; font-family: 'Anton', sans-serif;font-weight:bold;color:#000;" >{{$monthDateLast}}</span>
                        <span style="display:block; margin-left:150px; margin-top:-50px;padding-top:-50px; font-size: 13px; font-weight:bold;">MONTH</span>
                </td>
                <td style="border:3px solid #000;">
                    <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:50px; display:inline-block;">
                    </ul>
                    <span style=" display:inline-block; margin-left:25px; vertical-align:middle;text-align: center; font-size:145px; font-family: 'Anton', sans-serif;font-weight:bold;color:#000;">{{$lateDay}}</span>
                    <span style="display:block; margin-left:100px; margin-top:-50px;padding-top:-50px;font-size: 13px; font-weight:bold;">DAY</span>
                </td>
                <td style="border:3px solid #000;">
                    <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:50px; display:inline-block;">
                    </ul>
                    <span style=" display:inline-block; vertical-align:middle; text-align: center; font-size:145px; font-family: 'Anton', sans-serif;font-weight:bold;color:#000;" >{{$lateAnio}}</span>
                    <span style="display:block; margin-left:150px; margin-top:-50px;padding-top:-50px; font-size: 13px; font-weight:bold;">YEAR</span>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                        <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:2px; display:inline-block;">
                        <li style="font-size:9px;">V</li>
                        <li style="font-size:9px;">I</li>
                        <li style="font-size:9px;">N</li>
                        </ul>
                    <span style=" display:inline-block; vertical-align:middle; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#000;" >{{$request->vin}}</span>
                </td>
                <td style="border:3px solid #000;">
                        <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:1px; display:inline-block;">
                        <li style="font-size:8px;">C</li>
                        <li style="font-size:8px;">O</li>
                        <li style="font-size:8px;">L</li>
                        <li style="font-size:8px;">O</li>
                        <li style="font-size:8px;">R</li>
                        </ul>
                    <span style=" display:inline-block; margin-left: 75px; vertical-align:middle; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#000;" >{{$request->major_color}}<span>
                </td>
            </tr>
            <tr>
                <td style="border:3px solid #000;">
                        <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:2px; display:inline-block;">
                        <li style="font-size:9px;">Y</li>
                        <li style="font-size:9px;">E</li>
                        <li style="font-size:9px;">A</li>
                        <li style="font-size:9px;">R</li>
                        </ul>
                    <span style=" display:inline-block; margin-left: 75px; vertical-align:middle; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#000;" >{{$request->year}}</span>
                </td>
                <td style="border:3px solid #000;">
                        <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:2px; display:inline-block;">
                        <li style="font-size:9px;">M</li>
                        <li style="font-size:9px;">A</li>
                        <li style="font-size:9px;">K</li>
                        <li style="font-size:9px;">E</li>
                        </ul>
                    <span style="display:inline-block; vertical-align:middle; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#000;" >{{$request->make}}</span>
                </td>
                <td style="border:3px solid #000;">
                <ul style="list-style:none; margin:0px; padding-left:5px;padding-bottom:2px; display:inline-block;">
                        <li style="font-size:9px;">B</li>
                        <li style="font-size:9px;">O</li>
                        <li style="font-size:9px;">D</li>
                        <li style="font-size:9px;">Y</li>
                        </ul>
                    <span style="display:inline-block; margin-left: 65px; vertical-align:middle; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#000;" >{{$request->model}}</span>
                </td>
            </tr>
        </table>
    </div>


</body>
