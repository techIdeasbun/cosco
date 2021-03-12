<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ciudade;

class CiudadeController extends Controller
{
   
    public function index()
    {
        $ciudades = Ciudade::all();
        return view('admin.ciudades.index', compact('ciudades'));
    }

    
    public function create()
    {
        return view('admin.ciudades.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:ciudades',
            'slug' => 'required|unique:ciudades'
        ]);

       Ciudade::create($request->all());

       return redirect()->route('admin.ciudades.index')->with('info','La Ciudad Se Creo Con Exito');
    }

    
    public function show(Ciudade $ciudade)
    {
        return view('admin.ciudades.edit', compact('ciudade'));
    }

    
    public function edit(Ciudade $ciudade)
    {
        return view('admin.ciudades.edit', compact('ciudade'));
    }

    
    public function update(Request $request, Ciudade $ciudade)
    {
        $request->validate([
            'nombre'=>'required|unique:actividades',
            'slug' => 'required|unique:actividades'
        ]);

        $ciudade->update($request->all());

        return redirect()->route('admin.ciudades.index')->with('info','La Ciudad Se Actualizo Con Exito');
    }

    
    public function destroy(Ciudade $ciudade)
    {
        $ciudade->delete();

        return redirect()->route('admin.ciudades.index')->with('info','La Ciudad Se Elimino Con Exito');
    }
}
