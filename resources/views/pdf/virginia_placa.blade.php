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
    <!--CABECERA PLACA -->
    <table style="margin-top:50px;margin-left:50px;">
        <tr>
            <th style="margin-top:0px;margin-left:0px;text-align:center;" width="200">
                <p style="margin-top:0px">
                    <img src="{{ public_path('img/placas/virginia.png') }}" style="margin-right:0px" width="180"
                        height="180" />
                </p>
            </th>
            <th style="margin-top:0px;margin-left:-150px;text-align:left;" width="440">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.2em;font-family: Roboto,Helvetica;font-weight:700;letter-spacing: 0.8em;transform:scale(1.5, 2.5);margin-top:10px;margin-left:115px;margin-bottom:10px;">
                    VIRGINIA
                </h4>
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->year }} {{ $request->make }}
                </h4>
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->major_color }}
                </h4>
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    VIN: {{ $request->vin }}
                </h4>
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Georgia, Cambria, Times, 'Times New Roman';font-weight:400;margin-top:0px;margin-bottom:-20px;">
                    Sold By :
                </h4>
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:1.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:400;margin-top:-35px;margin-left:100px;margin-bottom:0px;margin-top:-50px;">
                    VA CARS WEST BROAD
                </h4>
            </th>
            <th style="margin-top:0px;margin-left:0px;text-align:center;" width="45">
                <h4
                    style="padding: 2px 0px 2px 4px;font-size:2.5em;font-family:Roboto,Arial, Helvetica, sans-serif;font-weight:700;color:white;background-color:black;margin-top:-20px;margin-left:-210px;">
                    Exp: {{ $lateDay_Qr_St }}
                </h4>
            </th>
        </tr>
    </table>
    <!--NUMERO DE PLACA -->
    <table style="text-align:center;margin-top:20px;margin-left:50px;">
        <tr>
            <td width="700">
                <h4
                    style="font-size:3em;font-family:Roboto,Arial,Helvetica, sans-serif;text-align:center;font-weight:700;transform:scale(4, 4.8);">
                    {{ $tag_number }}
                </h4>
            </td>
        </tr>
    </table>

</div>
<!--DETALLE PLACA-->
<div class="div-master-B" style="width:100%;padding:0px 0px 0px 100px;text-align:center;">
    <table style="margin-top:20px;margin-left:-50;">
        <tr>
            <th width="130">
            </th>
            <th width="500" style="border-top: 1px solid black;">
            </th>
            <th width="130">
            </th>
        </tr>
    </table>
    <div class="row">
        <div class="col 8">
            <!--CABECERA 1 style="border: 1px solid black;" -->
            <table style="margin-top:20px;margin-left:-50;">
                <tr>
                    <th width="130">
                        <p style="padding: 2px 0px 0px 4px;margin-top:0px;margin-left:0;">
                            <img src="{{ public_path('img/placas/LOGO.png') }}" width="120" height="20" />
                        </p>
                    </th>
                    <th width="470">
                        <h4
                            style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:bold;margin-top:0px;">
                            TEMPORARY CERTIFICATE OF REGISTRATION
                        </h4>
                        <h4
                            style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;margin-top:-20px;">
                            VALID FOR {{ $request->days }} DAYS
                        </h4>
                    </th>
                    <th width="20">
                    </th>

                </tr>
            </table>
            <!--DATOS DEL COMPRADOR-->
            <table style="margin-top:-10px;margin-left:-50;">
                <tr style="padding: 2px 0px 2px 0px;">
                    <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="300">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            PURCHASER'S NAME:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->name1 }} {{ $request->name2 }}
                        </h4>
                    </th>
                    <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="300">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ADDRESS:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->address }}, {{ $request->city }}, {{ $request->state }}
                            {{ $request->zip }}
                        </h4>
                    </th>
                </tr>
            </table>
            <!--DATOS DEL VEHICULO-->
            <table style="margin-top:0px;margin-left:-50;">
                <tr>
                    <th width="90" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            YEAR:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->year }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            MAKE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->make }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            BODY STYLE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->body_style }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            IDENTIFICATION NUMBER:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->vin }}
                        </h4>
                    </th>
                    <th width="120" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            STATE IN WHICH <br> VEHICLE WILL <br> BE LICENSED:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:right;font-weight:normal;margin-top:-20px;margin-right:30px ;margin-bottom:5px;">
                            {{ $request->state }}
                        </h4>
                    </th>
                    <th width="20">
                    </th>

                </tr>
            </table>
            <!--DATOS DEL DEALER-->
            <table style="margin-top:0px;margin-left:-50;">
                <tr>
                    <th width="180" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            DEALER’S NAME:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            VA CARS WEST BROAD
                        </h4>
                    </th>
                    <th width="125" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ADDRESS:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            7494 W Broad St
                        </h4>
                    </th>
                    <th width="125" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            CITY:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            Richmond
                        </h4>
                    </th>
                    <th width="50" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            STATE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            VA
                        </h4>
                    </th>
                    <th width="120" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ZIP:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            23294
                        </h4>
                    </th>
                    <th width="20">
                    </th>

                </tr>
            </table>
        </div>
        <div class="col 4" style="margin-top:-150px;">
            <!--VSA CEBECERA-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="120">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;margin-top:20px;">
                        VSA 01 (07/01/06)
                    </h4>
                </th>
            </table>
            <!--VSA 1/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="120" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        TEMPORARY TAG NUMBER.
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $tag_number }}
                    </h4>
                </th>
            </table>
            <!--VSA 2/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="120" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        DATE OF SALE:
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $initDaySt }}
                    </h4>
                </th>
            </table>
            <!--VSA 3/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="120" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        EXPIRATION DATE:
                    </h4>
                    <h4
                        style="padding: 0px 0px 2px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $lateDaySt }}
                    </h4>
                </th>
            </table>
            <!--VSA 4/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="120" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        DEALER LICENSE NUMBER:
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        P162604
                    </h4>
                </th>
            </table>
        </div>
    </div>
    <div class="row">
        <!--DESCARGO-->
        <table style="margin-top:0px;margin-left:-50;">
            <tr>
                <th width="760">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        Virginia law states that a motor vihicle liability policy must be issued by a company
                        licensed
                        to do
                        business in Virginia.
                        The policy must provide at least minimum coverage as required by law.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:0px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">
                        X
                    </h4>
                </th>
                <th width="750">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle is insured by a policy that meets the above requirements.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:0px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">

                    </h4>
                </th>
                <th width="750">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle will be licensed in Virginia and is not insured by a policy meeting the above
                        requirements.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:0px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">

                    </h4>
                </th>
                <th width="400">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle will be licensed out of state and is not insured by a policy meeting the above
                        requirements.
                    </h4>
                </th>
                <th width="50">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        NOTE:
                    </h4>
                </th>
                <th width="300">
                    <h4
                        style="font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        Payment of UMV fee does not provide insurance coverage
                    </h4>
                </th>
            </tr>
        </table>
        <!--FIRMAS-->
        <table style="margin-top:15px;margin-left:-50;">
            <tr>
                <th width="250" style="border-top: 2px solid black;">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        PURCHASER'S SIGNATURE
                    </h4>
                </th>
                <th width="180" style="border-top: 2px solid black;">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        DATE
                    </h4>
                </th>
                <th width="90">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10;">

                    </h4>
                </th>
                <th width="240" style="border-top: 2px solid black;">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.5em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        DEALER REPRESENTATIVE'S SIGNATURE
                    </h4>
                </th>
            </tr>
        </table>
    </div>

</div>
