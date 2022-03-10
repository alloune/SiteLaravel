<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VignetteController extends Controller
{
    public $listCertif = array(
    "sorbonne" => array(
            "name" => "logoSorbonne.png",
            "description" => "Résolution de problèmes par méthodes computationnelles",
            "backgroundImg" => "sorbBGImg"),
    "milano" => array(
            "name" => "logoMilan.png",
            "description" => "DNA Decodificato",
            "backgroundImg" => "milanoBGImg"),
    "bordeaux" => array(
            "name" => "logoBordeaux.png",
            "description" => "MLOps,(Machine Learning Operations) Fundamentals",
            "backgroundImg" => "bordeauxBGImg"),
    "stanford" => array(
            "name" => "logoStan.png",
            "description" => "Applied data science with Python",
            "backgroundImg" => "stanfordBGImg"),

);


}
