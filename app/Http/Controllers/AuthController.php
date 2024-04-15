<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegistroRequest $request){
        //validar el registro
        $data=$request->validated();
        //crear el usuario 
        $user = User::create([
            'name'=>$data['name'],
            'user'=>$data['user'],
            'apellido'=>$data['apellido'],
            'password'=>bcrypt($data['password'])
        ]);
        return [
            'token'=>$user->createToken('token')->plainTextToken,
            'user'=>$user
        ];
    }
    public function login(LoginRequest $request){
        $data=$request->validated();
        //revisar por contraseña 
        if(!Auth::attempt($data)){
            return response([
                'errors'=>["El email o el password son incorrectos"]
            ],422);
        }

        //autenticar al usuario
        $user=Auth::user();
        return [
            'token'=>$user->createToken('token')->plainTextToken,
            'user'=>$user
        ];
    }
    public function logout(Request $request){
        $user=$request->user();
        $user->currentAccessToken()->delete();
        return[
            'user'=>null
        ];
    }
}
