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
<body style="padding:0px; ">
    <div class="div-master" style="height:55%; width:100%; ">
        <table style="padding:35px 75px 0px 75px;">
            <tr>
                <td width="50"><span style="text-align: left;   font-size:20px; font-family: 'Anton', sans-serif;font-weight:400;color:#000;" ><i>VIN</i>  </span></td>
                <td width="200"><span style="text-align: left;   font-size:20px; font-family: 'Anton', sans-serif;font-weight:400;color:#000;" ><i>{{$request->vin}}</i></span></td>
                <td width="100"><span style="text-align: left;   font-size:20px; font-family: 'Anton', sans-serif;font-weight:400;color:#000;" ><i>{{$request->model}}</i></span></td>
                <td width="150"><span style="text-align: left;   font-size:20px; font-family: 'Anton', sans-serif;font-weight:400;color:#000;" ><i>{{$request->major_color}}</i></span></td>
                <td width="50"><span style="text-align: left;   font-size:20px; font-family: 'Anton', sans-serif;font-weight:400;color:#000;" ><i>{{$request->year}}</i></span></td>
            </tr>
            <tr>
                <td width="50">
                    <span>
                        <img src="{{public_path('/img/logplaca1.png')}}" style="width: 120px; height:90px"/>
                    </span>
                </td>
                <td colspan="3"><span style="padding-left:75px; text-align: center; letter-spacing: 12px;  font-size:80px; font-family: 'Anton', sans-serif;font-weight:700;color:#000;" >MARYLAND</span></td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="3"><span style="background-color:#000; heigth:95px; margin-left:125px; font-size:50px; font-family: 'Roboto', sans-serif;font-weight:700; color:#fff;" >Exp: {{$initDay_Qr}}</span></td> 
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="4"><span style="margin-left:30px; text-align: center; font-size:170px;letter-spacing: 10px;  font-family: 'Anton', sans-serif;font-weight:700;color:#000;" >{{$tag_number}}</td>
            </tr>
        </table>
    </div>
    <div class="div-master" style=" height:30%; width:100%;padding:0px; ">
         <table style="width:100%; padding:0px 75px 0px 75px;">
            <tr style="border-bottom:3px solid #9C9C9C">
                <td colspan="4" style="margin-top:10px; "><span style="margin-left:198px; font-size:20px;letter-spacing: 0.7px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">SOLD BY: ENTERPRISE RAC COMPANY OF MARYLAND LLC</span></td>
            </tr>
            <tr>
                <td style="padding-top:5px; width:65px;"><span style="margin-top: 3px;">
                        <img src="{{public_path('/img/logplaca1.png')}}" style="width: 60px; height:30px"/>
                    </span></td>
                <td style="padding:5px; background-color:#000; width: 180px;">
                    <span style="text-align: left; font-size:15px; font-family: 'Roboto', sans-serif;font-weight:900; color:#fff;" >{{$tag_number}}<br>Exp: {{$initDay_Qr}}</span>
                    
                </td>
                <td style="width:100%; heigth:60px; padding:5px; text-align:center">
                    <span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">
                        Cut here --Keep this section with vehicule until registered and plated 
                        <br><strong>Maryland Tempory Registration Certificate (VR-007)</strong>
                        <br>Valid for {{$request->days. ' '}}days.
                    </span>
                    <!--span style="font-size:10px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Valid for 60 days </span-->
                </td>
                <td></td><td></td>
            </tr>
         </table>
         <table style="width:100%; padding:0px 75px 0px 75px; border: 1px solid #000;">
            <tr style="border:1px solid #000; background-color: #9C9C9C;">
                <td><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Vehicle and Owner Information</span></td>
                <td></td><td></td>
               <td></td><td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Year: {{$request->year}} </span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Make: {{$request->make}}</span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Model: {{$request->model}}</span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Color 1: {{$request->major_color}} </span></td>
                <td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">VIN: {{$request->vin}}</span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Odometer: 00000</span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">State to be titled: </span></td>
                <td style="border-left:1px solid #000; width:25%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Color: </span></td>
                <td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Owner: </span></td>
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Driver ID: </span></td>
                <td></td>
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">State Licensed: </span></td>
                <td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Co-Owner:{{$request->name1}}{{' '}}{{$request->name2}} </span></td>
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Driver ID: </span></td>
                <td style="border:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">State Licensed: </span></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td width="100%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Address of Purchaser(s) 
                {{ $request->address }} {{ $request->city.',' }} {{ $request->state }}{{ $request->zip }}</span></td>
                <td></td><td></td>
                <td></td><td></td>
            </tr>
            <tr style="border:1px solid #000; background-color: #9C9C9C;">
                <td><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Dealer and Insurance Information</span></td>
                <td></td><td></td>
                <td></td><td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Dealer Name:{{$request->seller}} </span></td>
                <td style="border-left:1px solid #000"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Dealer ID:{{$request->deler_number}}</span></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
         </table>
         <table style=" width:100%; padding:0px 75px 0px 75px; border: 0px solid #000">
            <tr>
                
                <td colspan="4"; width="100%">
                    <span style="text-align:justify; font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">
                      I certify under penalty of law that the vehicle noted on the face hereof is covered by at least the minimum amounts of insurance required by the Maryland Motor Vehicle Laws and that I have no
                          outstanding violations with the Motor Vehicle Administration. I further certify under penalty of perjury, that the statements made herein are true and correct to the best of my knowledge,
                          information and belief.
                    </span>
                </td>
                
                
            </tr>
            <tr style="border:1px solid #000; background:#9C9C9C">
                
                <td colspan="4"><span style="margin-left:420px; font-size:11px; font-family: 'Roboto', sans-serif;font-weight:bold; color:#000;">Signatures and Date</span></td>
                
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000; width:50%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Owner: </span></td>
                <td style="border-left:1px solid #000; width:50%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Dealership: </span></td>
                <td></td><td></td><td></td>
            </tr>
            <tr style="border:1px solid #000">
                <td style="border-left:1px solid #000; width:50%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Co-Owner: </span></td>
                <td style="border-left:1px solid #000; width:50%"><span style="font-size:11px; font-family: 'Roboto', sans-serif;font-weight:400; color:#000;">Date of Delivery: {{$initDay_Qr}}</span></td>
                <td></td><td></td><td></td>
            </tr>
        </table>
        
        
    </div>
    
</body>