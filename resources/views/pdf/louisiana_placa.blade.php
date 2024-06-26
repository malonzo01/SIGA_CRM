<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            margin-left: 0cm;
            margin-right: 0cm;
            margin-top: 1cm;
            margin-bottom: 0cm;
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
            src: url('{{ storage_path('/fonts/Roboto-Medium.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "Montserrat";
            src: url('{{ storage_path('/fonts/Montserrat-Bold.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "Script";
            src: url('{{ storage_path('/fonts/StyleScript-Regular.ttf') }}')format('truetype');
        }

        @font-face {
            font-family: "DancingScript";
            src: url('{{ storage_path('/fonts/DancingScript-Regular.ttf') }}')format('truetype');
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
    </style>
</head>

<body>
    <!--PLACA -->
    <div class="div-master" style="width:100%; margin-bottom:0px;padding:40px 0px 0px 80px;">
        <!-- TABLA VEHICLE DESCRIPTION -->
        <div class="row">
            <div class="col-4">
                <table style="border-spacing: 0;text-align:center;margin-top:10px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(27, 63, 131, 0.849);">
                            <h4
                                style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;background-color: rgba(27, 63, 131, 0.849);color:white;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                EXPIRATION DATE
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid  rgba(27, 63, 131, 0.849);">
                            <h4
                                style="font-size:5em;font-family:DancingScript;text-align:center;font-weight:400;color: rgba(27, 63, 131, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:15px;">
                                {{ $lateMonth }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid rgba(27, 63, 131, 0.849);">
                            <h4
                                style="font-size:5em;font-family:DancingScript;text-align:center;font-weight:400;color: rgba(27, 63, 131, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:15px;">
                                {{ $lateDay }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:-60px;">
                    <tr>
                        <th width="200" style="border: 1px solid rgba(27, 63, 131, 0.849);">
                            <h4
                                style="font-size:5em;font-family:DancingScript;text-align:center;font-weight:400;color: rgba(27, 63, 131, 0.849);letter-spacing:0.1em;margin-top:0px;margin-bottom:15px;">
                                {{ $lateAnio }}
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col-8" style="margin-top:-600px;margin-bottom:0px;margin-left:220px;">
                <!--CABECERA PLACA -->
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-bottom:0px;">
                    <tr>
                        <th width="100">
                            <p>
                                <img src="{{ public_path('img/placas/louisiana_map.png') }}"
                                    style="margin-top:-40px;margin-left:-15px;" width="100" height="100" />
                            </p>
                        </th>
                        <th width="400">
                            <h4
                                style="font-size:2em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color: rgb(228, 8, 8);margin-top:0px;">
                                {{ $request->days }} DAY TEMPORARY INTRANSIT
                            </h4>
                            <h4
                                style="font-size:2em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:bold;color: rgba(27, 63, 131, 0.849);transform:scale(3,3);margin-top:-30px;">
                                LOUISIANA
                            </h4>
                        </th>
                        <th width="100">
                            <p>
                                <img src="{{ public_path('img/placas/louisiana_map.png') }}"
                                    style="margin-top:-40px;margin-left:5px;" width="100" height="100" />
                            </p>
                        </th>
                    </tr>
                </table>
                <!-- TABLA OWNER INFORMATION -->
                <table style="margin-top: 0px;margin-bottom:0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" >

                        </th>
                        <th width="200" >

                        </th>
                        <th width="20">
                        </th>
                        <th width="270" >
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:bold;color:rgba(92, 99, 158, 0.849);margin-top:4px;">
                                DEALER/AUTO CO/LENDONG INTITUTION
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:0px;">
                    <tr width="600">
                        <th width="120" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 0px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top: 0px;margin-bottom:-5px;">
                                YEAR AND MAKE
                            </h4>

                        </th>
                        <th width="180" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:0.6em;font-family:DancingScript;text-align:right;font-weight:400;transform:scale(2, 2);margin-top: 0px;margin-bottom:0px;margin-right:90px;">
                                {{ $request->year }} {{ $request->make }}
                            </h4>
                        </th>
                        <th width="20">
                        </th>
                        <th width="50" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th width="220" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:0.6em;font-family:DancingScript;text-align:left;font-weight:400;transform:scale(2, 2);margin-top:0px;margin-left:105px;margin-top: 0px;margin-bottom:5px;">
                                Crosby Auto Title
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:0px;">
                    <tr width="600">
                        <th width="80" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                            style="padding: 2px 0px 0px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top: 0px;margin-bottom:-10px;">
                                VIN
                            </h4>

                        </th>
                        <th width="220" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 0px 70px 0px 0px;font-size:0.6em;font-family:DancingScript;text-align:right;font-weight:400;transform:scale(2, 2);margin-top: 0px;margin-bottom:0px;margin-right:35px;">
                                {{ $request->vin }}
                            </h4>
                        </th>
                        <th width="20" >
                        </th>
                        <th width="50" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th width="220" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:0.6em;font-family:DancingScript;text-align:left;font-weight:400;transform:scale(2, 2);margin-left:105px;margin-top: 0px;margin-bottom:5px;">
                                48251 Hoy 51
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top: 0px;margin-bottom:-0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="600">
                        <th width="100" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                            style="padding: 2px 0px 0px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top: 0px;margin-bottom:-10px;">
                                ISSUED DATE
                            </h4>

                        </th>
                        <th width="200" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:0.6em;font-family:DancingScript;font-weight:400;text-align:right;transform:scale(2, 2);margin-right:95px;margin-top: 0px;margin-bottom:0px;">
                                {{ $lateDate }}
                            </h4>
                        </th>
                        <th width="20" >
                        </th>
                        <th width="50" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                            style="padding: 2px 0px 0px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:rgba(92, 99, 158, 0.849);margin-top: 0px;margin-bottom:-10px;">
                                CITY
                            </h4>
                        </th>
                        <th width="220" style="border-bottom: 2px solid rgba(92, 99, 158, 0.849);">
                            <h4
                                style="font-size:0.6em;font-family:DancingScript;text-align:left;font-weight:400;transform:scale(2, 2);margin-top:0px;margin-left:105px;margin-top: 0px;margin-bottom:5px;">
                                Tickfaro, La 70466
                            </h4>
                        </th>
                    </tr>
                </table>
                <!--NUMERO DE PLACA -->
                <table style="border-spacing: 0;text-align:center;margin-top:80px;margin-left:-50px;">
                    <tr>
                        <td width="700">
                            <h4
                                style="font-size:3.7em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;transform:scale(3, 4);">
                                {{ $tag_number }}</h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
