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
                    <img src="{{public_path('img/placas/BMV_indiana.png')}}" style="margin-right:-200px;" width="100" height="100" />
                </p>
            </th>
            <th width="760">
                <h4 style="font-size:2.5em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color: rgba(66, 75, 153, 0.849);">INDIANA</h4>
                <h4 style="font-size:2em;font-family:Arial, Helvetica, ans-serif;text-align:center;font-weight:700;color: rgba(66, 75, 153, 0.849);margin-top:-50px;">Temporary Registration Permit</h4>
            </th>
            <th >
                <p >
                    <img src="data:image/png;base64,{{ base64_encode($dirImage)}}" style="margin-left:-200px;" width="100" height="100" />
                </p>
            </th>
        </tr>
    </table>
    <!-- FILA DE TABLA VEHICLE DESCRIPTION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="border: 1px solid black; background-color: #cdd5e2;" width="760">
                <h4 style="font-size:1.2em;font-family: Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:4px;">VEHICLE DESCRIPTION</h4>
            </th>
        </tr>
    </table>
    <!-- TABLA VEHICLE DESCRIPTION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;" width="760">
            <th width="120">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">PLATE NUMBER</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $tag_number }}</h4>
            </th>
            <th width="80">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">YEAR</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->year }}</h4>
            </th>
            <th width="80">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">COLOR</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->major_color }}</h4>
            </th>
            <th width="80">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">MAKE</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->make}}</h4>
            </th>
            <th width="150">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">MODEL</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->model }}</h4>
            </th>
            <th width="250">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">VEHICLE IDENTICATIONNUMBER</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->vin }}</h4>
            </th>
        </tr>
    </table>
    <!-- FILA DE TABLA OWNER INFORMATION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="border: 1px solid black; background-color: #cdd5e2;" width="760" >
                <h4 style="font-size:1.2em;font-family: Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:4px;">OWNER INFORMATION</h4>
            </th>
        </tr>
    </table>
    <!-- TABLA OWNER INFORMATION -->
    <table style="margin-top: 0px;margin-bottom:-0px;" width="760">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 0px 2px; border-style:solid black;">
            <th  width="160">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">NAME</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->name1 }} {{ $request->name2 }}</h4>
            </th>
            <th width="200">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">ADDRESS</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->address }}</h4>
            </th>
            <th width="160">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">CITY</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->city }}</h4>
            </th>
            <th width="80">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">STATE</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->state }}</h4>
            </th>
            <th width="80">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">ZIP</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $request->zip }}</h4>
            </th>
        </tr>
    </table>
    <!-- TABLA VENDEDOR -->
    <table style="margin-top: 0px;margin-bottom:-0px;" width="760">
        <tr style="padding: 2px 0px 2px 0px;border-width: 0px 2px 1px 2px; border-style:solid black;">
            <th width="150">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">ISSUE DATE</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $initDay_Qr }}</h4>
            </th>
            <th width="150">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">EXPIRES DATE</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{ $lateDay_Qr }}</h4>
            </th>
            <th width="300">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">BUSSINES OFFICE</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{$request->seller}}</h4>
            </th>
            <th  width="160">
                <h4 style="font-size:1.1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;">DEALERS NUMBER</h4>
                <h4 style="font-size:1em;font-family: Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:-24px;margin-bottom:8px;">{{$request->deler_number}}</h4>
            </th>

        </tr>
    </table>
</div>
