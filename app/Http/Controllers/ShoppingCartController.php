<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(){
        return response()->json(ShoppingCart::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_shoppingCart=ShoppingCart::find($id);
        if(is_null($the_shoppingCart)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_shoppingCart::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request){
        $the_shoppingCart=ShoppingCart::create($request->all());
        return response($the_shoppingCart,201);
    }
    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_shoppingCart=ShoppingCart::find($id);
        if(is_null($the_shoppingCart)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_shoppingCart->update($request->all());
            return response()->json($the_shoppingCart::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_shoppingCart=ShoppingCart::find($id);
        if(is_null($the_shoppingCart)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_shoppingCart->delete();
            return response()->json(null,204);
        }
    }
}
