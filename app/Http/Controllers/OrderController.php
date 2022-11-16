<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return response()->json(Order::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_order=Order::find($id);
        if(is_null($the_order)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_order::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request){
        $the_order=Order::create($request->all());
        return response($the_order,201);
    }
    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_order=Order::find($id);
        if(is_null($the_order)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_order->update($request->all());
            return response()->json($the_order::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_order=Order::find($id);
        if(is_null($the_order)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_order->delete();
            return response()->json(null,204);
        }
    }
}
