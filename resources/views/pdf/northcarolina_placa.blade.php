    <style>
        @page {
            margin-left: 0cm;
            margin-right: 0cm;
            margin-top: 1cm;
            margin-bottom: 0cm;
        }

        @font-face {
            font-family: "Anton";
            src: url('{{ storage_path('/fonts/Anton_Regular.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "Arial";
            src: url('{{ storage_path('/fonts/Arial.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "Helvetica";
            src: url('{{ storage_path('/fonts/Helvetica-Narrow.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "Roboto";
            src: url('{{ storage_path('/fonts/Roboto-Regular.ttf') }}')format('truetype');
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
            /*
            background-image: url('img/placas/missouri-2-2.png');
            background-size: 300px 300px;
            background-attachment: fixed;
            background-position: 400px 150px;
            background-repeat: no-repeat;
            */
        }

        .div-master-2 {
            /*
            background-image: url('img/placas/missouri-2-1.png');
            background-size: 220px 110px;
            background-attachment: fixed;
            background-position: -25px 25px;
            background-repeat: repeat-x;
            */
        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
    </style>
    <!--PLACA -->
    <div class="div-master" style="width:100%; margin-bottom:20px;padding:0px 0px 0px 80px;">
        <!--CABECERA PLACA -->
        <table style="margin-top:-20px;margin-bottom:0px;">
            <tr style="padding: 2px 0px 2px 0px;">
                <th width="200">
                    <h4
                        style="font-size:5em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        ·</h4>
                </th>
                <th width="300">
                </th>
                <th width="200">
                    <h4
                        style="font-size:5em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        ·</h4>
                </th>
            </tr>
        </table>
        <!--DEALER INFO -->
        <table style="margin-top:-20px;margin-bottom:-0px;border:3px solid #000;">
            <tr style="padding: 2px 0px 2px 0px;border:3px solid #000;">
                <th style="padding: 2px 0px 2px 0px;border: 4px solid black;background-color: black;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:white;margin-top:0px;margin-bottom:0px;">
                        {{ $request->days }}-DAY</h4>
                </th>
                <th style="border: 4px solid black;" width="305">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        DEALER NAME</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        POWERPLAY MOTORS LLC</h4>
                </th>
                <th style="border: 4px solid black;" width="305">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        ADDRESS</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        1909 N CEDAR ST, LUMBERTON, NC 28358</h4>
                </th>
                <th style="border:4px solid black;background-color: black;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:white;margin-top:0px;margin-bottom:0px;">
                        {{ $request->days }}-DAY</h4>
                </th>
            </tr>
        </table>
        <!--DATE EXPIRE -->
        <table style="margin-top: 0px;margin-bottom:0px;border:4px solid #000;">
            <tr style="padding: 2px 0px 2px 0px;border:4px solid #000;">
                <th style="border:4px solid #000;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        EXPIRE DATE</h4>
                </th>
                <th style="border:4px solid #000;" width="202">
                    <h4
                    style=" display:inline-block; vertical-align:middle; font-size:2.8em; font-family:Anton,Arial, Helvetica, sans-serif;font-weight:400;color:#000;letter-spacing: 0.08em;transform: scale(3,4);">
                    {{ $lateMonth }}</h4>
                    <h4
                        style="font-size:0.8em;font-family:Anton,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        MONT</h4>
                </th>
                <th style="border:4px solid #000;" width="202">
                    <h4
                        style=" display:inline-block; vertical-align:middle; font-size:2.8em; font-family:Anton,Arial, Helvetica, sans-serif;font-weight:400;color:#000;letter-spacing: 0.08em;transform: scale(3,4);">
                        {{ $lateDay }}</h4>
                    <h4
                        style="font-size:0.8em;font-family:Anton,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        DAY</h4>
                </th>
                <th style="border:4px solid #000;" width="202">
                    <h4
                        style=" display:inline-block; vertical-align:middle; font-size:2.8em; font-family:Anton,Arial, Helvetica, sans-serif;font-weight:400;color:#000;letter-spacing: 0.08em;transform: scale(3,4);">
                        {{ $lateAnioSt }}</h4>
                    <h4
                        style="font-size:0.8em;font-family:Anton,Anton,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        YEAR</h4>
                </th>
                <th style="border:4px solid #000;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        EXPIRE DATE</h4>
                </th>
            </tr>
        </table>
        <!--VEHICLE INFO -->
        <table style="margin-top: 0px;margin-bottom:-0px;border:4px solid #000;">
            <tr style="padding: 2px 0px 2px 0px;border:4px solid #000;">
                <th style="padding: 2px 0px 2px 0px;background-color: black;border:4px solid #000;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:white;margin-top:0px;margin-bottom:0px;">
                        {{ $request->days }}-DAY</h4>
                </th>
                <th style="border:4px solid #000;" width="150">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        MAKE</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        {{ $request->make }}</h4>
                </th>
                <th style="border:4px solid #000;" width="50">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        YEAR</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        {{ $request->year }}</h4>
                </th>
                <th style="border:4px solid #000;" width="250">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        VIN</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        {{ $request->vin }}</h4>
                </th>
                <th style="border:4px solid #000;" width="152">
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        ISSUED DATE</h4>
                    <h4
                        style="font-size:0.8em;font-family:'Anton', sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;padding: 0px 0px 0px 5px;">
                        {{ $initDay_Qr }}</h4>
                </th>
                <th style="border:4px solid #000;background-color: black;" width="54">
                    <h4
                        style="font-size:1em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:white;margin-top:0px;margin-bottom:0px;">
                        {{ $request->days }}-DAY</h4>
                </th>
            </tr>
        </table>
        <!--NUMERO DE PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:20px;margin-left:0px;">
            <tr>
                <td width="700">
                    <h4
                        style="font-size:2.8em;font-family:'Anton', sans-serif;text-align:center;color:black;font-weight:bold;letter-spacing: 0.08em;transform: scale(3,4);">
                        {{ $tag_number }}</h4>
                </td>
            </tr>
        </table>
        <!--STATE INFO-->
        <table style="border-spacing: 0;margin-top:20px;margin-left:0px;text-align:center;">
            <tr style="padding: 2px 0px 2px 0px;">
                <th width="200">
                    <h4
                        style="font-size:5em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        ·
                    </h4>
                </th>
                <th width="300">
                    <h4
                        style="font-size:1.5em;font-family:'Anton', sans-serif;text-align:center;font-weight:800;letter-spacing: 0.1em;transform:scale(2.2, 3.2);">
                        NORTH CAROLINA
                    </h4>
                </th>
                <th width="200">
                    <h4
                        style="font-size:5em;font-family:'Anton', sans-serif;text-align:center;font-weight:700;color:black;margin-top:0px;margin-bottom:0px;">
                        ·
                    </h4>
                </th>
            </tr>
        </table>
    </div>
