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
<div class="div-master" style="width:100%;padding:0px 0px 0px 100px;text-align:center;">
    <div class="row">
        <div class="col 8">
            <!--CABECERA 1 style="border: 1px solid black;" -->
            <table style="margin-top:0px;margin-left:-50;">
                <tr>
                    <th width="130" >
                        <p style="padding: 2px 0px 0px 4px;margin-top:0px;margin-left:0;">
                            <img src="{{ public_path('img/placas/LOGO.png') }}" width="120" height="20" />
                        </p>
                    </th>
                    <th width="470" >
                        <h4
                            style="font-size:1.3em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:700;margin-top:0px;">
                            TEMPORARY CERTIFICATE OF REGISTRATION
                        </h4>
                        <h4
                            style="font-size:1.3em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:400;margin-top:-30px;">
                            VALID FOR {{ $request->days }} DAYS
                        </h4>
                    </th>
                    <th width="20" >
                    </th>

                </tr>
            </table>
            <!--DATOS DEL COMPRADOR-->
            <table style="margin-top:-20px;margin-left:-50;">
                <tr>
                    <th width="300" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            PURCHASER'S NAME:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            {{ $request->name1 }} {{ $request->name2 }}
                        </h4>
                    </th>
                    <th width="300" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ADDRESS:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            {{ $request->address }}, {{ $request->city }}, {{ $request->state }} {{ $request->zip }}
                        </h4>
                    </th>
                    <th width="20" >
                    </th>

                </tr>
            </table>
            <!--DATOS DEL VEHICULO-->
            <table style="margin-top:0px;margin-left:-50;">
                <tr>
                    <th width="90" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            YEAR:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->year }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            MAKE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->make }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            BODY STYLE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->body_style }}
                        </h4>
                    </th>
                    <th width="130" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-10px;margin-bottom:0px;margin-left:5;">
                            IDENTIFICATION NUMBER:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            {{ $request->vin }}
                        </h4>
                    </th>
                    <th width="120" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            STATE IN WHICH <br> VEHICLE WILL <br> BE LICENSED:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:right;font-weight:normal;margin-top:-30px;margin-right:20px ;margin-bottom:15px;">
                            {{ $request->state }}
                        </h4>
                    </th>
                    <th width="20" >
                    </th>

                </tr>
            </table>
            <!--DATOS DEL DEALER-->
            <table style="margin-top:0px;margin-left:-50;">
                <tr>
                    <th width="180" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            DEALER’S NAME:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            VA CARS WEST BROAD
                        </h4>
                    </th>
                    <th width="125" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ADDRESS:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            7494 W Broad St
                        </h4>
                    </th>
                    <th width="125" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            CITY:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            Richmond
                        </h4>
                    </th>
                    <th width="50" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            STATE:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            VA
                        </h4>
                    </th>
                    <th width="120" style="border: 1px solid black;">
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:5;">
                            ZIP:
                        </h4>
                        <h4
                            style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:-5px;margin-bottom:0px;margin-left:5;">
                            23294
                        </h4>
                    </th>
                    <th width="20" >
                    </th>

                </tr>
            </table>
        </div>
        <div class="col 4" style="margin-top:-180px;">
            <!--VSA CEBECERA-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="140" >
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;margin-top:20px;">
                        VSA 01 (07/01/06)
                    </h4>
                </th>
            </table>
            <!--VSA 1/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="140" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        TEMPORARY TAG NUMBER.
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $tag_number }}
                    </h4>
                </th>
            </table>
            <!--VSA 2/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="140" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        DATE OF SALE:
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $initDaySt }}
                    </h4>
                </th>
            </table>
            <!--VSA 3/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="140" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        EXPIRATION DATE:
                    </h4>
                    <h4
                        style="padding: 0px 0px 2px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        {{ $lateDaySt }}
                    </h4>
                </th>
            </table>
            <!--VSA 4/4-->
            <table style="margin-top:0px;margin-left:575;">
                <th width="140" style="border: 1px solid black;">
                    <h4
                        style="padding: 2px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
                        DEALER LICENSE NUMBER:
                    </h4>
                    <h4
                        style="padding: 0px 0px 0px 10px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;">
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
                        style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        Virginia law states that a motor vihicle liability policy must be issued by a company licensed
                        to do
                        business in Virginia.
                        The policy must provide at least minimum coverage as required by law.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:10px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:center;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">
                        X
                    </h4>
                </th>
                <th width="750">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle is insured by a policy that meets the above requirements.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:2px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">

                    </h4>
                </th>
                <th width="750">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle will be licensed in Virginia and is not insured by a policy meeting the above
                        requirements.
                    </h4>
                </th>
            </tr>
        </table>
        <table style="margin-top:2px;margin-left:-50;">
            <tr>
                <th width="10" style="border: 1px solid black;">
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:0px;">

                    </h4>
                </th>
                <th width="400">
                    <h4
                        style="padding: 0px 0px 0px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        This vehicle will be licensed out of state and is not insured by a policy meeting the above
                        requirements.
                    </h4>
                </th>
                <th width="50">
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10px;">
                        NOTE:
                    </h4>
                </th>
                <th width="300">
                    <h4
                        style="font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10px;">
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
                        style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        PURCHASER'S SIGNATURE
                    </h4>
                </th>
                <th width="170" style="border-top: 2px solid black;">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        DATE
                    </h4>
                </th>
                <th width="110">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:normal;margin-top:0px;margin-bottom:0px;margin-left:10;">

                    </h4>
                </th>
                <th width="230" style="border-top: 2px solid black;">
                    <h4
                        style="padding: 2px 0px 2px 4px;font-size:0.7em;font-family:Arial, Helvetica, sans-serif;text-align:left;font-weight:700;margin-top:0px;margin-bottom:0px;margin-left:10;">
                        DEALER REPRESENTATIVE'S SIGNATURE
                    </h4>
                </th>
            </tr>
        </table>
    </div>

</div>
