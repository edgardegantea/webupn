<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class OfertaEducativaController extends BaseController
{
    public function index()
    {
        return view('frontend/ofertaeducativa/inicio');
    }



    // Función para oferta educativa de LIC. ADMINISTRACION EDUCATIVA
    public function oe_lae()
    {
        return view('frontend/ofertaeducativa/oe_lae');
    }



    // Función para oferta educativa de LIC. INTERVENCIÓN EDUCATIVA
    public function oe_lie()
    {
        return view('frontend/ofertaeducativa/oe_lie');
    }



    // Función para oferta educativa de LIC. PEDAGOGÍA
    public function oe_lp()
    {
        return view('frontend/ofertaeducativa/oe_lp');

    }



    // Función para oferta educativa de LIC. PSICOLOGÍA EDUCATIVA
    public function oe_lpe()
    {
        return view('frontend/ofertaeducativa/oe_lpe');

    }



    // Función para oferta educativa de MAESTRÍA MEMS
    public function oe_mems()
    {
        return view('frontend/ofertaeducativa/oe_mems');

    }

}
