<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            margin-left: 1.5cm;
            margin-right: 1.5cm;
            margin-top: 2cm;
        }

        th {

            border-collapse: collapse;
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

        .page_break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <div class="div-master">
        <div class="row " style="width:100%; margin-bottom:20px;margin-top:0px;">
            <div class="col 4">
                <table style="border-spacing: 0;text-align:center;margin-top:10px;margin-left:0px;">
                    <tr>
                        <th width="100">
                            <p style="padding: 2px 0px 0px 4px;margin-top:0px;margin-left:0;">
                                <img src="{{ public_path('img/placas/louisianaOfice.png') }}" width="100"
                                    height="50" />
                            </p>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col 8" style="margin-bottom:20px;margin-top:-120px;margin-left:50px;">
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="500">
                            <h4
                                style="font-size:1em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                LOUISIANA DEPARMENT OF PUBLIC SAFETY AND CORRECTIONS
                            </h4>
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:0px;">
                                OFFICE OF MOTOR VEHICLES
                            </h4>
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                P.O. BOX 64848, BATON ROUGE, LA 708896-4848
                            </h4>
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                225.925./irpdocuments@la.gov
                            </h4>
                            <h4
                                style="font-size:1em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                TEMPORARY TAGS REGISTRATION
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <!-- POINT OF CONTACT INFORMATION -->
        <div class="row" style="width:100%; margin-bottom:0px;margin-top:80px;">
            <div class="col 12">
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="500">
                            <h4
                                style="font-size:1em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                POINT OF CONTACT INFORMATION
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:20px;margin-left:0px;">
                    <tr>
                        <th width="40">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                Name
                            </h4>
                        </th>
                        <th width="460" style="border-bottom: 2px solid black;">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                                {{ $request->name1 }} {{ $request->name2 }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="40">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                City
                            </h4>
                        </th>
                        <th width="240" style="border-bottom: 2px solid black;">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                                {{ $request->address }} {{ $request->city }} {{ $request->state }}
                            </h4>
                        </th>
                        <th width="40">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                STATE
                            </h4>
                        </th>
                        <th width="60" style="border-bottom: 2px solid black;">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                                {{ $request->state }}
                            </h4>
                        </th>
                        <th width="60">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                ZIP CODE
                            </h4>
                        </th>
                        <th width="60" style="border-bottom: 2px solid black;">
                            <h4
                                style="font-size:0.8em;font-family: Roboto, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                                {{ $request->zip }}
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <!-- VEHICLE INFORMATION -->
        <div class="row" style="width:100%; margin-bottom:0px;margin-top:50px;">
            <div class="col 12">
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="500" >
                            <h4
                                style="font-size:1em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                VEHICLE INFORMATION
                            </h4>
                        </th>
                    </tr>
                </table>
                <table
                    style="background-color: rgba(194, 198, 231, 0.658);border-spacing: 0;text-align:center;margin-top:15px;margin-left:0px;">
                    <tr>
                        <th width="130" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                VIN NUMBER
                            </h4>
                        </th>
                        <th width="70" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                TAG NUMBER
                            </h4>
                        </th>
                        <th width="40" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                YEAR
                            </h4>
                        </th>
                        <th width="80" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                MAKE
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                MODEL
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                COLOR
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                BODY TIPE
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="130" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->vin }}
                            </h4>
                        </th>
                        <th width="70" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $tag_number }}
                            </h4>
                        </th>
                        <th width="40" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->year }}
                            </h4>
                        </th>
                        <th width="80" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->make }}
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->model }}
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->major_color }}
                            </h4>
                        </th>
                        <th width="60" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $request->body_style }}
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <!-- VEHICLE INFORMATION -->
        <div class="row" style="width:100%; margin-bottom:0px;margin-top:30px;">
            <div class="col 12">
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="500">
                            <h4
                                style="font-size:1em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                BUSINESS INFORMATION
                            </h4>
                        </th>
                    </tr>
                </table>
                <table
                    style="background-color: rgba(194, 198, 231, 0.658);border-spacing: 0;text-align:center;margin-top:10px;margin-left:0px;">
                    <tr>
                        <th width="125" style="border: 1px solid  black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                DEALER NUMBER
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid  black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                PHONE
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid  black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                EMAIL
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid  black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                ISSUED DATE
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="125" style="border: 1px solid black">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                P153181
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                225 925 6147
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                crobyautotittles@dps.la.gov
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $initDay_Qr }}
                            </h4>
                        </th>
                    </tr>
                </table>
                <table
                    style="background-color: rgba(194, 198, 231, 0.658);border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                CITY
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                STATE
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                ZIP
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;margin-bottom:0px;">
                                EXPIRATION DATE
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="border-spacing: 0;text-align:center;margin-top:0px;margin-left:0px;">
                    <tr>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                TICKFAW
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                LA
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                70466
                            </h4>
                        </th>
                        <th width="125" style="border: 1px solid black;">
                            <h4
                                style="font-size:0.7em;font-family: Roboto, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $lateDay_Qr }}
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
