<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VignetteController extends Controller
{
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
        return view('welcome_testa', ['listLogo' => $this->listLogo]);
    }
}
