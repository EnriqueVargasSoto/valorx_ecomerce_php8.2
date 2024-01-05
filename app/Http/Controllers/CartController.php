<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function add(Request $request){

        // Obtener el usuario de la sesión
        $usuario = session('usuario');

        // Verificar si el usuario está autenticado
        if ($usuario) {
            // El usuario está autenticado, realizar acciones según sea necesario
            //$producto = Producto::find($request->producto_id);

            Cart::add(
                /*$request->item_cod,
                $request->item_dsc,
                $request->marca_cod,
                $request->marca_dsc,
                $request->categoria_cod,
                $request->categoria_dsc,
                $request->unidad_man,
                $request->item_status,
                $request->item_url,
                $request->subcategoria_cod,
                $request->subcategoria_dsc,*/
                $request->item_cod,
                $request->item_dsc,
                $request->precio,
                $request->cantidad,
                array("urlfoto"=>$request->item_url, "unidad" => $request->unidad_man,)

            );
            return back()->with('success',"$request->item_dsc ¡se ha agregado con éxito al carrito!");
        } else {
            // El usuario no está autenticado, redirigir a la página de inicio de sesión

            return redirect()->route('login');
        }



    }

    public function remove($id){

        Cart::remove($id);
        return back()->with('success',"$id ¡se ha eliminado con éxito al carrito!");

    }

    public function addUnit(Request $request){
        //dd($request->id);
        $item = Cart::get($request->id);

        if ($item) {
            $cantidadActual = $item->quantity;

            $cantidadActual = $cantidadActual + 1;
            //dd($cantidadActual);
            //return "La cantidad actual del ítem $itemId es: $cantidadActual";

            Cart::update($item->id, [
                'quantity' => 1,//$cantidadActual,
            ]);


        }

        return back()->with('success',"$item ¡se ha agregado con éxito al carrito!");

    }

    public function subtractUnit(Request $request){
        $item = Cart::get($request->id);

        if ($item) {
            $cantidadActual = $item->quantity;

            //return "La cantidad actual del ítem $itemId es: $cantidadActual";

            if ($cantidadActual > 1 ) {
                # code...
                //$cantidadActual++;
                Cart::update($item->id, [
                    'quantity' => -1,//$cantidadActual,
                ]);
                return back()->with('success',"$item ¡se ha eliminado con éxito al carrito!");
            } else {
                # code...
                $this->remove($item->id);
                return back()->with('success',"$item ¡se ha eliminado con éxito al carrito!");
            }




        }

    }
}
