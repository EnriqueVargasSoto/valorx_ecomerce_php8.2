<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebController extends Controller
{

    public function index() {
        //Urls
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0004&Sucursal=01';

        //llamada a las apis
        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];
        //dd($categorias);

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => 0,
            "filtroxnombre" => ""
        ]);

        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $products = json_decode($data, true);

        $products = $products['items'];


        return view('web.pages.home', compact('categorias','products'));

    }

    public function productosCategoria($id, $paginaActual){
        //Urls
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0004&Sucursal=01';

        //llamada a las apis
        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];
        //dd($categorias);

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => $paginaActual,
            "filtroxnombre" => "",
            "filtroxcategoria" => $id
        ]);

        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $products = json_decode($data, true);

        $paginasTotal = $products['total_paginas'];
        //dd($paginasTotal);

        $products = $products['items'];



        return view('web.pages.productos', compact('id', 'categorias','products', 'paginaActual', 'paginasTotal'));
    }

    public function productos($paginaActual) {
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0004&Sucursal=01';

        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => 0,
            "filtroxnombre" => ""
        ]);
        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $products = json_decode($data, true);
        $paginasTotal = $products['total_paginas'];
        $products = $products['items'];
        $id = "";

        dd($paginasTotal);


        return view('web.pages.productos', compact('id', 'categorias','products', 'paginaActual', 'paginasTotal'));
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
