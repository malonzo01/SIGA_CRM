    <style>
        @page {
            margin-left: 0cm;
            margin-right: 0cm;
            margin-top: 1cm;
            margin-bottom: 0cm;
        }

        @font-face {
            font-family: Arial;
            src: url('/fonts/Arial.ttf');
        }

        * {
            font-family: Arial;
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
            background-image: url('img/placas/state-seal-georgia-BW.png');
            /* The image used */
            background-size: 350px 350px;
            /* You must set a specified height */
            background-attachment: fixed;
            background-position: 350px 170px;
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
    <div class="div-master" style="width:100%; margin-bottom:0px;padding:40px 0px 0px 80px;">
        <!--CABECERA PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:100px;margin-bottom:-0px;">
            <tr>
                <td width="700">
                    <h4
                    style="font-size:3em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;">
                        GEORGIA TEMPORARY LICENSE</h4>
                    <h4
                    style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-50px;">
                        {{ $request->vin }} </h4>
                </td>
            </tr>
        </table>
        <!--NUMERO DE PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:20px;margin-left:0px;">
            <tr>
                <td width="700">
                    <h4
                    style="font-size:2em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;letter-spacing: 0.1em;transform:scale(4, 4);">
                        {{ $tag_number }}</h4>
                </td>
            </tr>
        </table>
        <!--FECHA DE EXPIRACION -->
        <table style="border-spacing: 0;margin-left:-30px;">
            <tr>
                <th style="border-spacing: 0;margin-top:0px;margin-left:0px;text-align:center;" width="130">
                    <p >
                        <img src="data:image/png;base64,{{ base64_encode($dirImage)}}" style="margin-left:0px;" width="70" height="70" />
                    </p>
                </th>
                <th style="border-spacing: 0;text-align:center;" width="500">
                    <h4
                        style="font-size:2em;font-family:Arial, Helvetica,sans-serif;font-weight:700;letter-spacing: 0.1em;transform:scale(3, 4);margin-left:0px;">
                        {{ $lateDayMe }}</h4>
                </th>
                <th style="border-spacing: 0;margin-top:0px;margin-left:0px;text-align:center;" width="130">
                    <p style="margin-top:0px">
                        <img src="{{ public_path('img/placas/georgia_FC.png') }}" style="margin-right:0px" width="80" height="80" />
                    </p>
                </th>
            </tr>
        </table>
        <!--DATOS DEL VEHICULO -->
        <table style="border-spacing: 0;margin-bottom:-0px;margin-top:0px;">
            <tr style="padding: 2px 0px 2px 0px;">
                <th width="700">
                    <h4
                        style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;">
                        {{ $request->year }} {{ $request->make }} {{$request->model}} {{$request->major_color}}, {{$request->minor_color}}</h4>
                </th>
            </tr>
        </table>
    </div>
