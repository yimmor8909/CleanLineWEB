<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function mostrar($id){
        $producto = Producto::find($id);
        return view('producto.show', compact('producto'));
    }

    public function crear(){
        return view('producto.crear');
    }

    public function guardar(Request $request){
        $codigoproducto = $request->codigoproducto;
        $nombreproducto = $request->nombreproducto;
        $precioproducto = $request->precioproducto;
        
        $producto = new Producto();
        $producto->codigo = $codigoproducto;
        $producto->nombre = $nombreproducto;
        $producto->precio = $precioproducto;

        $producto->save();

        return redirect('/productos/index');
    }

    public function editar($id){
        $producto = Producto::find($id);
        return view('producto.editar', compact('producto'));
    }

    public function editarProducto(Request $request, $id){
        $codigoproducto = $request->codigoproducto;
        $nombreproducto = $request->nombreproducto;
        $precioproducto = $request->precioproducto;
        
        $producto = Producto::find($id);
        $producto->codigo = $codigoproducto;
        $producto->nombre = $nombreproducto;
        $producto->precio = $precioproducto;
        
        $producto->update();

        return redirect('/productos/index');
    }

    public function eliminar($id){
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos/index');
    }

}
