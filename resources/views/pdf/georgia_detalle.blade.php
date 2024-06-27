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

    .b {
        text-orientation: upright;
        color: white;
        font-weight: bold;
    }
</style>
<div class="div-master" style="width:100%;padding:0px 0px 0px 100px;text-align:center;">
    <!--CABECERA 1-->
    <table style="text-align:center;margin-top: 200px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="700">
                <h4
                    style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;">
                    Georgia Department of Revenue
                </h4>
            </th>
        </tr>
    </table>
    <!--CABECERA 2-->
    <table style="text-align:center;margin-top:-25px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="700">
                <h4
                    style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:0px;">
                    Georgia Temporary License Number: {{ $tag_number }}
                </h4>
            </th>
        </tr>
    </table>
    <!--VEHICLE INFO 1-->
    <table style="margin-top: -10px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="50">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    VIN:</h4>
            </th>
            <th width="200">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{ $request->vin }}</h4>
            </th>
            <th width="40">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    Year:</h4>
            </th>
            <th width="160">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{ $request->year }}</h4>
            </th>
            <th width="40">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    Color:</h4>
            </th>
            <th width="210">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{ $request->major_color }}, {{ $request->minor_color }}</h4>
            </th>
        </tr>
    </table>
    <!--VEHICLE INFO 2-->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="50">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    Title:</h4>
            </th>
            <th width="200">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                </h4>
            </th>
            <th width="40">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    Make:</h4>
            </th>
            <th width="160">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{ $request->make }}</h4>
            </th>
            <th width="40">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    Model:</h4>
            </th>
            <th width="210">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{ $request->model }}</h4>
            </th>
        </tr>
    </table>
    <!--REGISTRATION INFO-->
    <table style="margin-top: 20px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="325">
                <h4
                    style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:0px;border-bottom: 1px solid black;">
                    Temporary Registrant Information
                </h4>
            </th>
            <th width="50">
            </th>
            <th width="325">
                <h4
                    style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:0px;border-bottom: 1px solid black;">
                    County Information
                </h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 5px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="325">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->name1 }} {{ $request->name2 }} <br> {{ $request->address }}
                </h4>
            </th>
            <th width="50">
            </th>
            <th width="325">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    ALPHARETTA <br> 5834 ATLANTA HWY STE. C <br> ALPHARETTA, GA 30004
                </h4>
            </th>
        </tr>
    </table>
</div>
