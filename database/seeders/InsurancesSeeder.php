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
            'address'=>'2741 N Orange Blossom Trail, Kissimmee,',
            'zip'=>'34744',
        ]);
        Insurance::create([
            'name' => 'new_jersey',
            'states_ab' => 'NJ',
            'logo_consulta_path' => 'img/placas/newjerseyConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'new_york',
            'states_ab' => 'NY',
            'logo_consulta_path' => 'img/placas/newyorkConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'new_york_insr',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'texas',
            'states_ab' => 'TX',
            'logo_consulta_path' => 'img/placas/texasConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'colorado',
            'states_ab' => 'CO',
            'logo_consulta_path' => 'img/placas/coloradoConsulta.jpg',
            'address'=>'4800 Ward Rd, Wheat Ridge,',
            'zip'=>'80033',
        ]);
        Insurance::create([
            'name' => 'illinois',
            'states_ab' => 'IL',
            'logo_consulta_path' => 'img/placas/illinoisConsulta.jpg',
            'address'=>'11 W US Hwy 6, Peru,',
            'zip'=>'61354',
        ]);
        Insurance::create([
            'name' => 'maryland',
            'states_ab' => 'MD',
            'logo_consulta_path' => 'img/placas/marylandConsulta.jpg',
            'address'=>'2000 West St, Annapolis,',
            'zip'=>'21401',
        ]);
        Insurance::create([
            'name' => 'indiana',
            'states_ab' => 'IN',
            'logo_consulta_path' => 'img/placas/indianaConsulta.jpg',
            'address'=>'4031 S East St, Indianapolis,',
            'zip'=>'46227',
        ]);
        Insurance::create([
            'name' => 'missouri',
            'states_ab' => 'MO',
            'logo_consulta_path' => 'img/placas/missouriConsulta.jpg',
            'address'=>'4798 N Service Rd, St Peters,',
            'zip'=>'63376',
        ]);
        Insurance::create([
            'name' => 'tennessee',
            'states_ab' => 'TN',
            'logo_consulta_path' => 'img/placas/tennesseeConsulta.jpg',
            'address'=>'5223 NW Broad St, Murfreesboro,',
            'zip'=>'37129',
        ]);
        Insurance::create([
            'name' => 'georgia',
            'states_ab' => 'GA',
            'logo_consulta_path' => 'img/placas/georgiaConsulta.jpg',
            'address'=>'4228 Buford Dr, Buford,',
            'zip'=>'30518',
        ]);
        Insurance::create([
            'name' => 'north_carolina',
            'states_ab' => 'NC',
            'logo_consulta_path' => 'img/placas/northcarolinaConsulta.jpg',
            'address'=>'950 NC-66, Kernersville',
            'zip'=>'27284',
        ]);
        Insurance::create([
            'name' => 'ohio',
            'states_ab' => 'OH',
            'logo_consulta_path' => 'img/placas/ohioConsulta.jpg',
            'address'=>'4886 OH-59, Ravenna,',
            'zip'=>'44266',
        ]);
        Insurance::create([
            'name' => 'virginia',
            'states_ab' => 'VA',
            'logo_consulta_path' => 'img/placas/virginiaConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'louisiana',
            'states_ab' => 'LA',
            'logo_consulta_path' => 'img/placas/louisianaConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        Insurance::create([
            'name' => 'pennsylvania',
            'states_ab' => 'PA',
            'logo_consulta_path' => 'img/placas/pennsylvaniaConsulta.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        /*
        Insurance::create([
            'name' => '',
            'states_ab' => '',
            'logo_consulta_path' => 'img/placas/.jpg',
            'address'=>'',
            'zip'=>'',
        ]);
        */
    }
}
