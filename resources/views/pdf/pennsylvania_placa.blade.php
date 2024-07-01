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
            src: url('{{ storage_path('/fonts/Roboto-Regular.ttf') }}')format('truetype');
        }
        @font-face {
            font-family: "Anton";
            src: url('{{ storage_path('/fonts/Anton_Regular.ttf') }}')format('truetype');
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
            background-image: url('img/placas/pennsylvania.png');
            /* The image used */
            background-size:700px 80px;
            /* You must set a specified height */
            background-attachment: fixed;
            background-position: 200px 260px;
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
    <div class="div-master" style="width:100%; margin-bottom:0px;padding:50px 0px 0px 80px;">
        <!--CABECERA PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:50px;margin-bottom:-0px;">
            <tr>
                <td width="700">
                    <h4
                        style="font-size:3em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:-20px;">
                        PENNSYLVANIA</h4>
                    <h4
                        style="font-size:1.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:-60px;">
                        {{ $request->days }} DAY TEMPORARY INTRANSIT</h4>
                </td>
            </tr>
        </table>
        <!--NUMERO DE PLACA -->
        <table style="border-spacing: 0;text-align:center;margin-top:40px;margin-left:0px;">
            <tr>
                <td width="700">
                    <h4
                        style="font-size:2.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;letter-spacing: em;transform:scale(5.5, 5.5);">
                        {{ $tag_number }}</h4>
                </td>
            </tr>
        </table>
        <!-- TABLA VEHICLE DESCRIPTION -->
        <div class="row" style="margin-top:40px;margin-bottom:-0px;margin-left:0px;">
            <div class="col-2">
                <table style="margin-top: 0px;margin-bottom:-0px;margin-left:0px;">
                    <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;"
                        width="700">
                        <th width="90">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:bold;margin-top:0px;">
                                Place your Plate Number and DIN Sticker Here and completete the additional Vehicle
                                information
                            </h4>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col-10" style="margin-top:-150px;margin-bottom:-0px;margin-left:120px;">
                <table style="margin-top: 0px;margin-bottom:0px;margin-left:0px;">
                    <tr>
                        <th width="20">
                            <h4
                                style="padding: 20px 0px 2px 4px;font-size:0.8em;font-family:Roboto, Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:10px">
                                -->
                            </h4>
                        </th>
                        <th width="50" style="border: 1px solid black;">
                            <h4
                                style="padding: 0px 0px 0px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:10px">
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top:-100px;margin-bottom:0px;margin-left:95px;">
                    <tr>
                        <th width="180" style="border: 1px solid black;">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:15px">
                                VEHICLE IDENTIFICATION NUMBER
                            </h4>
                            <h4
                                style="padding: 0px 0px 4px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-20px;margin-bottom:0px;height:15px">
                                {{ $request->vin }}
                            </h4>
                        </th>
                        <th width="100" style="border: 1px solid black;">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:15px">
                                MAKE
                            </h4>
                            <h4
                                style="padding: 0px 0px 4px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-15px;margin-bottom:0px;height:15px">
                                {{ $request->make }}
                            </h4>
                        </th>
                        <th width="80" style="border: 1px solid black;">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:15px">
                                MODEL
                            </h4>
                            <h4
                                style="padding: 0px 0px 4px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-15px;margin-bottom:0px;height:15px">
                                {{ $request->model }}
                            </h4>
                        </th>
                        <th width="80" style="border: 1px solid black;">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:15px">
                                YEAR
                            </h4>
                            <h4
                                style="padding: 0px 0px 4px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-15px;margin-bottom:0px;height:15px">
                                {{ $request->year }}
                            </h4>
                        </th>
                        <th width="50">
                            <h4
                                style="padding: 0px 0px 0px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;height:15px">

                            </h4>
                        </th>
                    </tr>
                </table>
                <!--DEALER Y EXPIRACION -->
                <table style="margin-top:0px;margin-bottom:0px;">
                    <tr>
                        <th width="72">
                            <h4
                                style="padding: 2px 0px 2px 0px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th width="5" style="border: 1px solid black;">
                            <h4 class="texto-vertical-3"
                                style="padding: 0px 4px 0px 4px;font-size:0.6em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;letter-spacing:0.1em;margin-top:0px;margin-bottom:0px;">
                                E X P I R E S
                            </h4>
                        </th>
                        <th style="border: 1px solid black;" width="115">
                            <h4
                                style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;transform:scale(2,3);margin-top:-10px;margin-bottom:0px;">
                                {{ $monthDateLast }}
                            </h4>
                        </th>
                        <th style="border: 1px solid black;" width="115">
                            <h4
                                style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;transform:scale(2,3);margin-top:-10px;margin-bottom:0px;">
                                {{ $lateDay }}
                            </h4>
                        </th>
                        <th style="border: 1px solid black;" width="115">
                            <h4
                                style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;transform:scale(2,3);margin-top:-10px;margin-bottom:0px;">
                                {{ $lateAnio }}
                            </h4>
                        </th>
                        <th width="5" style="border: 1px solid black;">
                            <h4 class="texto-vertical-3"
                                style="padding: 0px 4px 0px 4px;font-size:0.6em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;letter-spacing:0.1em;margin-top:-5px;margin-bottom:0px;">
                                E X P I R E S
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="margin-top:0px;margin-bottom:0px;">
                    <tr>
                        <th width="80">
                            <h4
                                style="padding: 2px 0px 2px 0px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">

                            </h4>
                        </th>
                        <th  width="115">
                            <h4
                                style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                MONTH
                            </h4>
                        </th>
                        <th >
                            <h4
                                style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;transform:scale(2,3);margin-top:-10px;margin-bottom:0px;">

                            </h4>
                        </th>

                    </tr>
                </table>
            </div>
        </div>
    </div>
