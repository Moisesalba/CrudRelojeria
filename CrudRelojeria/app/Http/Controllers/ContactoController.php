<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function soporte() {
    
        return view('Relojes.soporte');
    }
    
    public function index() {
        // Obtener todos los datos de la base de datos
        $soporte = Soporte::all();
         
        // Pasar los datos a la vista
        return view('Soporte.index', ['soporte' => $soporte]);
       
     }
     public function create()
     {
         $soporte= Soporte::all();
         return view ('Relojes.soporte', ['soporte' => $soporte]);
     }

    public function store(Request $request)
    {
        
        // $request->validate([
        //     'nombre' => 'required|min:5|max:30',
        //     'apellidos' => 'required|min:5|max:100',
        //     'correo' => 'required|min:5|max:100',
        //     'telefono' => 'required|min:5|max:100',
        //     'descripcion' => 'required|min:5|max:100'
        // ]);
        
        $soporte = Soporte::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'telefono' => $request->telefono, 
            'descripcion' => $request->descripcion 
        ]);
      
        session()->flash('status', 'Se envio tu respuesta correctamente ' . $request->nombre);
        return redirect()->route('RegistroIndex'); }
}