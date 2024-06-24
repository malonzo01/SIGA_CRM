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
            /*
            background-image: url('img/placas/pennsylvania.png');
            background-size:700px 80px;
            background-attachment: fixed;
            background-position: 200px 290px;
            background-repeat: no-repeat;
            */
        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
    </style>
    <!--PLACA -->
    <div class="div-master" style="width:100%; margin-bottom:0px;padding:40px 0px 0px 80px;">

        <!-- TABLA VEHICLE DESCRIPTION -->
        <div class="row">
            <div class="col-4">
                <table style="border-spacing: 0;text-align:center;margin-top:10px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;background-color: rgba(66, 75, 153, 0.849);color:white;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                EXPIRATION DATE
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;color: rgba(66, 75, 153, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                {{ $lateMonth }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;color: rgba(66, 75, 153, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                {{ $lateDay }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;color: rgba(66, 75, 153, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                {{ $lateAnio }}
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col-8" style="margin-top:0px;margin-bottom:0px;margin-left:120px;">
                <!--CABECERA PLACA -->
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-bottom:0px;">
                    <tr>
                        <th width="100">
                            <p>
                                <img src="{{ public_path('img/placas/louisiana_map.png') }}" style="margin-left:0px;"
                                    width="80" height="80" />
                            </p>
                        </th>
                        <th width="400">
                            <h4
                                style="font-size:1.8em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color: rgb(228, 8, 8);margin-top:0px;">
                                {{ $request->days }} DAY TEMPORARY INTRANSIT
                            </h4>
                            <h4
                                style="font-size:3em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color: rgba(66, 75, 153, 0.849);margin-top:0px;">
                                LOUISIANA
                            </h4>
                        </th>
                        <th width="100">
                            <p>
                                <img src="{{ public_path('img/placas/louisiana_map.png') }}" style="margin-left:0px;"
                                    width="80" height="80" />
                            </p>
                        </th>
                    </tr>
                </table>
                <!-- TABLA OWNER INFORMATION -->
                <table style="margin-top: 0px;margin-bottom:-0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" style="border: 1px solid rgba(92, 99, 158, 0.849);">

                        </th>
                        <th width="200" style="border: 1px solid rgba(92, 99, 158, 0.849);">

                        </th>
                        <th width="20" >
                        </th>
                        <th width="280" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top:0px;">
                                DEALER/AUTO CO/LENDONG INTITUTION
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:-0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top:0px;">
                                YEAR AND MAKE
                            </h4>

                        </th>
                        <th width="200" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">
                                {{ $request->year }} {{ $request->make }}
                            </h4>
                        </th>
                        <th width="20" >
                        </th>
                        <th width="50" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th width="230" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">
                                Crosby Auto Title
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:-0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top:0px;">
                                VIN
                            </h4>

                        </th>
                        <th width="200" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">
                                {{ $request->vin }}
                            </h4>
                        </th>
                        <th width="20" >
                        </th>
                        <th width="50" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th width="230" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">
                                48251 Hoy 51
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:-0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top:0px;">
                                ISSUED DATE
                            </h4>

                        </th>
                        <th width="200" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">
                                {{ $lateDay }}
                            </h4>
                        </th>
                        <th width="20" >
                        </th>
                        <th width="50" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top:0px;">
                                CITY
                            </h4>
                        </th>
                        <th width="230" style="border: 1px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">
                                Tickfaro, La 70466
                            </h4>
                        </th>
                    </tr>
                </table>
                <!--NUMERO DE PLACA -->
                <table style="border-spacing: 0;text-align:center;margin-top:20px;margin-left:0px;">
                    <tr>
                        <td width="700">
                            <h4
                                style="font-size:2.5em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;letter-spacing: 0.1em;transform:scale(4, 4);">
                                {{ $tag_number }}</h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
