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
<div class="div-master" style="width:100%;padding:0px 0px 0px 100px;text-align:center;">
    <!--CABECERA 1-->
    <table style="text-align:center;margin-top: 100px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="50" >
                <p style="margin-top:0px">
                    <img src="{{public_path('img/placas/state-seal-ohio-BW.png')}}" style="margin-right:-50px" width="100" height="100" />
                </p>
            </th>
            <th width="600" >
                <h4
                    style="font-size:1.3em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-30px;">
                    OHIO DEPARMENT OF PUBLIC SAFETY
                </h4>
                <h4
                    style="font-size:1.3em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-30px;">
                    BUREAU OF MOTOR VEHICLES
                </h4>
            </th>
            <th width="50" >
            </th>
        </tr>
    </table>
    <!--CABECERA 2-->
    <table style="text-align:center;margin-top:-30px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="50" >
            </th>
            <th width="600" >
                <h4
                    style="font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;">
                    TEMPORARY TAG REGISTRATION
                </h4>
                <h4
                style="font-size:1.1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-30px;">
                Keep this document in the registered vehicle until receipt of the official Certificate of Registration
            </h4>
            </th>
            <th width="50" >
            </th>
        </tr>
    </table>
    <!--VEHICLE INFO 1-->
    <table style="margin-top:0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="200" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    TEMPORARY TAG NO.
                </h4>
                <h4
                style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                {{ $tag_number }}</h4>
            </th>
            <th width="350" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    PURCHASER/LESSEE NAME
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{$request->name1}} {{$request->name2}}
                </h4>
            </th>
            <th width="150" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    VEHICLE TYPE
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{$request->body_style}}
                </h4>
            </th>
        </tr>
    </table>
    <!--VEHICLE INFO 2-->
    <table style="margin-top:0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="200" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    VEHICLE YEAR.
                </h4>
                <h4
                style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                {{$request->year}}</h4>
            </th>
            <th width="150" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    VEHICLE MAKE
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{$request->make}}
                </h4>
            </th>
            <th width="350" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    VEHICLE SERIAL NO.
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{$request->vin}}
                </h4>
            </th>
        </tr>
    </table>
    <!--REGISTRATION INFO-->
    <table style="margin-top:0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="200" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    EXPIRATION.
                </h4>
                <h4
                style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                {{$lateDay_Qr_Me}}</h4>
            </th>
            <th width="150" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    ISSUE DATE
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    {{$initDay_Qr_Me}}
                </h4>
            </th>
            <th width="350" style="border: 1px solid black;">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;;">
                    DEALER/AGENCY NO.
                </h4>
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;;">
                    ND842563
                </h4>
            </th>
        </tr>
    </table>
    <table style="margin-top:20px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="500" >
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:0px;">
                    PROOF OF FINANCIAL RESPONSABILITY
                </h4>
                <h4 style="padding: 2px 0px 2px 0px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:justify;font-weight:400;margin-top:0px;margin-right:50px;margin-bottom:0px;margin-left:50px;">
                I affirm thet all owners (or lessees of leased vehicle) now have insurance or other FR coverage and will not operate or permit the operation of this motor vehicle without FR coverage.
                </h4>
            </th>
            <th width="200" >
                <p style="margin-top:0px">
                    <img src="{{public_path('/placas/'.$filename)}}" style="margin-right:0px;" width="200" height="80" />
                </p>
            </th>
        </tr>
    </table>
    <table style="margin-top:10px;margin-bottom:0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th width="500" >
                <h4 style="padding: 2px 0px 2px 4px;font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;margin-bottom:0px;">
                    YOU WILL LOSE YOUR DRIVER LICENSE IF YOU DRIVE WITHOUT INSURANCE OR <br> OTHER ACCEPTABLE FINANCIAL RESPONSIBILITY COVERAGE
                </h4>
            </th>
            <th width="200">
                <h4 style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-40px;margin-bottom:0px;">
                    {{ $tag_number }}</h4>
                </h4>
            </th>
        </tr>
    </table>

</div>
