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
<div class="div-master" style="width:100%;padding:120px 0px 0px 40px;">
    <table style="">
        <tr style="padding: 2px 0px 2px 0px;">
            <td >
                <p style="margin-top:-30px">
                    <img src="{{public_path('img/placas/state-seal-tennessee.png')}}" style="margin-right:-50px" width="80" height="80" />
                </p>
            </td>
            <th width="655">
                <h4 style="font-size:1.5em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:8px">TENNESSEE DEPARTMENT OF REVENUE</h4>
                <h4 style="font-size:1.2em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:-28px">Retain this document in the associated vehicle until receipt of</h4>
                <h4 style="font-size:1.2em;font-family:Arial, Helvetica, sans-serif;text-align:lcenter;font-weight:700;margin-top:-20px">The official Tennessee Certificate of Vehicle Reistration</h4>
            </th>
            <td >
                <p style="margin-top:-30px">
                    <img src="{{public_path('img/placas/state-seal-tennessee.png')}}" style="margin-right:-50px" width="80" height="80" />
                </p>
            </td>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">MAKE</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->make }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">MODEL</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->model }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">YEAR</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->year }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">EXPIRATION</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $lateDaySt }}</h4>
            </th>
        </tr>
    </table>
    <table style="border-spacing: 0;margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">VIN</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->vin }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">COLOR</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->major_color }}</h4>
            </th>
            <th  style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">PLATE NUMBER</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $tag_number }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:8px">STATE</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->state }}</h4>
            </th>
        </tr>
    </table>
    <table style="border-spacing: 0;margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="border: 1px solid black;" width="382" height="80">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;">OWNER INFO</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->name1 }} {{ $request->name2 }} {{ $request->address }} {{ $request->state }}</h4>
            </th>
            <th style="border: 1px solid black;" width="190" height="80">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;">DEALERSHIP INFO</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->seller }} {{$request->deler_number}}</h4>
            </th>
            <th style="border: 1px solid black;" width="190" height="80">
                <h4 style="font-size:1.1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:400;">COUNTRY</h4>
                <h4 style="font-size:1em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:-24px;margin-bottom:8px">{{ $request->city }}</h4>
            </th>
        </tr>
    </table>
    <p style="margin-top:20px">
        <img src="{{public_path('/placas/'.$filename)}}" style="margin-right:-100px" width="200" height="100" />
    </p>
</div>
