<?php

namespace Database\Seeders;

use App\Models\Boleta;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Erick',
            'apellidopaterno' => 'Ergueta',
            'apellidomaterno' => 'Paravicino',
            'direccion' => 'Av. panamericana 150',
            'dni' => '41499925',
            'email' => 'eround@hotmail.com',
            'password' => Hash::make('12345678'), 
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Juan',
            'apellidopaterno' => 'Perez',
            'apellidomaterno' => 'Perez',
            'direccion' => 'Av. argentina n 200',
            'dni' => '23232323',
            'email' => 'loki@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Pepito',
            'apellidopaterno' => 'Pepilon',
            'apellidomaterno' => 'Caceres',
            'direccion' => 'Av. chile n 300',
            'dni' => '24242424',
            'email' => 'pepito@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'user',
        ]);

        Boleta::create([
            'user_id' => '1',
            'description' => 'enseñanza básica',
            'mes' => 'enero',
            'año' => '2024',
            'descuentos' => '10.00',
            'subtotal' => '870.00',
            'total' => '860.00',
        ]);

        Boleta::create([
            'user_id' => '2',
            'description' => 'enseñanza superior',
            'mes' => 'febrero',
            'año' => '2023',
            'descuentos' => '0.00',
            'subtotal' => '1000.00',
            'total' => '1000.00',
        ]);
    }
}
