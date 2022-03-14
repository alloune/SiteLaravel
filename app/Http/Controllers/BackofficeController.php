<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{

    public function displayBakcOffice(): Factory|View|Application
    {


        return view('backoffice');
    }
}
