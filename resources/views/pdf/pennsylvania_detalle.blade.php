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

    .b {
        text-orientation: upright;
        color: white;
        font-weight: bold;
    }
</style>
<div class="div-master" style="width:100%;padding:0px 0px 0px 40px;">
    <!--CABECERA -->
    <table style="border-spacing: 0;margin-top:20px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th >
                <p >
                    <img src="{{public_path('img/placas/pennsylvaniaConsulta.jpg')}}" style="margin-right:-200px;margin-top:-20px;" width="180" height="50" />
                </p>
            </th>
            <th width="760">
                <h4 style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px">Pennsylvania Temporary Registration Certificate</h4>
                <h4 style="font-size:1.3em;font-family:Roboto,Arial, Helvetica, ans-serif;text-align:center;font-weight:400;margin-top:-20px;">Pennsylvania Department Of Transportation - 1101 South Front</h4>
                <h4 style="font-size:1.3em;font-family:Roboto,Arial, Helvetica, ans-serif;text-align:center;font-weight:400;margin-top:-25px;">Street Harrisburg, PA 17104</h4>
            </th>
            <th >
                <p >
                    <img src="{{public_path('img/placas/Seal_of_Pennsylvania.png')}}" style="margin-left:-200px;" width="80" height="80" />
                </p>
            </th>
        </tr>
    </table>
    <!-- TABLA VEHICLE DESCRIPTION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;" width="760">
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Plate</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $tag_number }}</h4>
            </th>
            <th width="120" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Issued Date</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $initDay_Qr }}</h4>
            </th>
            <th width="120" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Expiration Date</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $lateDay_Qr }}</h4>
            </th>
            <th width="180" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Identification Number</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->vin}}</h4>
            </th>
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Plate</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $tag_number }}</h4>
            </th>
            <th width="180" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">VIN</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->vin }}</h4>
            </th>
        </tr>
    </table>
    <!-- TABLA VEHICLE DESCRIPTION 2-->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;" width="760">
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Year</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->year }}</h4>
            </th>
            <th width="120" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Make</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->make }}</h4>
            </th>
            <th width="140" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Model</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->model }}</h4>
            </th>
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Body Style</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->body_style}}</h4>
            </th>
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Color</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->major_color }}</h4>
            </th>
            <th width="130" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Issued Date</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $initDay_Qr }}</h4>
            </th>
            <th width="130" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Expiration Date</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $lateDay_Qr }}</h4>
            </th>
        </tr>
    </table>
    <!-- TABLA OWNER INFORMATION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;" width="760">
            <th width="220" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Name</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->name1 }} {{ $request->name2 }}</h4>
            </th>
            <th width="100" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">City</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->city }}</h4>
            </th>
            <th width="100" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">State</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->state }}</h4>
            </th>
            <th width="80" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Zip</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->zip}}</h4>
            </th>
            <th width="260" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">Make</h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:0.8em;font-family: Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-10px;margin-bottom:8px;">{{ $request->make }}</h4>
            </th>
        </tr>
    </table>
</div>
