<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Command to run this is php artisan db:seed
        DB::table('usuarios')->insert([
          'id' => '1',
          'nombre' => 'Jhon',
          'apellidos' => 'Williams',
          'DNI' => '44556677A'
        ]);
        DB::table('usuarios')->insert([
          'id' => '2',
          'nombre' => 'Laura',
          'apellidos' => 'Zapatero',
          'DNI' => '55669922B'
        ]);
        DB::table('usuarios')->insert([
          'id' => '3',
          'nombre' => 'Jaime',
          'apellidos' => 'Trumop',
          'DNI' => '99887766C'
        ]);
    }
}
