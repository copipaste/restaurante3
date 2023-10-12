<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required','string','min:8'],

        ]);


        $data = ["success"=>false,"mensaje"=>"No se pudo registrar"];

        $user = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'edad' => $request->edad
        ]);


        //$user->assignRole("cliente");

        $data = ["success"=>true,"mensaje"=>"Registro exitoso"];
        return response()->json($data,200);
    }

    public function login(Request $request){
        $data = ["success"=>false,"mensaje"=>"Usuario no registrado"];

        $request ->validate([
            'email' => ['required', 'string','email','max:255'],
            'password' => ['required','string', 'min:8'],
        ]);

        $user = User::whereEmail($request->email)->first();
        if(!empty($user)){
            $data = ["success"=>false,"mensaje"=>"Contrasña incorrecta"];
            if(Hash::check($request->password,$user->password)){
                $accessToken = $user->createToken("auth_token")->plainTextToken;
                $data = [
                    "success" => true,
                    "mensaje" =>"Usuario Autenticado",
                    "user_id" => $user->id,
                    "access_token" =>$accessToken
                ];
            }
            return response()->json($data,200);
        }
        return response()->json($data,404);
        
    }

    public function logout(){
        // auth()->user()->tokens()->delete();
        
        // $data = [
        //     "success" => true,
        //     "mensaje" =>"Logout"
        // ];
        // return response()->json($data,200);
    }
}
