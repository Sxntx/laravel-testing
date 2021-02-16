<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
este fichero se hizo para hacer la migracion cuando pulses el boton Migracion
pero al final no se usará
*/

class MigrationController extends Controller
{
    //

    function __invoke(){
       //Artisan::class('migrate'); Este comando es el que te ccrea la migracion cuando pulsas el btn
       return view('exito');//solo se pedia esto
    }
}
