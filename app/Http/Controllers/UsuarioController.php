<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $usuarios = User::all();
        return view('cliente.index', compact('usuarios'));
    }

    public function mostrar($id){
        $usuario = User::find($id);
        return view('cliente.show', compact('usuario'));
    }

    public function crear(){
        return view('cliente.crear');
    }

    public function guardar(Request $request){
        $nombreusuario = $request->name;
        $email = $request->email;
        
        $usuario = new User();
        $usuario->name = $nombreusuario;
        $usuario->email = $email;

        $usuario->save();

        return redirect('/cliente/index');
    }

    public function editar($id){
        $usuario = User::find($id);
        return view('cliente.editar', compact('usuario'));
    }

    public function editarUsuario(Request $request, $id){
        $nombreusuario = $request->name;
        $email = $request->email;
        
        $usuario = User::find($id);
        $usuario->name = $nombreusuario;
        $usuario->email = $email;
        
        $usuario->update();

        return redirect('/cliente/index');
    }

    public function eliminar($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/cliente/index');
    }
}
