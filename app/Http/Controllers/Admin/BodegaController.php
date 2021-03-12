<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Bodega;

class BodegaController extends Controller
{
    
    public function index()
    {
        $bodegas = Bodega::all();
        return view('admin.bodegas.index', compact('bodegas'));
    }

    
    public function create()
    {
        return view('admin.bodegas.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:bodegas',
            'slug' => 'required|unique:bodegas'
        ]);

      Bodega::create($request->all());

       return redirect()->route('admin.bodegas.index')->with('info','La Bodega Se Creo Con Exito');
    }

    
    public function show(Bodega $bodega)
    {
        return view('admin.bodegas.show', compact('bogeda'));
    }

    
    public function edit(Bodega $bodega)
    {
        return view('admin.bodegas.edit', compact('bodega'));
    }

    
    public function update(Request $request, Bodega $bodega)
    {
        $request->validate([
            'nombre'=>'required|unique:bodegas',
            'slug' => 'required|unique:bodegas'
        ]);

        $bodega->update($request->all());

        return redirect()->route('admin.bodegas.index')->with('info','La Bodegas Se Actualizo Con Exito');
    }

   
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();

        return redirect()->route('admin.bodegas.index')->with('info','La Bodega Se Elimino Con Exito');
    }
}
