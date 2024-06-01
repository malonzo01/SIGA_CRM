<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
             'name' => 'Webmaster',
             'username' => 'webmaster',
             'email' => 'webmaster@crm.com',
             'password'=> bcrypt('password'),
        ])->assignRole('Webmaster');

        User::create([
          'name' => 'Administrador',
          'username' => 'administrador',
          'email' => 'administrador@crm.com',
          'password'=> bcrypt('123456'),
        ])->assignRole('Administrador');

        User::create([
          'name' => 'Vendedor',
          'username' => 'vendedor',
          'email' => 'vendedor@crm.com',
          'password'=> bcrypt('password'),
        ])->assignRole('Vendedor');

        //User::factory(7)->create();
    }
}
