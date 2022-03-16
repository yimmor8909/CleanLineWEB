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
        return view('usuario.index', compact('usuarios'));
    }

    public function mostrar($id){
        $usuario = User::find($id);
        return view('usuario.show', compact('usuario'));
    }

    public function crear(){
        return view('usuario.crear');
    }

    public function guardar(Request $request){
        $nombreusuario = $request->name;
        $email = $request->email;
        
        $usuario = new User();
        $usuario->name = $nombreusuario;
        $usuario->email = $email;

        $usuario->save();

        return redirect('/usuarios/index');
    }

    public function editar($id){
        $usuario = User::find($id);
        return view('usuario.editar', compact('usuario'));
    }

    public function editarUsuario(Request $request, $id){
        $nombreusuario = $request->name;
        $email = $request->email;
        
        $usuario = User::find($id);
        $usuario->name = $nombreusuario;
        $usuario->email = $email;
        
        $usuario->update();

        return redirect('/usuarios/index');
    }

    public function eliminar($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect('/usuarios/index');
    }
}
