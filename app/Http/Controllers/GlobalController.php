<?php

namespace App\Http\Controllers;
use App\Models\Plates;
use App\Models\Insurance;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Luecano\NumeroALetras\NumeroALetras;
use iio\libmergepdf\Merger;
use QrCode;
use File;
use DNS1D;
use DNS2D;

class GlobalController extends Controller
{
	public $states = [
		"AL" => "AL:Alabama",
		"Ak" => "Ak:Alaska",
		"AZ" => "AZ:Arizona",
		"AR" => "AR:Arkansas",
		"CA" => "CA:California",
		"CO" => "CO:Colorado",
		"CT" => "CT:Connecticut",
		"DE" => "DE:Delaware",
		"DC" => "DC:Distrito de Columbia",
		"FL" => "FL:Florida",
		"GA" => "GA:Georgia",
		"HI" => "HI:Hawái",
		"ID" => "ID:Idaho",
		"IL" => "IL:Illinois",
		"IN" => "IN:Indiana",
		"IA" => "IA:Lowa",
		"KS" => "KS:Kansas",
		"KY" => "KY:Kentucky",
		"LA" => "LA:Luisiana",
		"ME" => "ME:Maine",
		"MD" => "MD:Maryland",
		"MA" => "MA:Massachusetts",
		"MI" => "MI:Míchigan",
		"MN" => "MN:Minnesota",
		"MS" => "MS:Mississippi",
		"MO" => "MO:Misuri",
		"MT" => "MT:Montana",
		"NE" => "NE:Nebraska",
		"NV" => "NV:Nevada",
		"NH" => "NH:New Hampshire",
		"NJ" => "NJ:New Jersey",
		"NM" => "NM:New Mexico",
		"NY" => "NY:New York",
		"NC" => "NC:North Carolina",
		"ND" => "ND:North Dacota",
		"OH" => "OH:Ohio",
		"OK" => "OK:Oklahoma",
		"OR" => "OR:Oregón",
		"PA" => "PA:Pennsylvania",
		"RI" => "RI:Rhode Island",
		"SC" => "SC:South Carolina",
		"SD" => "SD:South Dakota",
		"TN" => "TN:Tennessee",
		"TX" => "TX:Texas",
		"UT" => "UT:Utah",
		"VT" => "VT:Vermont",
		"VA" => "VA:Virginia",
		"WA" => "WA:Washington",
		"WV" => "WV:Virginia Occidental",
		"WI" => "WI:Wisconsin",
		"WY" => "WY:Wyoming",
	];
	public $days_f = [
		"365" => "365",
		"180" => "180",
		"120" => "120",
		"90" => "90",
		"60" => "60",
		"30" => "30",
	];
	public $days_s = [
		"90" => "90",
		"60" => "60",
		"30" => "30",
	];
	public $bodies = [
		"LL" => "LL",
		"PK" => "PK",
		"2D" => "2D",
		"3D" => "3D",
		"4D" => "4D",
		"2H" => "2H",
		"4H" => "4H",
		"SUV" => "SUV",
		"MC" => "MC",
		"VN" => "VN",
		"TRL" => "TRL",
		"UT" => "UT",
		"TR" => "TR",
		"CG" => "CG",
	];
	public $colors =[
		"BEIGE" => "BEIGE",
		"BLACK" => "BLACK",
		"BLUE" => "BLUE",
		"BROWN" => "BROWN",
		"GOLD" => "GOLD",
		"GRAY" => "GRAY",
		"GREEN" => "GREEN",
		"MAROON" => "MAROON",
		"ORANGE" => "ORANGE",
		"PURPLE" => "PURPLE",
		"RED" => "RED",
		"SILVER" => "SILVER",
		"TAN" => "TAN",
		"WHITE" => "WHITE",
		"YELLOW" => "YELLOW",
	];
	//Buscar VIN
    /*
	public function search_vin(Request $request)
	{
		$estado= $request->state;
		$vin= $request->vin;
		echo $estado.' '.$vin;
		if($request->state="Illinois")
		{
			$consulta=IllinoisModel::select('*')->where('vin', '=', $vin)->first();
		}
		//print_r($consulta);
		return view('insurence.formsearch',['consulta'=>$consulta]);
	}
    */

	// Mostrar el formulario para generar el PDF.
	public function generate_plate(string $insurence)
	{
		$placas = new PanelControlador();
		$insurences = $placas->get_insurences();

		// Según el tipo de Insurence Carga hasta 360 días o solo hasta 90 días
		$days = [];
		if ($insurence == "geico" or $insurence == "statefarm") {
			$days = $this->days_f;
		} else {
			$days = $this->days_s;
		}

		return view('insurence.form', [
			'states' => $this->states,
			'days' => $days,
			'bodies' => $this->bodies,
			'colors' => $this->colors,
			'selected' => $insurence,			// Aseguranza seleccionada para crear la placa.
			'insurences' => $insurences,	// Listado de aseguranzas.
		]);
	}

	// Función para generar el PDF según el tipo de Insurence.
	public function generate_pdf(Request $request, string $insurence)
	{

		$appurl=env('APP_URL');
        $state=$insurence;

        // OBTENEMOS LAS FECHAS DE CREACION Y EL TIEMPO DE DURACION
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// CAMBIAMOS EL FORMATO DE LAS FECHAS
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDaySt = date('d-m-y', strtotime($fecha));
        $initDay_Qr = date('m/d/Y', strtotime($fecha));
        $initDay_Qr_Me = date('m-d-Y', strtotime($fecha));
        $initDay_Qr_Me_St = date('m-d-y', strtotime($fecha));
        $initDay_Qr_St = date('m/d/y',strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));
		$current_time = date('h:i:s a', strtotime($createdDay));

		// DEFINIMOS LA FECHA DE CULMINACION SUMANDO LA FECHA ACTUAL CON LOS DIAS SELECCIONADOS POR EL USUARIO
        $lateDay_MdY = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('d-m-y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDayMe = date('d-M-Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_Me = date('m-d-Y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_Me_St = date('m-d-y',  strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_St = date('m/d/y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay . ' + ' . $days . ' days'));

        //GENERAR LA FECHA POR SEPARADO
		$anio = date('Y', strtotime($fecha));
		$dia = date('d', strtotime($fecha));
		$mes = date('m', strtotime($fecha));
		$monthLetter= $this->montDate($mes);
        $initAnio = date('Y', strtotime($fecha));
		$initMonth = date('m', strtotime($fecha));
		$initDate= $this->montDate($mes).' '.$dia.','.$anio;
		$lateAnioSt = date('y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateAnio = date('Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateMonth= date('m', strtotime($fecha . ' + ' . $days . ' days'));
        $lateMonthSt= date('M', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay= date('d', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDate= $this->montDate($lateMonth).' '.$lateDay.','.$lateAnio;
		$monthDateLast=$this->montDate($lateMonth);

        // GENERAMOS LOS CODIGOS DE PLACA ALEATORIOS.
        $tag_number = $this->generateRandomStringTagNumber('6'); //code placa
        $str = date('mYd', strtotime($fecha)) . 'JI';
		$vin = $this->generateRandomString('17'); //code vin
        switch ($state) {
            case 'florida':
                $tag_number = $this->generateRandomLetters('3') . $this->generateRandomNumbers('4'); //code placa
                $str = 'EXPIRES';
                $date_header = str_split(date('mdy', strtotime($fecha . ' + ' . $days . ' days')));
            break;
            case 'maryland':
                $tag_number =$this->generateRandomLetters('1').$this->generateRandomNumbers('5').$this->generateRandomLetters('1').$this->generateRandomNumbers('1'); //code placa
            break;
            case 'tennessee':
                $tag_number =$this->generateRandomLetters('7'); //code placa
            break;
            case 'colorado':
                $tag_number =$this->generateRandomNumbers('7'); //code placa
                $str = 'EXPIRES';
            break;
            case 'missouri':
				$tag_number = $this->generateRandomNumbers('2') . $this->generateRandomLetters('4'); //code placa
                $control_number =$this->generateRandomNumbers('7');
            break;
            case 'north_carolina':
                $tag_number =$this->generateRandomNumbers('8'); //code placa
            break;
            case 'georgia':
                $tag_number = $this->generateRandomLetters('1') . $this->generateRandomNumbers('7'); //code placa
            break;
            case 'illinois':
                $tag_number = $this->generateRandomNumbers('3') ."-". $this->generateRandomLetters('2') ."-". $this->generateRandomNumbers('4'); //code placa
            break;
            case 'ohio':
                $tag_number = $this->generateRandomLetters('1') . $this->generateRandomNumbers('6'); //code placa
            break;
            case 'virginia':
                $tag_number = $this->generateRandomLetters('1') . $this->generateRandomNumbers('5'); //code placa
            break;
            case 'pennsylvania':
                $tag_number = $this->generateRandomNumbers('4') ."-". $this->generateRandomNumbers('3'); //code placa
            break;
            case 'louisiana':
                $tag_number = $this->generateRandomNumbers('8'); //code placa
            break;
        }
		$chars = str_split($str);

		// CREAMOS LA CARPETA NUEVA
		$path		= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		// GENERAMOS UN NOMBRE DE ARCHIVO UNICO
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		$randnum_init = rand(0000000000, 9999999999);
		$randnum_last = rand(0, 9);
		$policy = $randnum_init . '-' . $randnum_last;

		// ENCODE DATA
        $data_encode = $tag_number . '|' .
                       $initDay_Qr . '|' .
                       $str . '|' .
                       $initDay_Qr_time . '|' .
                       $lateDay_Qr . '|' .
                       $request->vin . '|' .
                       $request->year . '|' .
                       $request->make . '|' .
                       $request->body_style . '|' .
                       $request->major_color . '|' .
                       $request->deler_number . '|' .
                       $request->seller . '|' .
                       $state;

        switch ($state) {
            case 'geico':
                $data_encode = $policy . '|' .
                            $initDay_Qr . '|' .
                            $str . '|' .
                            $initDay_Qr_time . '|' .
                            $lateDay_Qr . '|' .
                            $request->vin . '|' .
                            $request->year . '|' .
                            $request->make . '|' .
                            $request->body_style . '|' .
                            $request->major_color . '|' .
                            $request->deler_number . '|' .
                            $request->seller . '|' .
                            'insr_geico';
            break;
            case 'statefarm':
                $data_encode = $policy . '|' .
                            $initDay_Qr . '|' .
                            $str . '|' .
                            $initDay_Qr_time . '|' .
                            $lateDay_Qr . '|' .
                            $request->vin . '|' .
                            $request->year . '|' .
                            $request->make . '|' .
                            $request->body_style . '|' .
                            $request->major_color . '|' .
                            $request->deler_number . '|' .
                            $request->seller . '|' .
                            'insr_geico';
            break;
            case 'colorado':
                $data_encode = $policy . '|' .
                            $initDay_Qr . '|' .
                            $str . '|' .
                            $initDay_Qr_time . '|' .
                            $lateDay_Qr . '|' .
                            $request->vin . '|' .
                            $request->year . '|' .
                            $request->make . '|' .
                            $request->body_style . '|' .
                            $request->major_color . '|' .
                            $request->deler_number . '|' .
                            $request->seller . '|' .
                            'insr_geico';
            break;
        }

		$str_encode = base64_encode($data_encode);
      		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuarioid = $request->iduser;
        $insuramcebase= Insurance::Where('name',$insurence)->first();

		//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		$plate= new Plates();
		$plate->vin= $request->vin;
        $plate->plate=$tag_number;
        $plate->date_issue=$initDay_Qr;
		$plate->date_exp= $lateDay_Qr;
        $plate->days=$request->days;
		$plate->seller= $request->seller;
		$plate->dealer_number=$request->deler_number;
		$plate->make= $request->make;
		$plate->model= $request->model;
		$plate->year=$request->year;
		$plate->body_style=$request->body_style;
		$plate->major_color=$request->major_color;
		$plate->minor_color=$request->minor_color;
		$plate->name1= $request->name1;
		$plate->name2= $request->name2;
		$plate->address= $request->address;
		$plate->city= $request->city;
		$plate->state= $request->state;
		$plate->zip= $request->zip;
		$plate->email= $request->email;
		$plate->phone= $request->phone;
		$plate->user_id= $usuarioid;
        $plate->insurance_id= $insuramcebase->id;
        $plate->odometer= $request->odometer;
		$plate->save();

		//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		$lastId = $plate->id;
		$id=$lastId;
        $state=$insurence;
		$url= "$appurl/consultar/$state/$id";

        //CREACION DE QR PNG & GUARDADO EN LA CARPETA PUBLIC
        $dirImage=QrCode::size(200)->generate($url);
        switch ($state){
            case 'statefarm':

                file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));
            break;
            case 'geico':
                file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));
            break;
            case 'colorado':
                file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));
            break;
            case 'tennessee':
                file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));
            break;
            case 'illinois':
                $dirImage=QrCode::size(200)->backgroundColor(0,0,0,0)->generate("$url");
            break;
            case 'ohio':
                file_put_contents(public_path("/placas/$filename"), base64_decode(DNS1D::getBarcodePNG($url,'C128')));
            break;
            case 'texas':
                $dirImage = QrCode::size(200)->backgroundColor(0,0,0,0)->generate("$url");
            break;

        }

            //SE GENERAN LOS PDF
            switch ($insurence) {
                case 'geico':
                    // Creamos los PDF y los unimos en uno solo.
                    $m		= new Merger();
                    $pdf	= Pdf::loadView('pdf.colorado', compact('request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename', 'policy', 'current_time'));
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'florida':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.florida_placa', compact('request','dirImage', 'initDay', 'lateDay', 'year', 'vin', 'tag_number', 'chars', 'filename', 'date_header'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.florida', compact('request','dirImage', 'initDay', 'lateDay', 'year', 'vin', 'tag_number', 'chars', 'filename'));
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'new_jersey':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.njersey_nuevo_placa', compact('dirImage','request', 'initDay', 'initDaySt','initDay_Qr_Me_St','lateDay_Qr_Me_St', 'lateDay_MdY', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'new_york':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.nyork_nuevo_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay_MdY', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'statefarm':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.statefarm', compact('request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt','initDay_Qr_Me','lateDay_Qr_Me','initDay_Qr_time','lateDay_Qr_time', 'year', 'vin', 'tag_number', 'chars', 'filename', 'policy'));
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'texas':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.texas_nuevo_placa', compact('request','dirImage', 'initDay', 'lateDay_MdY', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.texas_nuevo', compact('request', 'dirImage', 'initDay', 'lateDay_MdY', 'year', 'vin', 'tag_number', 'chars', 'filename'));
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'colorado':
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.coloradoverdad', compact('request','tag_number','lateAnio','monthDateLast','lateDay'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.colorado2', compact('request', 'tag_number'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.colorado3', compact('request','initDate','lateDate','filename','chars', 'tag_number'))->setPaper('legal', 'portrait');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'illinois':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.illinois_placa',compact('request','initDay_Qr','lateDay_Qr','tag_number','dirImage'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $finalPDF = $m->merge();
                break;
                case 'maryland':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.maryland_placa',compact('request','initDay_Qr','lateDay_Qr','tag_number'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $finalPDF = $m->merge();
                break;
                case 'tennessee':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.tennessee_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDaySt','lateDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.tennessee_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDaySt','lateDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'indiana':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.indiana_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateDay_Qr', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.indiana_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDay_Qr','lateDaySt','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'missouri':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.missouri_placa', compact('request', 'dirImage','initDay', 'initDaySt','initDay_Qr', 'lateDay', 'lateDaySt','lateDay_Qr','lateDay_Qr_St', 'year', 'vin', 'tag_number', 'chars', 'filename','control_number'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'north_carolina':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.northcarolina_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnioSt','lateMonth','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.northcarolina_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnioSt','lateMonth', 'lateDay_Qr','lateDaySt','lateDay_Qr_St','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'georgia':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.georgia_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','lateDayMe', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.georgia_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDay_Qr','lateDaySt','lateDay_Qr_St','lateDayMe','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'ohio':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.ohio_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateDay_Qr', 'lateDaySt','lateDay_Qr_Me','initDay_Qr_Me', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.ohio_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateDay_Qr', 'lateDaySt','lateDay_Qr_Me','initDay_Qr_Me', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'virginia':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.virginia_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateDay_Qr_St', 'lateDaySt','lateDay_Qr_Me','initDay_Qr_Me', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'pennsylvania':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.pennsylvania_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnio','lateMonth','monthDateLast','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','lateDayMe', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.pennsylvania_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDay_Qr','lateDaySt','lateDay_Qr_St','lateDayMe','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'louisiana':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.louisiana_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnio','lateMonth','monthDateLast','initDay_Qr','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','lateDayMe','lateDate', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $pdf->render();
                    $m->addRaw($pdf->output());
                    unset($pdf);
                    $pdf = Pdf::loadView('pdf.louisiana_detalle', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnio','lateMonth','monthDateLast','initDay_Qr','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','lateDayMe','lateDate', 'year', 'vin', 'tag_number', 'chars', 'filename'));
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
                case 'placa':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDaySt','initDay_Qr', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
                    $m->addRaw($pdf->output());
                    $pdf->render();
                    $finalPDF = $m->merge();
                break;
            }

        // Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
        header("Content-Disposition: inline;filename=tag_". $insurence ."_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	// Funciones complementarias.
	public function showqr($id)
	{
		$code_decode = base64_decode($id);
		$str_arr = preg_split("/\|/", $code_decode);

		return view('search', compact('str_arr'));
	}

	private function generateRandomString($length)
	{

		$characters = '0123456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	private function generateRandomStringTagNumber($length)
	{

		$a = mt_rand(100000, 999999);
		$randomletter = substr(str_shuffle("ABCDEFGHIJKLMNPQRSTUVWXYZ"), 0, 1);
 		$lent_stat = $randomletter . $a;
		$my_array1 = str_split($lent_stat);

		//desordeno el array y lo muestro
		$codelast = str_shuffle($lent_stat);
		return $codelast;
	}

	private function generateRandomLetters($length)
	{

		$characters = 'ABCDEFGHIJKLMNPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	private function generateRandomNumbers($length)
	{

		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[random_int(0, $charactersLength - 1)];
		}
		return $randomString;
	}

    private function generateAlphanumericUpperCase($length) {
        $characters = array_merge(
            [chr(rand(65, 90))], // Letras mayúsculas
            range(0, 9) // Números
        );

        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, count($characters) - 1)];
        }

        return $randomString;
    }

	private function montDate($month)
	{
		switch ($month) {
			case '01':
				$monthLetter='JAN';
			break;
			case '02':
				$monthLetter='FEB';
			break;
			case '03':
				$monthLetter='MAR';
			break;
			case '04':
				$monthLetter='APR';
			break;
			case '05':
				$monthLetter='MAY';
			break;
			case '06':
				$monthLetter='JUN';
			break;
			case '07':
				$monthLetter='JUL';
			break;
			case '08':
				$monthLetter='AUG';
			break;
			case '09':
				$monthLetter='SEP';
			break;
			case '10':
				$monthLetter='OCT';
			break;
			case '11':
				$monthLetter='NOV';
			break;
			case '12':
				$monthLetter='DEC';
			break;
			default:
				$monthLetter='ERR';
			break;
		}
		return $monthLetter;
	}
}
