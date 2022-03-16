<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenCompraController extends Controller
{
    public function crear(){

        $sql = 'SELECT id_proveedor, 
                case when nombres is not null then 
                concat(nombres, " ", apellidos)  else 
                nombre end as proveedor 
                from proveedores 
                left join personas on personas.id_persona = proveedores.id_persona';
                
        $proveedores = DB::select($sql);
        $data = ['proveedores' => $proveedores];
        return view('ordencompra.crear', $data);
    }

    public function consultar(){
        return view('ordencompra.consultar');
    }
}
