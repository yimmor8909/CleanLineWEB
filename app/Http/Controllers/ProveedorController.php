<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    public function mostrar($id){
        $proveedor = Proveedor::find($id);
        return view('proveedor.show', compact('proveedor'));
    }

    public function crear(){
        return view('proveedor.crear');
    }

    public function guardar(Request $request){
        $codigoproveedor = $request->codigoproveedor;
        $nombreproveedor = $request->nombreproveedor;
        
        $proveedor = new Proveedor();
        $proveedor->codigo = $codigoproveedor;
        $proveedor->nombre = $nombreproveedor;

        $proveedor->save();

        return redirect('/proveedores/index');
    }

    public function editar($id){
        $proveedor = Proveedor::find($id);
        return view('proveedor.editar', compact('proveedor'));
    }

    public function editarProveedor(Request $request, $id){
        $codigoproveedor = $request->codigoproveedor;
        $nombreproveedor = $request->nombreproveedor;
        
        $proveedor = Proveedor::find($id);
        $proveedor->codigo = $codigoproveedor;
        $proveedor->nombre = $nombreproveedor;
        
        $proveedor->update();

        return redirect('/proveedores/index');
    }

    public function eliminar($id){
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect('/proveedores/index');
    }
}
