<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Actividade;

use function GuzzleHttp\Promise\all;

class ActividadeControler extends Controller
{
    
    public function index()
    {
        $actividades = Actividade::all();
        return view('admin.actividades.index', compact('actividades'));
    }

    
    public function create()
    {
        return view('admin.actividades.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:actividades',
            'slug' => 'required|unique:actividades'
        ]);

       Actividade::create($request->all());

       return redirect()->route('admin.actividades.index')->with('info','La Actividad Se Creo Con Exito');

      //return $request->all();
    }

    
    public function show(Actividade $actividade)
    {
        return view('admin.actividades.show', compact('actividade'));
    }

    
    public function edit(Actividade $actividade)
    {
        return view('admin.actividades.edit', compact('actividade'));
    }

    
    public function update(Request $request, Actividade $actividade)
    {
        $request->validate([
            'nombre'=>'required|unique:actividades',
            'slug' => "required|unique:actividades, slug, $actividade->id"
        ]);

        $actividade->update($request->all());

        return redirect()->route('admin.actividades.index')->with('info','La Actividad Se Actualizo Con Exito');
    }

   
    public function destroy(Actividade $actividade)
    {
        $actividade->delete();

        return redirect()->route('admin.actividades.index')->with('info','La Actividad Se Elimino Con Exito');
    }
}
