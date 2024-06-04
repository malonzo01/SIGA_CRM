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
            'name' => 'New Jersey',
            'states_ab' => 'NJ',
            'logo_consulta_path' => 'img/placas/newjerseyConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'New York',
            'states_ab' => 'NY',
            'logo_consulta_path' => 'img/placas/newyorkConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'New York Insr',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Texas',
            'states_ab' => 'TX',
            'logo_consulta_path' => 'img/placas/texasConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Colorado',
            'states_ab' => 'CO',
            'logo_consulta_path' => 'img/placas/coloradoConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Illinois',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Maryland',
            'states_ab' => 'MD',
            'logo_consulta_path' => 'img/placas/marylandConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Indiana',
            'states_ab' => 'IN',
            'logo_consulta_path' => 'img/placas/indianaConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Misuri',
            'states_ab' => 'MO',
            'logo_consulta_path' => 'img/placas/misuriConsulta.jpg',
        ]);
        Insurance::create([
            'name' => 'Tennessee',
            'states_ab' => 'TN',
            'logo_consulta_path' => 'img/placas/tennesseeConsulta.jpg',
        ]);
    }
}
