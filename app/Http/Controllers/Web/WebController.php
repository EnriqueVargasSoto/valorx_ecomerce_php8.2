<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Cart;
use Darryldecode\Cart\Cart as CartCart;

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
       // dd($categorias);

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            "pagina" => 0,
            "filtroxnombre" => "",
            "filtroxcategoria" => ""
        ]);

        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $products = json_decode($data, true);
        //$products['items']
        $products = $products['items'];


        return view('web.pages.home', compact('categorias','products'));

    }

    public function productosCategoria($id, $paginaActual){
        //Urls
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $urlValorx = 'http://valorx.net/Magicxpi4.12/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListItems&Compania=0004&Sucursal=01';

        $listaPRecio = 1;

        $usuario = session('usuario');
        //dd($usuario['listprecio']);
        if ($usuario) {
            $listaPRecio = $usuario['listprecio'];
        }
        //llamada a las apis
        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];
        //dd($categorias);

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => $listaPRecio ,//"1",
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

        $usuario = session('usuario');

        return view('web.pages.productos', compact('id', 'categorias','products', 'paginaActual', 'paginasTotal', 'usuario'));
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

    public function producto($id){
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $urlValorx = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23StockItem&Compania=0004&Sucursal=01';

        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];

        $response = Http::post($urlValorx, $data = [
            "lista_precio" => "1",
            //"pagina" => 0,
            "item_cod" => $id
        ]);
       //dd($response->body());
        $response = str_replace("\u{FEFF}", "", $response);
        $response = str_replace("\r", "", $response);

        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $product = json_decode($data, true);
        //dd($product);
        //$products = $products['items'];

        return view('web.pages.producto', compact('categorias', 'product'));
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
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';
        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];

        return view('web.pages.cart', compact('categorias'));
    }

    public function login(){
        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';

        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];

        return view('web.pages.login', compact('categorias'));
    }

    public function auth(Request $request){
        $urlLogin = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23XMapLogin&Compania=0004&Sucursal=01';

        $response = Http::post($urlLogin, $data = [
            "tipologueo" => "2",
            "usuario" => $request->usuario,
            "password" => $request->password
        ]);
        $response = str_replace("\n", "", $response);
        $response = str_replace("\r", "", $response);
        $data = iconv('ISO-8859-1', 'UTF-8', $response);
        $usuario = json_decode($data, true);

        // Guardar el usuario en la sesión
        session(['usuario' => $usuario]);

        //dd($usuario);
        return redirect()->route('/');
    }

    public function logout(){
        Session::forget('usuario');
        return redirect()->route('/');
    }

    public function checkout(){

        $urlCategorias = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23ListCateg&Compania=0004&Sucursal=01';

        $responseCategoria = Http::post($urlCategorias);
        $responseCategoria = str_replace("\n", "", $responseCategoria);
        $responseCategoria = str_replace("\r", "", $responseCategoria);
        $data = iconv('ISO-8859-1', 'UTF-8', $responseCategoria);
        $categorias = json_decode($data, true);
        $categorias = $categorias['categoria'];

        return view('web.pages.checkout', compact('categorias'));
    }

    public function saveOrder(){
        $urlSaveOrder = 'http://www.valorx.net/XMap.Services/MgWebRequester.dll?appname=IFSValorX&prgname=HTTP&arguments=-AHTTPVLXRest%23Orders&Compania=0004&Sucursal=01';

        // Obtener la fecha actual
        $fechaActual = Carbon::now();

        // Formatear la fecha en el formato AAAA-mm-dd
        $fechaFormateada = $fechaActual->format('Y-m-d');

        $usuario = session('usuario');

        //$items = Cart::content();

        $newItems = [];

        foreach (Cart::getContent() as $key => $item) {
            //dd($item);
            $producto = [
                "sku" => $item->id,
                "procedimiento" => "003",
                "unidad_medida" => $item->attributes->unidad,
                "cantidad_pedida" => $item->quantity,
                "lista_precio" => $usuario['listprecio']
            ];

            array_push($newItems, $producto);
        }

        $data = [
            "nro_pedido_origen" => "",
            "fecha_pedido" => $fechaFormateada,
            "vendedor" => "20202020",
            "centro_distribucion" => "1",
            "zona" => "10000",
            "ruta" => "10001",
            "forma_pago" => "001",
            "moneda" => "PEN",
            "fecha_entrega" => null,
            "hora_entrega" => null,
            "detalle_pedido" => [
                [
                    "cliente" => [
                        [
                            "nro_documento_ide" => $usuario['user_ndocid'],
                            "tipo_documento_ide" => $usuario['user_tdocid'],
                            "nombre_completo" => $usuario['user_name'],
                            "direccion_fiscal" => "",
                            "ubigeo_dirfiscal" => "100101",
                            "direccion_despacho" => "",
                            "ubigeo_dirdespacho" => "100101",
                            "telefono" => $usuario['user_phone'],
                            "modulo" => "10001",
                            "latitud" => "",
                            "longitud" => "",
                            "items" => $newItems
                        ]
                    ]
                ]
            ]
        ];

        $response = Http::post($urlSaveOrder, $data);
        Cart::clear();
        return redirect()->route('/');
        //dd($response->body());
    }
}
