<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{

    public function inicio() {
    
        return view('welcome');
    }
    public function iniciocompra() {
    
        return view('Relojes.compra');
    }
    public function index() {
       // Obtener todos los datos de la base de datos
       $compra = Compra::all();
        
       // Pasar los datos a la vista
       return view('Relojes.index', ['compra' => $compra]);
      
    }

    public function create()
    {
        $compra= Compra::all();
        return view ('Relojes.compra', ['compra' => $compra]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required|min:5|max:30',
        //     'direccion' => 'required|min:5|max:100',
        //     'tarjeta' => 'required|min:5|max:100',
        //     'ciudad' => 'required|min:5|max:100',
        //     'estado' => 'required|min:5|max:100',
        //     'codigopostal' => 'required|min:5|max:100'
        // ]);
        
        $compra = Compra::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'tarjeta' => $request->tarjeta,
            'ciudad' => $request->ciudad, 
            'estado' => $request->estado,
            'codigopostal' => $request->codigopostal 
        ]);
        
        session()->flash('status', 'Se compró el producto correctamente ' . $request->nombre);
        return redirect()->route('RelojesIndex'); 
    }
    
    

}