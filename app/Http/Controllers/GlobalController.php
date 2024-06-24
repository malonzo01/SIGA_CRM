<?php

namespace App\Http\Controllers;
use App\Models\Plates;
use App\Models\IllinoisModel;
use App\Models\MarylandModel;
use App\Models\ColoradoModel;
use App\Models\florida;
use App\Models\texas;
use App\Models\newyork;
use App\Models\newjersey;
use App\Models\geico;
use App\Models\insrnewyork;
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
		if ($insurence == "geico" or $insurence == "new_york_insr") {
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
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));
		$current_time = date('h:i:s a', strtotime($createdDay));

		// DEFINIMOS LA FECHA DE CULMINACION SUMANDO LA FECHA ACTUAL CON LOS DIAS SELECCIONADOS POR EL USUARIO
        $lateDay_MdY = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('d-m-y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDayMe = date('d-M-Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_Me = date('m-d-Y', strtotime($fecha . ' + ' . $days . ' days'));
        $lateDay_Qr_St = date('m/d/y', strtotime($fecha . ' + ' . $days . ' days'));

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

        // GENERAMOS LOS CODIGOS ALEATORIOS.
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
            case 'new_york_insr':
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
		$plate->save();

		//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		$lastId = $plate->id;
		$id=$lastId;
        $state=$insurence;
		$url= "$appurl/consultar/$state/$id";

        //CREACION DE QR PNG & GUARDADO EN LA CARPETA PUBLIC
        $dirImage=QrCode::size(200)->generate($url);
        switch ($state){
            case 'new_york_insr':
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
                $dirImage=QrCode::size(200)->backgroundColor(0,0,0,0)->generate($url);
                //file_put_contents(public_path("/placas/$filename"), base64_decode(DNS1D::getBarcodePNG($url,'QR_ECLEVEL_H')));
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
                    $pdf = Pdf::loadView('pdf.njersey_nuevo_placa', compact('dirImage','request', 'initDay', 'initDaySt', 'lateDay_MdY', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
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
                case 'new_york_insr':
                    // Creamos los PDF y los unimos en uno solo.
                    $m = new Merger();
                    $pdf = Pdf::loadView('pdf.temp_ny_ins', compact('request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename', 'policy'));
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
                    $pdf = Pdf::loadView('pdf.louisiana_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay','lateAnio','lateMonth','monthDateLast','lateDay_Qr', 'lateDaySt','lateDay_Qr_St','lateDayMe', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
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

	// Generar PDF.
	public function pdf_texas(Request $request)
	{
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomStringTagNumber('6'); //code placa
		$str = date('mYd', strtotime($fecha)) . 'JI';
		$chars = str_split($str);

		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.svg";

		//encode data
		$data_encode = $tag_number . '|' . $initDay_Qr . '|' . $str . '|' . $initDay_Qr_time . '|' . $lateDay_Qr . '|' . $request->vin . '|' . $request->year . '|' . $request->make . '|' . $request->body_style . '|' . $request->major_color . '|' . $request->deler_number . '|' . $request->seller . '|' . 'texas';
		$str_encode = base64_encode($data_encode);
		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}
			//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
			$texas= new texas();
			$texas->vin= $request->vin;
			$texas->year=$request->year;
			$texas->make= $request->make;
			$texas->model= $request->model;
			$texas->plate=$tag_number;
			$texas->date_exp= $lateDay_Qr;
			$texas->seller= $request->seller;
			$texas->dealer_number=$request->deler_number;
			$texas->date_issue=$initDay_Qr;
			$texas->body_style=$request->body_style;
			$texas->major_color=$request->major_color;
			$texas->minor_color=$request->minor_color;
			$texas->name1= $request->name1;
			$texas->name2= $request->name2;
			$texas->address= $request->address;
			$texas->city= $request->city;
			$texas->state= $request->state;
			$texas->zip= $request->zip;
			$texas->email= $request->email;
			$texas->phone= $request->phone;
			$texas->iduser= $id;
			$texas->save();

			//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
			$lastId = DB::table('texas')
				->latest('idtexas')
				->first()->idtexas;

			$id=$lastId;
			$state='texas';
			$url= "$appurl/consultar/$state/$id";
			//creation qr png & save in public folder
			$dirImage=QrCode::size(200)->generate($url);


		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.texas_nuevo_placa', compact('request','dirImage', 'initDay', 'lateDay', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		unset($pdf);
		$pdf = Pdf::loadView('pdf.texas_nuevo', compact('request', 'dirImage', 'initDay', 'lateDay', 'year', 'vin', 'tag_number', 'chars', 'filename'));
		$m->addRaw($pdf->output());
		$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=tag_tx_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	public function pdf_new_jersey(Request $request)
    {
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDaySt = date('m/d/Y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomStringTagNumber('6'); //code placa
		$str = date('mYd', strtotime($fecha)) . 'JI';
		$chars = str_split($str);

		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		//encode data
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
                       'jersey';
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder
		//QrCode::encoding('UTF-8')->generate(public_path("/data/$str_encode"), public_path("/placas/$filename"));

		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}
			//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
			$newjersey= new newjersey();
			$newjersey->vin= $request->vin;
			$newjersey->year=$request->year;
			$newjersey->make= $request->make;
			$newjersey->model= $request->model;
			$newjersey->plate=$tag_number;
			$newjersey->date_exp= $lateDay_Qr;
			$newjersey->date_issue=$initDay_Qr;
			$newjersey->seller= $request->seller;
			$newjersey->dealer_number=$request->deler_number;
			$newjersey->days=$request->days;
			$newjersey->body_style=$request->body_style;
			$newjersey->major_color=$request->major_color;
			$newjersey->minor_color=$request->minor_color;
			$newjersey->name1= $request->name1;
			$newjersey->name2= $request->name2;
			$newjersey->address= $request->address;
			$newjersey->city= $request->city;
			$newjersey->state= $request->state;
			$newjersey->zip= $request->zip;
			$newjersey->email= $request->email;
			$newjersey->phone= $request->phone;
			$newjersey->iduser= $id;
			$newjersey->save();

			//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
			$lastId = DB::table('newjersey')
				->latest('idnewjersey')
				->first()->idnewjersey;

			$id=$lastId;
			$state='new_jersey';
			$url= "$appurl/consultar/$state/$id";
			//creation qr png & save in public folder
			$dirImage=QrCode::size(200)->generate($url);

		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.njersey_nuevo_placa', compact('dirImage','request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=NJTAG_" . $tag_number . ".pdf");
		echo $finalPDF;
    }

	public function pdf_new_york(Request $request)
	{
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDaySt = date('m/d/Y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomStringTagNumber('6'); //code placa
		$str = date('mYd', strtotime($fecha)) . 'JI';
		$chars = str_split($str);

		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		//encode data
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
        'nyork';
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder
		//QrCode::encoding('UTF-8')->generate(public_path("/data/$str_encode"), public_path("/placas/$filename"));
		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}
			//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
			$newyork= new newyork();
			$newyork->vin= $request->vin;
			$newyork->year=$request->year;
			$newyork->make= $request->make;
			$newyork->model= $request->model;
			$newyork->plate=$tag_number;
			$newyork->date_exp= $lateDay_Qr;
			$newyork->date_issue=$initDay_Qr;
			$newyork->seller= $request->seller;
			$newyork->dealer_number=$request->deler_number;
			$newyork->days=$request->days;
			$newyork->body_style=$request->body_style;
			$newyork->major_color=$request->major_color;
			$newyork->minor_color=$request->minor_color;
			$newyork->name1= $request->name1;
			$newyork->name2= $request->name2;
			$newyork->address= $request->address;
			$newyork->city= $request->city;
			$newyork->state= $request->state;
			$newyork->zip= $request->zip;
			$newyork->email= $request->email;
			$newyork->phone= $request->phone;
			$newyork->iduser= $id;
			$newyork->save();

			//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
			$lastId = DB::table('newyork')
				->latest('idnewyork')
				->first()->idnewyork;

			$id=$lastId;
			$state='new_york';
			$url= "$appurl/consultar/$state/$id";
			//creation qr png & save in public folder
			$dirImage=QrCode::size(200)->generate($url);

		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.nyork_nuevo_placa', compact('request', 'dirImage','initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=TAG_NY_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	public function pdf_new_york_insr(Request $request)
	{
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDaySt = date('m/d/Y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomStringTagNumber('6'); //code placa
		$str = date('mYd', strtotime($fecha)) . 'JI';
		$chars = str_split($str);

		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		$randnum_init = rand(0000000000, 9999999999);
		$randnum_last = rand(0, 9);
		$policy = $randnum_init . '-' . $randnum_last;

		//encode data
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
        'insr_ny';
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder
		//file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG(public_path("/data/$str_encode"), 'PDF417')));
		// barcode( $path.$filen, url('/') . 'public/data/'.$str_encode,'70','horizontal','code128',true,1);
		// QrCode::encoding('UTF-8')->generate(url('/') . 'public/data/'.$str_encode, $path.$filen);
		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}

		//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		$insrny= new insrnewyork();
		$insrny->vin= $request->vin;
		$insrny->year=$request->year;
		$insrny->make= $request->make;
		$insrny->model= $request->model;
		$insrny->plate=$tag_number;
		$insrny->date_exp= $lateDay_Qr;
		$insrny->date_issue=$initDay_Qr;
		$insrny->seller= $request->seller;
		$insrny->dealer_number=$request->deler_number;
		$insrny->days=$request->days;
		$insrny->body_style=$request->body_style;
		$insrny->major_color=$request->major_color;
		$insrny->minor_color=$request->minor_color;
		$insrny->name1= $request->name1;
		$insrny->name2= $request->name2;
		$insrny->address= $request->address;
		$insrny->city= $request->city;
		$insrny->state= $request->state;
		$insrny->zip= $request->zip;
		$insrny->email= $request->email;
		$insrny->phone= $request->phone;
		$insrny->iduser= $id;
		$insrny->save();

		//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		$lastId = DB::table('insrnewyork')
            ->latest('idinsrny')
            ->first()->idinsrny;

		$id=$lastId;
		$state='new_york_insr';
		$url= "$appurl/consultar/$state/$id";
		file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));

		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.temp_ny_ins', compact('request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename', 'policy'));
		$pdf->render();
		$m->addRaw($pdf->output());
		$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=INSR_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	public function pdf_geico(Request $request)
	{
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('M d, Y', strtotime($fecha));
		$initDaySt = date('d-m-y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));
		$current_time = date('h:i:s a', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('M d, Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDaySt = date('d-m-y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomStringTagNumber('6'); //code placa
		$str = date('mYd', strtotime($fecha)) . 'JI';
		$chars = str_split($str);

		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		$randnum_init = rand(0000000000, 9999999999);
		$randnum_last = rand(0, 9);
		$policy = $randnum_init . '-' . $randnum_last;

		//encode data
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
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder.
		//file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG(public_path("/data/$str_encode"), 'PDF417')));
		// barcode( $path.$filen, url('/') . 'public/data/'.$str_encode,'70','horizontal','code128',true,1);
		// QrCode::encoding('UTF-8')->generate(url('/') . 'public/data/'.$str_encode, $path.$filen);

				//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
			->select('id')
			->where('username', '=', $request->iduser)
			->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}

		   //SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		   $geico= new geico();
		   $geico->vin= $request->vin;
		   $geico->year=$request->year;
		   $geico->make= $request->make;
		   $geico->model= $request->model;
		   $geico->plate=$tag_number;
		   $geico->date_exp= $lateDay_Qr;
		   $geico->date_issue=$initDay_Qr;
		   $geico->seller= $request->seller;
		   $geico->dealer_number=$request->deler_number;
		   $geico->days=$request->days;
		   $geico->body_style=$request->body_style;
		   $geico->major_color=$request->major_color;
		   $geico->minor_color=$request->minor_color;
		   $geico->name1= $request->name1;
		   $geico->name2= $request->name2;
		   $geico->address= $request->address;
		   $geico->city= $request->city;
		   $geico->state= $request->state;
		   $geico->zip= $request->zip;
		   $geico->email= $request->email;
		   $geico->phone= $request->phone;
		   $geico->iduser= $id;
		   $geico->save();

		   //SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		   $lastId = DB::table('geico')
			   ->latest('idgeico')
			   ->first()->idgeico;

		   $id=$lastId;
		   $state='geico';
		   $url= "$appurl/consultar/$state/$id";
		   file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));

		// Creamos los PDF y los unimos en uno solo.
		$m		= new Merger();
		$pdf	= Pdf::loadView('pdf.colorado', compact('request', 'initDay', 'initDaySt', 'lateDay', 'lateDaySt', 'year', 'vin', 'tag_number', 'chars', 'filename', 'policy', 'current_time'));
		$pdf->render();
		$m->addRaw($pdf->output());
		$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=INSR_GEICO_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	public function pdf_florida(Request $request)
	{
        $appurl=env('APP_URL');
		// Obtenemos las fechas de creación y el tiempo de duración.
		$fecha = $request->sale_date;
		$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('m/d/Y', strtotime($fecha));
		$initDay_Qr = date('m/d/Y', strtotime($fecha));
		$initDay_Qr_time = date('m/d/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('m/d/Y', strtotime($fecha . ' + ' . $days . ' days'));

		// Generamos los códigos aleatoreamente.
		$vin = $this->generateRandomString('17'); //code vin
		$tag_number = $this->generateRandomLetters('3') . $this->generateRandomNumbers('4'); //code placa
		$str = 'EXPIRES';
        $date_header = str_split(date('mdy', strtotime($fecha . ' + ' . $days . ' days')));

        $chars = str_split($str);


		// Creamos una carpeta nueva.
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}

		//generate unique name file
		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";

		//encode data
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
                       'florida';
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder
		//QrCode::encoding('UTF-8')->generate(public_path("/data/$str_encode"), public_path("/placas/$filename"));
		//$codQr=QrCode::size(200)->generate('http://www.simplesoftware.io');

				//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
				$usuario = DB::table('users')
				->select('id')
				->where('username', '=', $request->iduser)
				->get();
		   foreach($usuario as $us)
		   {
			   $id=$us->id;
		   }
			   //SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
			   $florida= new florida();
			   $florida->vin= $request->vin;
			   $florida->year=$request->year;
			   $florida->make= $request->make;
			   $florida->model= $request->model;
			   $florida->plate=$tag_number;
			   $florida->date_exp= $lateDay_Qr;
			   $florida->date_issue=$initDay_Qr;
			   $florida->seller= $request->seller;
			   $florida->dealer_number=$request->deler_number;
			   $florida->days=$request->days;
			   $florida->body_style=$request->body_style;
			   $florida->major_color=$request->major_color;
			   $florida->minor_color=$request->minor_color;
			   $florida->name1= $request->name1;
			   $florida->name2= $request->name2;
			   $florida->address= $request->address;
			   $florida->city= $request->city;
			   $florida->state= $request->state;
			   $florida->zip= $request->zip;
			   $florida->email= $request->email;
			   $florida->phone= $request->phone;
			   $florida->iduser= $id;
			   $florida->save();

			   //SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
			   $lastId = DB::table('florida')
				   ->latest('idflorida')
				   ->first()->idflorida;

			   $id=$lastId;
			   $state='florida';
			   $url= "$appurl/consultar/$state/$id";
			   //creation qr png & save in public folder
			   $dirImage=QrCode::size(200)->generate($url);

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

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=TAG_FL_" . $tag_number . ".pdf");
		echo $finalPDF;
	}

	public function pdf_illinois(Request $request)
	{
        $appurl=env('APP_URL');
		$fecha = $request->sale_date;
		//$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('d/m/Y', strtotime($fecha));
		$initDay_Qr = date('d/m/Y', strtotime($fecha));
		$initDay_Qr_time = date('d/m/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));
		//CODIGO QUE PERMITE GENERAR PLACA
		$tag_number =$this->generateRandomNumbers('3')."-". $this->generateRandomLetters('2') ."-" .$this->generateRandomNumbers('4'); //code placa

		//PERMITE GUARDAR LA PLACA EN DIRECCION LOCAL
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}
		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}

		//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		$illinois= new IllinoisModel();
		$illinois->vin= $request->vin;
		$illinois->year=$request->year;
		$illinois->make= $request->make;
		$illinois->model= $request->model;
		$illinois->plate=$tag_number;
		$illinois->date_exp= $lateDay_Qr;
		$illinois->dealer= $request->seller;
		$illinois->num_dlr=$request->deler_number;
		$illinois->date_issue=$initDay_Qr;
		$illinois->body_style=$request->body_style;
		$illinois->major_color=$request->major_color;
		$illinois->minor_color=$request->minor_color;
		$illinois->name1= $request->name1;
		$illinois->name2= $request->name2;
		$illinois->address= $request->address;
		$illinois->city= $request->city;
		$illinois->state= $request->state;
		$illinois->zip= $request->zip;
		$illinois->email= $request->email;
		$illinois->phone= $request->phone;
		$illinois->id_user= $id;
		$illinois->save();


		//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		$lastId = DB::table('illinois')
            ->latest('id_illinois')
            ->first()->id_illinois;

	    $id=$lastId;
		$state='Illinois';
        $url= "$appurl/consultar/$state/$id";
		$dirImage=QrCode::size(200)->backgroundColor(0,0,0,0)->generate("$url");

		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.illinois_placa',compact('request','initDay_Qr','lateDay_Qr','tag_number','dirImage'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		unset($pdf);
		//$pdf = Pdf::loadView('pdf.illinois', compact('request', 'tag_number'));
		//$m->addRaw($pdf->output());
		//$pdf->render();
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=TAG_FL_" . $tag_number . ".pdf");
		echo $finalPDF;

	}

	public function pdf_maryland(Request $request)
	{
        $appurl=env('APP_URL');
		$fecha = $request->sale_date;
		//$year = date('Y', strtotime($fecha));
		$days = $request->days;

		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('d/m/Y', strtotime($fecha));
		$initDay_Qr = date('d/m/Y', strtotime($fecha));
		$initDay_Qr_time = date('d/m/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));
		//CODIGO QUE PERMITE GENERAR PLACA
		$tag_number =$this->generateRandomLetters('1').$this->generateRandomNumbers('5').$this->generateRandomLetters('1').$this->generateRandomNumbers('1'); //code placa

		//PERMITE GUARDAR LA PLACA EN DIRECCION LOCAL
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}
		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}

		//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		$maryland= new MarylandModel();
		$maryland->vin= $request->vin;
		$maryland->year=$request->year;
		$maryland->make= $request->make;
		$maryland->model= $request->model;
		$maryland->plate=$tag_number;
		$maryland->date_exp= $lateDay_Qr;
		$maryland->date_issue=$initDay_Qr;
		$maryland->seller= $request->seller;
		$maryland->dealer_number=$request->deler_number;
		$maryland->days=$request->days;
		$maryland->body_style=$request->body_style;
		$maryland->major_color=$request->major_color;
		$maryland->minor_color=$request->minor_color;
		$maryland->name1= $request->name1;
		$maryland->name2= $request->name2;
		$maryland->address= $request->address;
		$maryland->city= $request->city;
		$maryland->state= $request->state;
		$maryland->zip= $request->zip;
		$maryland->email= $request->email;
		$maryland->phone= $request->phone;
		$maryland->iduser= $id;
		$maryland->save();

		// Creamos los PDF y los unimos en uno solo.
		$m = new Merger();
		$pdf = Pdf::loadView('pdf.maryland_placa',compact('request','initDay_Qr','lateDay_Qr','tag_number'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		unset($pdf);
		$finalPDF = $m->merge();

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=TAG_FL_" . $tag_number . ".pdf");
		echo $finalPDF;
		return $request;
	}

	public function pdf_colorado(Request $request)
	{
        $appurl=env('APP_URL');
		$fecha = $request->sale_date;
		//GENERAR LA FECHA POR SEPARADO
		$anio = date('Y', strtotime($fecha));
		$dia = date('d', strtotime($fecha));
		$mes = date('m', strtotime($fecha));
		$monthLetter= $this->montDate($mes);

		$days = $request->days;
		$str = 'EXPIRES';
		$chars = str_split($str);
		// Cambiamos el formato de la fecha.
		$createdDay = Carbon::now();
		$initDay = date('d/m/Y', strtotime($fecha));
		$initDay_Qr = date('d/m/Y', strtotime($fecha));
		$initDay_Qr_time = date('d/m/Y H:i:s', strtotime($createdDay));

		// Definimos la fecha de culminación sumando la fecha actual con los días seleccionado por el usuario de válidez.
		$lateDay = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay_Qr = date('d/m/Y', strtotime($fecha . ' + ' . $days . ' days'));

		//GENERAR LA FECHA POR SEPARADO
		$initAnio = date('Y', strtotime($fecha));
		$initDay = date('d', strtotime($fecha));
		$initMonth = date('m', strtotime($fecha));
		$initDate= $this->montDate($initMonth).' '.$initDay.','.$initAnio;

		//GENERAR LA FECHA POR SEPARADO
		$lateAnio = date('Y', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDay = date('d', strtotime($fecha . ' + ' . $days . ' days'));
		$lateMonth= date('m', strtotime($fecha . ' + ' . $days . ' days'));
		$lateDate= $this->montDate($lateMonth).' '.$lateDay.','.$lateAnio;
		$monthDateLast=$this->montDate($lateMonth);
		//CODIGO QUE PERMITE GENERAR PLACA
		$tag_number =$this->generateRandomNumbers('7'); //code placa

		//PERMITE GUARDAR LA PLACA EN DIRECCION LOCAL
		$path			= public_path("/placas/$tag_number/");
		$path_web	= $tag_number . '/';
		if (!file_exists($path)) {
			File::makeDirectory($path, $mode = 0777, true, true);
		}


		$dat_name = md5(date('Y-m-d H:i:s:u'));
		$filename = "$tag_number/$dat_name.png";
		$randnum_init = rand(0000000000, 9999999999);
		$randnum_last = rand(0, 9);
		$policy = $randnum_init . '-' . $randnum_last;
		//encode data
		$data_encode = $policy . '|' .
                       $initDay_Qr . '|' .
                       $str . '|' .
                       $initDay_Qr. '|' .
                       $lateDay_Qr . '|' .
                       $request->vin . '|' .
                       $request->year . '|' .
                       $request->make . '|' .
                       $request->body_style . '|' .
                       $request->major_color . '|' .
                       $request->deler_number . '|' .
                       $request->seller . '|' .
                       'insr_geico';
		$str_encode = base64_encode($data_encode);

		//creation qr png & save in public folder.

		// barcode( $path.$filen, url('/') . 'public/data/'.$str_encode,'70','horizontal','code128',true,1);
		// QrCode::encoding('UTF-8')->generate(url('/') . 'public/data/'.$str_encode, $path.$filen);

		//BUSCA EL ID DEL USUARIO QUE REALIZA EL REGISTRO DE LA PLACA
		$usuario = DB::table('users')
             ->select('id')
             ->where('username', '=', $request->iduser)
             ->get();
		foreach($usuario as $us)
		{
			$id=$us->id;
		}

		//SE PREPARAN LOS DATOS PARA INSERTAR A LA BASE DE DATOS
		$colorado= new ColoradoModel();
		$colorado->vin= $request->vin;
		$colorado->year=$request->year;
		$colorado->make= $request->make;
		$colorado->model= $request->model;
		$colorado->plate=$tag_number;
		$colorado->date_exp= $lateDay_Qr;
		$colorado->date_issue=$initDay_Qr;
		$colorado->seller= $request->seller;
		$colorado->dealer_number=$request->deler_number;
		$colorado->days=$request->days;
		$colorado->body_style=$request->body_style;
		$colorado->major_color=$request->major_color;
		$colorado->minor_color=$request->minor_color;
		$colorado->name1= $request->name1;
		$colorado->name2= $request->name2;
		$colorado->address= $request->address;
		$colorado->city= $request->city;
		$colorado->state= $request->state;
		$colorado->zip= $request->zip;
		$colorado->email= $request->email;
		$colorado->phone= $request->phone;
		$colorado->iduser= $id;
		$colorado->save();

		//SE CREA LA URL Y QR DE LA PLACA, SE BUSCA EL ULTIMO ID_ILINOIS  DE LA BD
		$lastId = DB::table('colorado')
            ->latest('idcolorado')
            ->first()->idcolorado;

		$id=$lastId;
		$state='colorado';
        $url= "$appurl/consultar/$state/$id";
		file_put_contents(public_path("/placas/$filename"), base64_decode(DNS2D::getBarcodePNG($url, 'PDF417')));
		//$dirImage=QrCode::size(200)->generate("http://devs.c1.is/CRM/public/consultar/$state/$id_illinois");


		// Creamos los PDF y los unimos en uno solo.
		/*$m = new Merger();
		$pdf = Pdf::loadView('pdf.coloradoverdad',compact('chars'))->setPaper('a4', 'landscape');
		$pdf->render();
		$m->addRaw($pdf->output());
		unset($pdf);
		$finalPDF = $m->merge();*/
		// Creamos los PDF y los unimos en uno solo.
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

		// Cargamos toda la aplicación.
		header("Content-Type: application/pdf");
		header("Content-Disposition: inline;filename=TAG_FL_" . $tag_number . ".pdf");
		echo $finalPDF;
		return $request;
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
