<?php

namespace App\Http\Controllers;
use App\Models\diagnosis;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index(){
        return response()->json(Diagnosis::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_cartMedicine=Diagnosis::find($id);
        if(is_null($the_cartMedicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_cartMedicine::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request){
        $the_cartMedicine=Diagnosis::create($request->all());
        return response($the_cartMedicine,201);
    }
    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_cartMedicine=Diagnosis::find($id);
        if(is_null($the_cartMedicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_cartMedicine->update($request->all());
            return response()->json($the_cartMedicine::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_cartMedicine=Diagnosis::find($id);
        if(is_null($the_cartMedicine)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_cartMedicine->delete();
            return response()->json(null,204);
        }
    }
}
