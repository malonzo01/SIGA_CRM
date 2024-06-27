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

            background-image: url('img/placas/indiana.png'); /* The image used */
            background-size: 500px 500px; /* You must set a specified height */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */

        }

        .b {
            text-orientation: upright;
            color: white;
            font-weight: bold;
        }
        .texto-vertical-3 {
            width:20px;
            word-wrap: break-word;
            text-align:center;
            color: rgba(4, 4, 131, 0.788);
        }
    </style>

    <div class="div-master" style="width:100%;margin-bottom:5px;padding:0px 0px 0px 80px;">
            <!--CEBECERA 1 -->
            <table style="border-spacing: 0;margin-top:-130px;margin-bottom:0px;">
                <tr>
                    <td width="60"></td>
                    <td width="600">
                        <h4 style="font-size:6em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;color: rgba(66, 75, 153, 0.849);font-weight:bold;letter-spacing: 0.01em;">
                            INDIANA
                        </h4>
                    </td>
                </tr>
            </table>
            <!--CEBECERA 2 -->
            <table style="border-spacing: 0;margin-top:-250px;text-align:center;">
                <tr>
                    <td width="700">
                        <h4 style="font-size:2.7em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;color:rgba(66, 75, 153, 0.849);font-weight:normal;margin-left:50px;margin-top:100px;">
                            TEMPORARY REGISTRATION
                        </h4>
                    </td>
                </tr>
            </table>
            <!--NUMERO DE PLACA -->
            <table style="border-spacing: 0;margin-top:-80px;text-align:center;">
                <tr>
                    <th width="700">
                        <h4 style="font-size:2em;font-family:Arial, Helvetica, sans-serif;text-align:center;color:black;font-weight:normal;letter-spacing: 0.01em;transform: scale(6.5,6.5);">
                            {{ $tag_number }}
                        </h4>
                    </th>
                </tr>
            </table>
            <!--VIN AÑO Y MARCA -->
            <table style="margin-top:-10px;margin-left:-200px;margin-bottom:0px;">
                <tr>
                    <td width="30"></td>
                    <th width="250" >
                        <h4 style="font-size:20px;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;text-align:left;color: black;margin-left:60px;white-space:pre;">
                            VIN: {{ $request->vin }}
                        </h4>
                    </th>
                    <th width="70" >
                    </th>
                    <th width="250" >
                        <h4 style="font-size:20px;font-family:Arial, Helvetica, sans-serif;font-weight:400;text-align:left;color:black;margin-left:60px;white-space:pre;">
                            {{ $request->year }}  {{ $request->make }}
                        </h4>
                    </th>
                </tr>
            </table>
            <!--DEALER Y EXPIRACION -->
            <table style="margin-top: -50px;margin-bottom:0px;">
                <tr>
                    <th width="20"></th>
                    <th >
                        <h4 style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:bold;color: rgba(66, 75, 153, 0.849);margin-top:-100px;margin-bottom:8px;margin-right:-300px;">
                            Dealer No.
                        </h4>
                    </th>
                    <th style="border: 1px solid rgba(66, 75, 153, 0.849);" width="225" height="20">
                        <h4 style="font-size:3em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-24px;margin-bottom:8px;">
                            {{$request->deler_number}}
                        </h4>
                    </th>
                    <th width="5">
                        <h4 class="texto-vertical-3" style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;letter-spacing:0.1em;margin-top:10px;margin-bottom:8px;padding-left:10px;">
                            E X P I R E S
                        </h4>
                    </th>
                    <th style="border: 1px solid rgba(66, 75, 153, 0.849);" width="400">
                        <h4 style="font-size:6em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-24px;margin-bottom:8px;">
                            {{ $lateDay_Qr }}
                        </h4>
                    </th>
                    <th width="35">
                        <h4 class="texto-vertical-3" style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;letter-spacing:0.1em;margin-top:10px;margin-bottom:8px;">
                            E X P I R E S
                        </h4>
                    </th>
                </tr>
            </table>
            <table style="border-spacing: 0;margin-top:80px;">
                <tr>
                    <td width="460">
                        <center>
                            <h4 style="font-size:20px;font-weight:800;margin-top:-30px;margin-left:350px;white-space:pre;">Secretary of State - www.in.gov/sos</h4>
                        </center>
                    </td>
                </tr>
            </table>
    </div>



