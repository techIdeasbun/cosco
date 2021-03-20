<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Calificaraccidente;

use App\Models\Ciudade;
use App\Models\Transporte;

class AccidenteController extends Controller
{
   
    public function index()
    {
        $accidentes = Calificaraccidente::all();
        return view('admin.accidentes.index', compact('accidentes'));
    }

   
    public function create()
    {
        $ciudades = Ciudade::pluck('nombre','id');
        $transportes = Transporte::pluck('nombre','id');
        return view('admin.accidentes.create',compact('ciudades','transportes'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'valoracion'=> 'required|integer',
            'ciudade_id' => 'required|integer',
            'transporte_id' => 'required|integer'
        ]);

        Calificaraccidente::create($request->all());

       return redirect()->route('admin.accidentes.index')->with('info','La Calificacion Se Guardo Con Exito'); 
       
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
