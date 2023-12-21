<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    //
    public function add(Request $request){

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

    }

    public function remove($id){

        Cart::remove($id);
        return back()->with('success',"$id ¡se ha eliminado con éxito al carrito!");

    }
}
