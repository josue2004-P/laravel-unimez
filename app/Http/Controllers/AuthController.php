<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerAlumno(RegistroRequest $request){
    // Validar el registro
    $data = $request->validated();

    // Crear el usuario
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password'])
    ]);

    // Agregar el nombre del usuario a la segunda tabla
    $nombreUsuario = new Alumno();
    $nombreUsuario->name = $data['name'];
    $nombreUsuario->save();

    // Retornar una respuesta
    return "Perfecto";
    }
    
    
    public function login(LoginRequest $request){
        $data = $request->validated();

        //revisar password

        if(!Auth::attempt($data)){
            return response([
                'errors' => ['El email o el password son incorrectos']
            ],422);
        }

        //Autentificar usuario
        $user = Auth::user();
        // Retornar una respuesta
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];


    }
    public function logout(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return [
            'user' => null
        ];
    }
}
