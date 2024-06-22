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
            font-family: Arial;Arial, Helvetica,
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

            background-image: url('img/placas/tennessee.png'); /* The image used */
            background-size: 580px 580px; /* You must set a specified height */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */

        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
    </style>

    <div class="div-master" style="width:100%; margin-bottom:20px;padding:0px 0px 0px 80px;">
            <!--CABECERA 1 -->
            <table style="border-spacing: 0;margin-top:5px;margin-bottom:-0px;">
                <tr>
                    <td width="70"></td>
                    <td width="600">
                        <h4 style="font-size:3em;font-family:Arial, Helvetica,sans-serif;text-align:center;font-weight:normal;margin-top:0px;">TEMPORARY PLATE</h4>
                    </td>
                </tr>
            </table>
            <!--CABECERA 2 -->
            <table style="border-spacing: 0;margin-top:-220px;text-align:center;">
                <tr>
                    <td width="130">
                        <p style="margin-top:-30px">
                            <img src="{{public_path('/placas/'.$filename)}}" style="margin-right:-10px;" width="200" height="80" />
                        </p>
                    </td>
                    <td width="700">
                        <h4 style="font-size:5em;font-family:Arial, Helvetica,sans-serif;text-align:center;letter-spacing: 0.01em;font-weight:normal;margin-left:-330px;margin-top:50px;">TENNESSEE</h4>
                    </td>
                </tr>
            </table>
            <!--NUMERO DE PLACA -->
            <table style="border-spacing: 0;margin-top:-110px;margin-left:350px;text-align:center;">
                <tr>
                    <td width="130">
                        <h4 style="font-size:4em;font-family:Arial, Helvetica, sans-serif;text-align:center;color:black;font-weight:normal;letter-spacing: 0.01em;transform: scale(3,4);">{{ $tag_number }}</h4>
                    </td>
                </tr>
            </table>
            <!--DATOS DEL VENDEDOR -->
            <table style="border-spacing: 0;">
                <tr>
                    <td width="180">
                        <h4 style="font-size:30px;font-family:Arial, Helvetica,sans-serif;font-weight:normal;margin-top:0px;margin-left:-24px;white-space:pre;">ISSUE:          {{ $initDaySt }}</h4>
                        <h4 style="font-size:30px;font-family:Arial, Helvetica,sans-serif;font-weight:normal;margin-top:-38px;margin-left:-24px;white-space:pre;">DEALER:       {{ $request->seller }}</h4>
                        <h4 style="font-size:30px;font-family:Arial, Helvetica,sans-serif;font-weight:normal;margin-top:-36px;margin-left:-24px;white-space:pre;">PHONE:        {{ $request->phone }} </h4>
                    </td>
                </tr>
            </table>
            <!--FECHA DE EXPIRACION -->
            <table style="border-spacing: 0;margin-top:-50px;margin-left:-50px;text-align:center;">
                <tr>
                    <th width="200">
                        <h4 style="font-size:40px;font-family:Arial, Helvetica,sans-serif;font-weight:bold;letter-spacing: 0.1em;transform:scale(1,1.5);">EXPIRES:</h4>
                    </th>
                    <th width="50">
                    </th>
                    <th width="500">
                        <h4 style="font-size:30px;font-family:Arial, Helvetica,sans-serif;font-weight:bold;letter-spacing: 0.1em;transform:scale(3, 4);">{{ $lateDay_Qr }}</h4>
                    </th>
                </tr>
            </table>
    </div>



