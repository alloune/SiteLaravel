<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function displayBakcOffice(){


        return view('backoffice');
    }
}
