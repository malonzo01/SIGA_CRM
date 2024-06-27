    <style>
        @page {
            margin-left: 0.5cm;
            margin-right: 0.5cm;
            margin-top: 0.5cm;
            margin-bottom: 0.5cm;
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

        th {}

        th,
        td {
            padding: 0px;
        }

        table {}

        table,
        tr,
        td {
            border: none;
        }

        .page_break {
            page-break-before: always;
        }

        .div-master {}

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }

        .margen-A {
            border: 2px solid;
            border-color: black;
            border-width: medium;
            border-radius: 25px;
        }

        .margen-B {
            border-top: solid black 2px;
            border-right: solid black 2px;
            border-bottom: solid black 2px;
            border-left: solid black 2px;
            border-color: solid black 2px;
            border-width: medium;
            border-radius: 25px;
        }
    </style>
    <!--PLACA -->
    <div class="div-master" style="max-width: 100%;padding:8px 8px 8px 8px;">
        <div class="margen-A" style="max-width: 100%;padding:8px 8px 8px 8px;">
            <div class="margen-B" style="max-width: 100%;padding:8px 8px 8px 8px;">
                <!--CABECERA PLACA -->
                <table style="text-align:center;margin-top:-15px;margin-right:0px;margin-left:-10px;">
                    <tr>
                        <th style="margin-top:0px;text-align:center;" width="780">
                            <p style="margin-top:0px">
                                <img src="{{public_path('img/placas/ohio.png')}}" style="margin-right:0px" width="1045" height="150" />
                            </p>
                        </th>
                    </tr>
                </table>
                <table style="text-align:center;margin-top:-50px;margin-right:150px;">
                    <tr>
                        <th style="margin-top:0px;margin-left:0px;text-align:center;" width="200">
                            <p style="margin-top:0px">
                                <img src="{{ public_path('/placas/' . $filename) }}" style="margin-right:0px;"
                                    width="200" height="80" />
                            </p>
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $tag_number }}</h4>
                            </h4>
                        </th>
                        <th style="margin-top:0px;margin-left:0px;text-align:center;" width="360">
                        </th>
                        <th style="margin-top:0px;margin-left:0px;text-align:center;border-style: solid;border-color: black;border-width: medium;border-radius: 25px;"
                            width="200">
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                ISSUED
                            </h4>
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                {{ $initDay_Qr_Me }}
                            </h4>
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                DEALER/AGENCY#
                            </h4>
                            <h4
                                style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                                ND842563
                            </h4>
                        </th>
                    </tr>
                </table>
                <table style="text-align:center; margin-top:-50px;margin-bottom:0px;">
                    <tr>
                        <th style="padding: 2px 0px 2px 0px;" width="760">
                            <h4
                                style="font-size:3.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-right:50px;">
                                TEMPORARY TAG
                            </h4>
                        </th>
                    </tr>
                </table>
                <!--NUMERO DE PLACA -->
                <table style="text-align:center;margin-top:-120px;margin-left:50px;">
                    <tr>
                        <td width="700">
                            <h4
                                style="font-size:3.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;transform:scale(4, 4);">
                                {{ $tag_number }}
                            </h4>
                        </td>
                    </tr>
                </table>
                <!--FECHA DE EXPIRACION -->
                <table style="text-align:center;margin-top:-15px;margin-left:10px;">
                    <tr>
                        <th style="font-size:1em;font-family:Roboto,Arial, Helvetica,sans-serif;font-weight:700;letter-spacing: 0.1em;transform:scale(3, 4);text-align:center;"
                            width="200">
                            EXPIRES:
                        </th>
                        <th style="text-align:center;" width="500">
                            <h4
                                style="font-size:2.5em;font-family:Roboto,Arial, Helvetica,sans-serif;font-weight:400;letter-spacing: 0.1em;transform:scale(3, 4);margin-left:80px;">
                                {{ $lateDay_Qr_Me }}</h4>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
