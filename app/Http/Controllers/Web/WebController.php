<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebController extends Controller
{
    //
    public function index() {
        // Realizar una solicitud GET a la API
        $urlValorx = 'http://www.valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems';

        $response = Http::post($urlValorx);
        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);
        $response = str_replace(",,", ",", $response);
        //dd($response);
        $data = json_decode($response);
        dd($data);
        foreach ($data['items'] as $key => $value) {
            dd($value);
        }
        return view('web.pages.home')->with(compact('data'));

    }



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
