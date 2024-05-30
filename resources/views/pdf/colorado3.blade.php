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
    span{
        font-size:13px;
    }

	
</style>
<body style="padding:0px; ">
    <div class="div-master" style="width:100%; ">
        <table style="padding-left:150px;">
            <tr>
                <td style="width:250px; padding:35px 25px 25px 25px;"><span><img src="{{public_path('/img/placas/logo3colorado.png')}}"></span></td>
                <td style="width:100px; padding-top:80px;"><span><img src="{{public_path('/placas/'.$filename)}}" width="140px" height="35px" /></span></td>
            </tr>
        </table>
            
        <table style="width:100%; padding-left:150px; ">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span style="display:block; font-size:12px; font-weight:bold;">Address:</span>
                                <span style="display:block; font-size:12px; font-weight:bold;">{{$request->address}}</span>
                                <span style="display:block; font-size:12px; font-weight:bold;">{{ $request->city}}</span>
                            </td>
                        </tr>
                        <tr>
                            <td><span style="font-size:12px; font-weight:bold;">{{$request->state.' '.$request->zip}}</span></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td><span>{{$initDate}}</span></td>
                        </tr>
                        <tr>
                            <td><span>Letter: L0073453674</span></td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>

        <table style="width:100%; padding-left:150px; padding-top:35px; ">
            <tr><td><span><img src="{{public_path('/img/placas/ondascolorado.png')}}" alt=""></span></td></tr>
        </table>
        <table style="width:100%; padding-left:150px; ">
            <tr><td style="padding-top:5px;">
                <span style="display:block;">{{$request->name1.' '.$request->name2}}</span>
                <span style="display:block;">{{$request->address.' '. $request->city.','.$request->state.' '.$request->zip}}</span>
            </td></tr>
        </table>

        <table style="border-bottom:2px solid #000; margin-left:40px; width:95%; padding: 50px 20px 10px 10px;">
            <tr>
                <td><span>COLORADO VEHICLE REGISTRARON</span></td>
                <td><span>Arapahoe</span></td>
                <td><span style="font-size:11px;">L0073453674</span></td>
            </tr>
        </table>

        <table style="width:95%; margin-left:40px; padding: 0px 20px 10px 10px;">
            <tr>
                <td><span style="font-size:12px">Vehicle</span></td>
                <td colspan="3"><span style="font-size:12px">Vin</span></td>
                <td><span style="font-size:12px">Plate</span></td>
                <td><span style="font-size:12px">Tab</span></td>
                <td><span style="font-size:12px">Expire</span></td>
            </tr>
            <tr>
                <td><span style="font-size:12px">Passenger</span></td>
                <td colspan="3"><span style="font-size:12px">{{$request->vin}}</span></td>
                <td><span style="font-size:12px">{{$tag_number}}</span></td>
                <td><span style="font-size:12px">0025294839</span></td>
                <td><span style="font-size:12px">{{$lateDate}}</span></td>
            </tr>
            <tr>
                <td><span style="font-size:12px">YEAR</span></td>
                <td><span style="font-size:12px">MAKE</span></td>
                <td><span style="font-size:12px">MODEL</span></td>
                <td colspan="3"><span style="font-size:12px">Fuel Type</span></td>
                <td><span style="font-size:12px">Body Style</span></td>
            </tr>
            <tr>
                <td><span>{{$request->year}}</span></td>
                <td><span>{{$request->make}}</span></td>
                <td><span>{{$request->model}}</span></td>
                <td colspan="3"><span>Gas</span></td>
                <td><span>{{$request->body_style}}</span></td>
            </tr>
            <tr>
                <td><span style="font-size:12px">COLOR</span></td>
                <td><span style="font-size:12px">Empty Weigth</span></td>
                <td><span style="font-size:12px">GVW</span></td>
                <td><span style="font-size:12px">GVWR</span></td>
                <td><span style="font-size:12px">GVW HIGH</span></td>
                <td><span style="font-size:12px">Bus Type</span></td>
                <td><span style="font-size:12px">Title Number</span></td>
            </tr>
            <tr>
                <td><span>{{$request->minor_color}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>006768435</span></td>
            </tr>
            <tr>
                <td><span>Purchase Date</span></td>
                <td><span>Fleet Number</span></td>
                <td><span>Unit Number</span></td>
                <td><span>HWT</span></td>
                <td><span>Carrier</span></td>
                <td><span>Miles</span></td>
                <td><span>Emission Expire</span></td>
            </tr>
            <tr>
                <td><span>{{$initDate}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>{{$lateDate}}</span></td>
            </tr>
        </table>
        <table style="width:95%; margin-left:40px; padding:0px 10px 10px 10px;">
            <tr>
                <td><span>Registered Owner</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>Dual Registration Type</span></td>
            </tr>
            <tr>
                <td><span>{{$request->name1.' '.$request->name2}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
            <tr>
                <td colspan="3"><span>Arapahoe - Littleton</span></td>
                <td><span>{{$initDate}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
        </table>
        <table style="width:90%; margin-left:40px; padding:0px 10px 10px 10px;" >
            <tr >
                <td colspan="7">
                    <span style="text-align:justify; font-weight:bold; font-size:12px;">
                        THIEVES HAVE BEEN KNOWN TO USE THE ADDRESS FROM A REGISTRATION CARD TO STEAL FROM THE
                        VEHICLE'S OWNER. FOR ADDED SECURITY, YOU ARE ENCOURAGED TO KEEP ONLY THIS REGlSTRATION CARD
                        IN YOUR VEHICLE- IT DOES NOT CONTAIN YOUR ADDRESS
                    </span>
                </td>
            </tr>
        </table>
        <table style="border-bottom:2px solid #000; margin-left:40px; width:95%; padding: 50px 20px 10px 10px;">
            <tr>
                <td><span>COLORADO VEHICLE REGISTRARON</span></td>
                <td><span>Arapahoe</span></td>
                <td><span style="font-size:11px;">L0073453674</span></td>
            </tr>
        </table>
        <table style="width:95%; margin-left:40px; padding: 0px 20px 10px 10px;">
            <tr>
                <td><span>Vehicle</span></td>
                <td colspan="3"><span>Vin</span></td>
                <td><span>Plate</span></td>
                <td><span>Tab</span></td>
                <td><span>Expire</span></td>
            </tr>
            <tr>
                <td><span>Passenger</span></td>
                <td colspan="3"><span>{{$request->vin}}</span></td>
                <td><span>{{$tag_number}}</span></td>
                <td><span>0025294839</span></td>
                <td><span>{{$lateDate}}</span></td>
            </tr>
            <tr>
                <td><span>YEAR</span></td>
                <td><span>MAKE</span></td>
                <td><span>MODEL</span></td>
                <td colspan="3"><span>Fuel Type</span></td>
                <td><span>Body Style</span></td>
            </tr>
            <tr>
                <td><span>{{$request->year}}</span></td>
                <td><span>{{$request->make}}</span></td>
                <td><span>{{$request->model}}</span></td>
                <td colspan="3"><span>Gas</span></td>
                <td><span>{{$request->body_style}}</span></td>
            </tr>
            <tr>
                <td><span>COLOR</span></td>
                <td><span>Empty Weigth</span></td>
                <td><span>GVW</span></td>
                <td><span>GVWR</span></td>
                <td><span>GVW HIGH</span></td>
                <td><span>Bus Type</span></td>
                <td><span>Title Number</span></td>
            </tr>
            <tr>
                <td><span>{{$request->minor_color}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>006768435</span></td>
            </tr>
            <tr>
                <td><span>Purchase Date</span></td>
                <td><span>Fleet Number</span></td>
                <td><span>Unit Number</span></td>
                <td><span>HWT</span></td>
                <td><span>Carrier</span></td>
                <td><span>Miles</span></td>
                <td><span>Emission Expire</span></td>
            </tr>
            <tr>
                <td><span>{{$initDate}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>{{$lateDate}}</span></td>
            </tr>
        </table>
         <table style="width:95%; margin-left:40px; padding:0px 10px 10px 10px;">
            <tr>
                <td><span>Registered Owner</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>Dual Registration Type</span></td>
            </tr>
            <tr>
                <td><span>{{$request->name1.' '.$request->name2}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
            <tr>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span>Dual Id Dual Expire</span></td>
            </tr>
            <tr>
                <td><span>{{$request->address.' '. $request->city.','.$request->state.' '.$request->zip}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
            <tr>
                <td colspan="3"><span>Arapahoe - Littleton</span></td>
                <td><span>{{$initDate}}</span></td>
                <td><span></span></td>
                <td><span></span></td>
            </tr>
        </table>
    </div>
    
    
</body>