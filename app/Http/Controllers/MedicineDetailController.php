<?php

namespace App\Http\Controllers;

use App\Models\MedicineDetail;
use Illuminate\Http\Request;

class MedicineDetailController extends Controller
{
    public function index(){
        return response()->json(MedicineDetail::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_medicineDetail=MedicineDetail::find($id);
        if(is_null($the_medicineDetail)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_medicineDetail::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request){
        $the_medicineDetail=MedicineDetail::create($request->all());
        return response($the_medicineDetail,201);
    }
    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_medicineDetail=MedicineDetail::find($id);
        if(is_null($the_medicineDetail)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_medicineDetail->update($request->all());
            return response()->json($the_medicineDetail::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_medicineDetail=MedicineDetail::find($id);
        if(is_null($the_medicineDetail)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_medicineDetail->delete();
            return response()->json(null,204);
        }
    }
}
