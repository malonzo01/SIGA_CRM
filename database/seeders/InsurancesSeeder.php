<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsurancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Insurance::create([
            'name' => 'geico',
            'states_ab' => 'GEICO',
            'logo_consulta_path' => 'img/placas/geico.png',
        ]);
        Insurance::create([
            'name' => 'florida',
            'states_ab' => 'FL',
            'logo_consulta_path' => 'img/placas/floridaConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'new_jersey',
            'states_ab' => 'NJ',
            'logo_consulta_path' => 'img/placas/newjerseyConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'new_york',
            'states_ab' => 'NY',
            'logo_consulta_path' => 'img/placas/newyorkConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'new_york_insr',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'texas',
            'states_ab' => 'TX',
            'logo_consulta_path' => 'img/placas/texasConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'colorado',
            'states_ab' => 'CO',
            'logo_consulta_path' => 'img/placas/coloradoConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'illinois',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'maryland',
            'states_ab' => 'MD',
            'logo_consulta_path' => 'img/placas/marylandConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'indiana',
            'states_ab' => 'IN',
            'logo_consulta_path' => 'img/placas/indianaConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'missouri',
            'states_ab' => 'MO',
            'logo_consulta_path' => 'img/placas/missouriConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'tennessee',
            'states_ab' => 'TN',
            'logo_consulta_path' => 'img/placas/tennesseeConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'georgia',
            'states_ab' => 'GA',
            'logo_consulta_path' => 'img/placas/georgiaConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'north_carolina',
            'states_ab' => 'NC',
            'logo_consulta_path' => 'img/placas/northcarolinaConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'ohio',
            'states_ab' => 'OH',
            'logo_consulta_path' => 'img/placas/ohioConsulta.jpg',
        ]);
    }
}
