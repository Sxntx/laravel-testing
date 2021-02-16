<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeederController extends Controller
{
    //
    function __invoke(){
       return view('seeders');
    }
}
