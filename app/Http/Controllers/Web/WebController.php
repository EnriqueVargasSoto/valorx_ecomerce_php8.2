<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index() {}

    public function quienesSomo() {
        return view('web.pages.quienes-somos');
    }

    public function preguntasFrecuentes() {
        return view('web.pages.preguntas-frecuentes');
    }

    public function contactanos(){
        return view('web.pages.contactanos');
    }
}
