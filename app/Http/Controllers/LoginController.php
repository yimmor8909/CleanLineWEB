<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Persona;
use App\Models\User;
use App\Models\Opciones_definidas;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //Cualquier método del controlador actual 
    //requiere que el usuario  este logueado a excepción de los
    //métodos que se le pasen como arreglo.
    public function __construct()
    {
        $this->middleware('guest')->except(['getLogout']);
    }

    //Retornamos a la vista del login
    public function getLogin(){
        return view('login.login');
    }

    //Retornamos a la vista para registrar a un usuario
    public function getRegister(){
        $tipos_documentos = Opciones_definidas::where('variable', '00identificacion')->get();
        $generos = Opciones_definidas::where('variable', '00genero')->get();

        $data = ['tipos_documentos' => $tipos_documentos,
                'generos' => $generos];
        return view('login.register',  $data);
    }

    public function postlogin(Request $request){

        $rules =[
            'email' => 'required|email|',
            'password' => 'required|min:8'
        ];

        $messages =[
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'El correo electrónico no cumple con el formato.',
            'password.required' => 'La contraseña es requerida.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Error al hacer login')
            ->with('typealert', 'danger');
        else:
            //Busco el usuario con la información del correo y contraseña
            //El ultimo parámetro nos indica si el usuario va a estar conectado.
           if(Auth::attempt(['email' => $request->input('email'), 
                    'password' => $request->input('password')], true)):
                    return redirect('/home');
           else:
                return back()->withErrors($validator)->with('message', 'Credenciales incorrectas.')
                ->with('typealert', 'danger');
           endif; 

        endif;
    }


    public function postRegister(Request $request){
        $persona = new Persona;
        $persona-> nombres= e($request->input('nombres'));
        $persona-> apellidos= e($request->input('apellidos'));
        $persona-> id_opcion_genero= $request->input('genero');
        $persona-> id_opcion_tipo_documento= $request->input('tipo_documento');
        $persona-> numero_documento= e($request->input('numero_documento'));
        $persona-> natalicio= e($request->input('fecha_nacimiento'));
        $persona-> habilitado= 1;

        if($persona->save()){
            $usuario = new User;
            $usuario-> id_persona = ($persona->id_persona);
            $usuario-> email= e($request->input('email'));
            $usuario-> password= Hash::make($request->input('password'));

            if($usuario->save()){
                return redirect('/login')->with('message', 'Su usuario se registró con éxito. Puede iniciar sesión')
                ->with('typealert', 'success')->withInput();
            }
        }
    }

    

    public function getRecover(){
        return view('login.recover');
    }

    //Cerrar sesión del usuario
    public function getLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
