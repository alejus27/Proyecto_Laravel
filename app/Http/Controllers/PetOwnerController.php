<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\PetOwner;
use Illuminate\Http\Request;

class PetOwnerController extends Controller
{
    public function index(){
        return response()->json(PetOwner::all(),200);   //Hace referencia al modelo
    }
    
    //Mostrar un solo elemento filtrado por el id
    public function show($id){
        $the_petOwner=PetOwner::find($id);
        if(is_null($the_petOwner)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            return response()->json($the_petOwner::find($id),200);
        }
    }

    //Crea el objeto y lo mete a la db
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $data['password'] = bcrypt($request->password);
            $user = PetOwner::create($data);
            $token = $user->createToken('API Token')->accessToken;
            return response(['user' => $user, 'token' => $token]);
        } catch (Exception $e) {
            return response(['data' => "Data incomplete "],400);
        }
    }

    
    //Requiere los nuevos campos para obtener el body, luego tengo id para saber que elemento cambiar
    public function update(Request $request,$id){
        $the_petOwner=PetOwner::find($id);
        if(is_null($the_petOwner)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_petOwner->update($request->all());
            return response()->json($the_petOwner::find($id),200);
        }
    }

    //Eliminar
    public function destroy(Request $request,$id){
        $the_petOwner=PetOwner::find($id);
        if(is_null($the_petOwner)){
            return response()->json(['message'=>'Not found'],404);
        }else{
            $the_petOwner->delete();
            return response()->json(null,204);
        }
    }
}
