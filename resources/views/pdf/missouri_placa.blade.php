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
            background-image: url('img/placas/missouri-new.png');
            /* The image used */
            background-size: 1100px 550px;
            /* You must set a specified height */
            background-attachment: fixed;
            background-position: 10px 80px;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */

        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
    </style>
<!--PLACA -->
    <div class="div-master" style="width:100%; margin-top:20px;padding:0px 0px 0px 80px;">
        <!--CABECERA PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:15px;margin-bottom:-0px;">
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
        <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-180px;">
            <tr>
                <td width="10" >
                    <p style="margin-top:-110px">
                        <img src="{{public_path('img/placas/mapa-missouri.png')}}" width="680" height="400" />
                    </p>
                </td>
                <td width="400" >
                    <h4
                        style="font-size:3em;font-family:Arial, Helvetica, sans-serif;text-align:center;color:black;font-weight:normal;letter-spacing: 0.01em;transform: scale(3,4);margin-top:-50px;margin-left:-400px;">
                        {{ $tag_number }}</h4>
                </td>
            </tr>
        </table>
        <!--FECHA DE EXPIRACION -->
        <table style="border-spacing: 0;margin-top:-45px;margin-left:0px;text-align:center;">
            <tr>
                <td width="80" >
                    <p style="margin-top:-230px;margin-left:-140px;">
                        <img src="{{public_path('img/placas/missouri-2-1.png')}}" width="450" height="200" />
                    </p>
                </td>
                <th width="80" >
                    <h4
                        style="font-size:2em;font-family:Arial, Helvetica,sans-serif;font-weight:900;letter-spacing: 0.1em;transform:scale(1,2);margin-left:-550px;">
                        EXPIRES:</h4>
                </th>
                <th width="540" >
                    <h4
                        style="font-size:3em;font-family:Arial, Helvetica,sans-serif;font-weight:normal;letter-spacing: 0.1em;transform:scale(3, 4);margin-left:-500px;">
                        {{ $lateDay_Qr_St }}</h4>
                </th>
            </tr>
        </table>
        <table style="border-spacing: 0;margin-top:-50px;margin-left:80px;text-align:center;">
            <tr>
                <th width="600" >

                </th>
                <th width="100" >
                    <h4 style="font-size:1em;font-family:Arial, Helvetica,sans-serif;font-weight:400;margin-top:50px;margin-left:20px;">
                        CONTROL #
                    </h4>
                    <h4 style="font-size:1em;font-family:Arial, Helvetica,sans-serif;font-weight:700;color:rgba(255, 0, 0, 0.534);margin-top:-25px;margin-left:20px;">
                        A {{ $control_number }}
                    </h4>
                </th>
            </tr>
        </table>
    </div>
