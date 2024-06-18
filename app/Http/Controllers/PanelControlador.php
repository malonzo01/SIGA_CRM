<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelControlador extends Controller
{
	public $insurences = [
		"geico"			=> ["active" => true, "icon" => "icon-geico", "name" => "Insurance Geico"],
		"florida"		=> ["active" => true, "icon" => "icon-florida", "name" => "Florida"],
		"new_jersey"	=> ["active" => true, "icon" => "icon-nj", "name" => "New Jersey"],
		"new_york"		=> ["active" => true, "icon" => "icon-ny", "name" => "New York"],
		"new_york_insr"	=> ["active" => true, "icon" => "icon-state", "name" => "StateFarm"],
		"texas"			=> ["active" => true, "icon" => "icon-texas", "name" => "Texas"],
		"illinois"		=> ["active" => true, "icon" => "icon-illinois", "name" => "Illinois"],
		"colorado"		=> ["active" => true, "icon" => "icon-co", "name" => "Colorado"],
		"maryland"		=> ["active" => true, "icon" => "icon-maryland", "name" => "Maryland"],
		"indiana"		=> ["active" => true, "icon" => "icon-indiana", "name" => "Indiana"],
		"tennessee"		=> ["active" => true, "icon" => "icon-tennessee", "name" => "Tennessee"],
        "missouri"		=> ["active" => true, "icon" => "icon-missouri", "name" => "Missouri"],
        "georgia"		=> ["active" => true, "icon" => "icon-georgia", "name" => "Georgia"],
        "north_carolina"		=> ["active" => true, "icon" => "icon-north_carolina", "name" => "North Carolina"],
        "ohio"		=> ["active" => true, "icon" => "icon-ohio", "name" => "Ohio"],
        "nuevo1"		=> ["active" => true, "icon" => "icon-texas", "name" => "Nuevo1"],
        "nuevo2"		=> ["active" => true, "icon" => "icon-texas", "name" => "Nuevo2"],
        //"placa"		=> ["active" => true, "icon" => "icon-texas", "name" => "Placa"],
	];

	public function index()
	{
		$this->insurences = json_decode(json_encode($this->insurences, JSON_FORCE_OBJECT));
		return view('dashboard', [
			'insurences' => $this->insurences,
		]);
	}

	public function get_insurences()
	{
		$this->insurences = json_decode(json_encode($this->insurences, JSON_FORCE_OBJECT));
		return $this->insurences;
	}
}
