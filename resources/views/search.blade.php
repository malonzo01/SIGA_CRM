<table>
      <thead>
        <tr>
          <td colspan="2" align="center">
            @if($str_arr[12] == 'texas')
            <img src="{{ asset('img/txdmv_logo.jpg') }}" alt="Web Dealer" title="Web Dealer - Electronic Title and Registration">
            @elseif($str_arr[12] == 'jersey')
            <img src="{{ asset('img/njdmv_logo.jpg') }}" width="200" alt="Web Dealer" title="Web Dealer - Electronic Title and Registration">
            @elseif($str_arr[12] == 'nyork')
            <img src="{{ asset('img/nydmv_logo.jpg') }}" width="200" alt="Web Dealer" title="Web Dealer - Electronic Title and Registration">
            @elseif($str_arr[12] == 'florida')
            <img src="{{ asset('img/placas/IMG_FLOR_HEAD.jpg') }}" width="200" alt="Web Dealer" title="Web Dealer - Electronic Title and Registration">
            @endif
          </td>
        </tr>
      </thead>
      <tbody id="bodyTable">
        <tr>
          <td colspan="2" align="center"></td>
        </tr>

        <!-- Tag Details -->

        <tr>
          <td align="right"><b>TagNo:</b></td>
          <td align="left" id="TagNo">{{ $str_arr[0] }}</td>
        </tr>
        <tr>
          <td align="right"><b>Tag Type:</b></td>
          <td align="left" id="tagType">BUYERS TAG</td>
        </tr>

        <tr>
          <td align="right"><b>Effective Timestamp:</b></td>
          <td align="left" id="effectiveDate">{{ $str_arr[1] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Verification Code:</b></td>
          <td align="left" id="verificationCode">{{ $str_arr[2] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Create Timestamp:</b></td>
          <td align="left" id="timestamp">{{ $str_arr[3] }}</td>
        </tr>

        <tr>
          <td align="right"><b>End Timestamp:</b></td>
          <td align="left" id="expires">{{ $str_arr[4] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Status Code:</b></td>
          <td align="left">ACTIVE</td>
        </tr>

        <!-- Vehicle Details -->

        <tr>
          <td align="right"><b>VIN:</b></td>
          <td align="left" id="vin">{{ $str_arr[5] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Model Year:</b></td>
          <td align="left" id="year">{{ $str_arr[6] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Make:</b></td>
          <td align="left" id="make">{{ $str_arr[7] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Vehicle BodyType:</b></td>
          <td align="left" id="bodyStyle">{{ $str_arr[8] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Major Color:</b></td>
          <td align="left" id="color">{{ $str_arr[9] }}</td>
        </tr>

        <!-- Dealer Details -->

        <tr>
          <td align="right"><b>Dealer GDN:</b></td>
          <td align="left" id="numberDealler">{{ $str_arr[10] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Dealer Name:</b></td>
          <td align="left" id="dealerName">ALBERTO RAMOS</td>
        </tr>

        <tr id="dealerDba">
          <td align="right"><b>Dealer DBA:</b></td>
          <td align="left" id="seller">{{ $str_arr[11] }}</td>
        </tr>

        <tr>
          <td align="right"><b>Address:</b></td>
            @if($str_arr[12] == 'texas')
            <td align="left" id="direccionDealer">
              6200 STATE HWY 3, WEBSTER, TX 77598
            </td>
            @elseif($str_arr[12] == 'jersey')
            <td align="left" id="direccionDealer">
              938 Kenneth Ave, Elizabeth, NJ 07202
            </td>
            @elseif($str_arr[12] == 'nyork')
            <td align="left" id="direccionDealer">
              144-20 Hillside Ave., Queens, NY 11435
            </td>
            @elseif($str_arr[12] == 'florida')
            <td align="left" id="direccionDealer">
              7795 W Flagler St Suite 82C, Miami, FL 33144
            </td>
            @endif
        </tr>
      </tbody>
    </table>
