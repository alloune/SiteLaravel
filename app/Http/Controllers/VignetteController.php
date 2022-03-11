<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VignetteController extends Controller
{
    private $listCertif = [
        "sorbonne" => [
            "name" => "logoSorbonne.png",
            "description" => "Résolution de problèmes par méthodes computationnelles",
            "backgroundImg" => "sorbBGImg"],
        "milano" => [
            "name" => "logoMilan.png",
            "description" => "DNA Decodificato",
            "backgroundImg" => "milanoBGImg"],
        "bordeaux" => [
            "name" => "logoBordeaux.png",
            "description" => "MLOps,(Machine Learning Operations) Fundamentals",
            "backgroundImg" => "bordeauxBGImg"],
        "stanford" => [
            "name" => "logoStan.png",
            "description" => "Applied data science with Python",
            "backgroundImg" => "stanfordBGImg"],
    ];

    private $listLogo = [
        "harvard" => [
            "logo" => "harvard_logo.jpg"],
        "mit" => [
            "logo" => "mit_logo.jpg"],
        "sorbonne" => [
            "logo" => "sorbonne_logo.jpg"],
        "ecole polytechnique lausanne" => [
            "logo" => "polytechnique_logo.jpg"],
        "oxford" => [
            "logo" => "oxford_logo.jpg"],
    ];


    public function displayCertif()
    {
        return view('welcome_testa', ['listCertif' => $this->listCertif], ['listLogo' => $this->listLogo]);
    }
}
