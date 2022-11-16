<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){
        return response()->json(Medicine::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_medicine=Medicine::find($id);
        if(is_null($the_medicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_medicine::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request){
        $the_medicine=Medicine::create($request->all());
        return response($the_medicine,201);
    }
    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_medicine=Medicine::find($id);
        if(is_null($the_medicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_medicine->update($request->all());
            return response()->json($the_medicine::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_medicine=Medicine::find($id);
        if(is_null($the_medicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_medicine->delete();
            return response()->json(null,204);
        }
    }
}
