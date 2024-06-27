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
<div class="div-master" style="width:100%;padding:100px 0px 0px 40px;">
    <!--VEHICLE AND OWNER INFORMATION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;background-color: black;">
            <th style="padding: 2px 0px 2px 4px;" width="760">
                <h4
                    style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:white ;margin-top:0px;margin-bottom:0px;">
                    Vehicle and Owner Information</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Year:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="156">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->year }}</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Make:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="122">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->make }}</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Model:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->model }}</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Color:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="150">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->major_color }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    VIN:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="156">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->vin }}</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Odmeter:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="122">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="80">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    State to be titied:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="70">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Color 2:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="150">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->minor_color }}</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="50">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Owner:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="226">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->name1 }} {{ $request->name2 }}</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="80">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Driver ID:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="150">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="80">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    State Licensed:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="150">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;">
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="130">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Address of Purchaser(s):</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="622">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $request->address }} </h4>
            </th>
        </tr>
    </table>
    <!--DEALER AND INSURANCE INFORMATION -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 8px;background-color: black;">
            <th width="760">
                <h4
                    style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:700;color:white ;margin-top:0px;margin-bottom:0px;">
                    Dealer and Insurance Information</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Dealer Name:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    POWERPLAY MOTORS LLC</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Dealer ID:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    W12682928</h4>
            </th>
        </tr>
    </table>
    <!--DESCARGO LEGAL -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr>
            <th style="padding: 10px 0px 10px 8px;" width="760">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    I certify under penality of law that the vehicle noted on the face hereof is covered by al least the
                    minimum amounts of insurance required by the
                    North Carolina Motor Vehicle Laws and that I have no outstanding violations with the Motor Vehicle
                    Administration. I further certify under penality
                    of perjury, that the statements made herein are true and correct to the best of my knowledge,
                    information and belief.
                </h4>
            </th>
        </tr>
    </table>
    <!--SIGNATURES AND DATE -->
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 2px 0px 2px 0px;background-color: black;">
            <th width="760">
                <h4
                    style="font-size:1em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:center;font-weight:700;color:white ;margin-top:0px;margin-bottom:0px;">
                    Signatures and Date</h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Owner:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Dealership:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
        </tr>
    </table>
    <table style="margin-top: 0px;margin-bottom:-0px;">
        <tr style="padding: 0px 0px 0px 0px;">
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Co-Owner:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                </h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="100">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    Date of Delivery:</h4>
            </th>
            <th style="padding: 2px 0px 2px 4px;border: 1px solid black;" width="272">
                <h4
                    style="font-size:0.8em;font-family:Roboto,Arial, Helvetica, sans-serif;text-align:left;font-weight:400;margin-top:0px;margin-bottom:0px;">
                    {{ $lateDay_Qr }}</h4>
            </th>
        </tr>
    </table>
</div>
