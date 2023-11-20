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
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0054&Sucursal=02';

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => 0,
            "filtroxnombre" => ""
        ]);
        //$response = str_replace('b"""', "", $response);
        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);
        //$response = str_replace(",,", ",", $response);
        //if ($response->successful()) {
            //$body = $response->body();
            $data = iconv('ISO-8859-1', 'UTF-8', $response);//utf8_decode($response);
            $products = json_decode($data, true);
            //dd($products);
            $products = $products['items'];
            foreach ($products as $key => $product) {
                //dd($product);
            }
            //dd($products);
            //dd(json_decode($data));
            // $body ahora contendrá el contenido de la respuesta como una cadena de texto
            //echo $body;
        //} else {
            // Manejar la respuesta de error
            //echo "La solicitud no fue exitosa.";
        //}

        return view('web.pages.home', compact('products'));

    }

    public function productos() {
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0054&Sucursal=02';

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => 0,
            "filtroxnombre" => ""
        ]);
        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);//utf8_decode($response);
        $products = json_decode($data, true);
        //dd($products);
        $products = $products['items'];

        return view('web.pages.productos', compact('products'));
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

    public function cart(){
        return view('web.pages.cart');
    }

}
