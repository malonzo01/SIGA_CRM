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
    span {
    margin-left:10px;
    display: block;
    text-align: left;
    font-size: 20px;
    font-family: 'Anton', sans-serif;
    font-weight: 400;
    color: #000;
    padding:5px;
    }

	
</style>
<body style="padding:0px; ">
    <div class="div-master" style="height:80%; width:100%; ">
        <table style="padding:55px 0px 0px 0px;">
            <tr>
                <td width="100%">
                    <img src="{{public_path('/img/placas/encabezadoColorado2.png')}}" style="width: 1300px; height:350px"/>
                    
                </td>
                
            </tr>
        </table>
        <table style=" width:100%; padding:55px 55px 0px 55px; border:1px solid #000;">
            <tr style="border:1px solid #000;">
                <td colspan="2">
                    <span>NAME</span>
                    <span>{{$request->name1.' '. $request->name2}}</span>
                </td>
                <td colspan="2" style="border-left:1px solid #000;">
                <span>PERMIT NUMBER</span>
                <span>{{$tag_number}}</span>
                </td>
            </tr>

            <tr style="border:1px solid #000;">
                <td colspan="4">
                    <span>BUSINESS ADDRESS</span>
                    <span>{{$request->address.' '.$request->city.', '.$request->state .' '.$request->zip}}</</span>
                </td>
                
            </tr>
            <tr style="border:1px solid #000;">
                <td>
                    <span>CITY</span>
                    <span>{{$request->address.' '.$request->city}}</span>
                </td>
                <td style="border-left:1px solid #000;">
                    <span>STATE</span>
                    <span>{{$request->state}}</span>
                </td>
                <td style="border-left:1px solid #000;">
                    <span> ZIP CODE</span>
                    <span>{{$request->zip}}</span>
                </td>
                <td style="border-left:1px solid #000;">
                    <span>DEALER TELEPHONE NUMBER</span>
                    <span>7195206240</span>
                </td>
            </tr>
        </table>
    </div>
    
    
</body>