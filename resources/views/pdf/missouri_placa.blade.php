    <style>
        @page {
            margin-left: 0cm;
            margin-right: 0cm;
            margin-top: 1cm;
            margin-bottom: 0cm;
        }

        @font-face {
            font-family: 'Trebuchet';
            src: url('/fonts/Trebuchet.ttf') format('truetype'),
                url('/fonts/Trebuchet.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;

        }

        * {
            font-family: Arial;
            Arial,
            Helvetica,
            font-family: Trebuchet, sans-serif;
        }

        table,
        th,
        td,
        p,
        div,
        b {
            margin: 0;
            padding: 0
        }

        th {
            border-spacing: 1em 10px;
            border-collapse: separate;
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

            background-image: url('img/placas/missouri.png');
            /* The image used */
            background-size: 900px 580px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */

        }
        .div-master-2 {
            background-image: url('img/placas/missouri.png');
            /* The image used */
            background-size: 230px 134px;
            /* You must set a specified height */
            background-position: left center;
            /* Center the image */
            background-repeat: repeat-x;
            /* Do not repeat the image */

        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
    </style>
<div class="div-master-2" style="width:100%;padding:0px 0px 0px 40px;border: 1px solid black;">
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;background-color: black;">
            <th width="760">
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color:white ;margin-top:0px;margin-bottom:0px;;">TEMPORARY PERMIT RECEIPT - MUST BE KEPT WITH VEHICLE</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">Year</h4>
            </th>
            <th width="150">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">{{ $request->year }}</h4>
            </th>
            <th width="50">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">Make</h4>
            </th>
            <th width="80">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">{{ $request->make }}</h4>
            </th>
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">Name</h4>
            </th>
            <th width="280">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">{{ $request->name1 }} {{ $request->name2 }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">VIN #</h4>
            </th>
            <th width="280">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $request->vin }}</h4>
            </th>
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Address</h4>
            </th>
            <th width="280">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $request->address }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Permit Number</h4>
            </th>
            <th width="660">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $tag_number }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Date Permit Issued</h4>
            </th>
            <th width="280">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $initDaySt }}</h4>
            </th>
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Telephone Number</h4>
            </th>
            <th width="280">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $request->phone }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Date Permit Expires</h4>
            </th>
            <th width="160">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{ $lateDaySt }}</h4>
            </th>
            <th width="500" >
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Ihereby certify that the statement(s) herein are true to the bert of my knowledge. Falso Certify that I have a</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">Issuer Name</h4>
            </th>
            <th width="160">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">{{$request->seller}}</h4>
            </th>
            <th width="500">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">will mantain, during the period of registration financial responsability with respect to each motor vehicle that </h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">Issuer Number</h4>
            </th>
            <th width="160">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">{{ $request->deler_number }}</h4>
            </th>
            <th width="500">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">own, license or operate on the streets or highways. Temporary permit shail be retuned to the Departament.</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="100">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;"></h4>
            </th>
            <th width="660">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">Purchaser`s Signature</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="762">
                <h4 style="font-size:0.8em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">Receip Slowly Perforation</h4>
            </th>
        </tr>
    </table>
</div>
    <div class="div-master" style="width:100%; margin-bottom:20px;padding:0px 0px 0px 80px;">
        <!--CABECERA 1 -->
        <table style="border-spacing: 0;margin-bottom:-0px;text-align:center;margin-top:5px;">
            <tr>
                <td width="700">
                    <h4
                        style="font-size:2em;font-family:Arial, Helvetica,sans-serif;text-align:center;font-weight:normal;font-style: italic;letter-spacing: 0.1em;transform: scale(3,4);">
                        Missouri</h4>
                    <h4
                        style="font-size:2em;font-family:Arial, Helvetica,sans-serif;text-align:center;font-weight:normal;margin-top:-10px;">
                        SHOW-ME STATE</h4>
                </td>
            </tr>
        </table>
        <!--DATOS DEL VEHICULO -->
        <table style="border-spacing: 0;margin-bottom:-0px;margin-top:-60px;">
            <tr style="padding: 2px 0px 2px 0px;">
                <th width="40">

                </th>
                <th width="100">
                    <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">YEAR</h4>
                    <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">{{ $request->year }}</h4>
                </th>
                <th width="290">
                    <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;">MAKE</h4>
                    <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">{{ $request->make }}</h4>
                </th>
                <th width="290">
                    <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-10px;margin-bottom:0px;">VIN: {{ $request->vin }}</h4>
                </th>
            </tr>
        </table>
        <!--NUMERO DE PLACA -->
        <table style="border-spacing: 0;margin-top:-110px;margin-left:360px;text-align:center;margin-top:-45px;">
            <tr>
                <td width="130">
                    <h4
                        style="font-size:3em;font-family:Arial, Helvetica, sans-serif;text-align:center;color:black;font-weight:normal;letter-spacing: 0.01em;transform: scale(3,4);">
                        {{ $tag_number }}</h4>
                </td>
            </tr>
        </table>
        <!--FECHA DE EXPIRACION -->
        <table style="border-spacing: 0;margin-top:-10px;margin-left:0px;text-align:center;background-color: #abe7da50;">
            <tr>
                <th width="80" >
                    <h4
                        style="font-size:1em0px;font-family:Arial, Helvetica,sans-serif;font-weight:bold;letter-spacing: 0.1em;transform:scale(1,2);">
                        EXPIRES:</h4>
                </th>
                <th width="630" >
                    <h4
                        style="font-size:3em;font-family:Arial, Helvetica,sans-serif;font-weight:normal;letter-spacing: 0.1em;transform:scale(3, 4);margin-left:-100px;">
                        {{ $lateDay_Qr_St }}</h4>
                </th>
            </tr>
        </table>
    </div>
