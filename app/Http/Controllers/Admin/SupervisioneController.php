<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Supervisione;

class SupervisioneController extends Controller
{
    
    public function index()
    {
        $supervisiones = Supervisione::all();
        return view('admin.supervisiones.index', compact('supervisiones'));
    }

    
    public function create()
    {
        return view('admin.supervisiones.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:supervisiones',
            'slug' => 'required|unique:supervisiones'
        ]);

       Supervisione::create($request->all());

       return redirect()->route('admin.supervisiones.index')->with('info','La Supervision Se Creo Con Exito');

      //return $request->all();
    }

    
    public function show(Supervisione $supervisione)
    {
        return view('admin.supervisiones.show', compact('supervisione'));
    }

    
    public function edit(Supervisione $supervisione)
    {
        return view('admin.supervisiones.edit', compact('supervisione'));
    }

    
    public function update(Request $request, Supervisione $supervisione)
    {
        $request->validate([
            'nombre'=>'required|unique:supervisiones',
            'slug' => 'required|unique:supervisiones'
        ]);

        $supervisione->update($request->all());

        return redirect()->route('admin.supervisiones.index')->with('info','La Supervision Se Actualizo Con Exito');
    }

   
    public function destroy(Supervisione $supervisione)
    {
        $supervisione->delete();

        return redirect()->route('admin.supervisiones.index')->with('info','La Supervision Se Elimino Con Exito');
    }
}
