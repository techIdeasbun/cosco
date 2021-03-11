<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Bascula;

class BasculaController extends Controller
{
    
    public function index()
    {
        $basculas = Bascula::all();
        return view('admin.basculas.index', compact('basculas'));
    }

    
    public function create()
    {
        return view('admin.basculas.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:basculas',
            'slug' => 'required|unique:basculas'
        ]);

       Bascula::create($request->all());

       return redirect()->route('admin.basculas.index')->with('info','La Bascula Se Creo Con Exito');
    }

    
    public function show(Bascula $bascula)
    {
        return view('admin.basculas.show', compact('bascula'));
    }

    
    public function edit(Bascula $bascula)
    {
        return view('admin.basculas.edit', compact('bascula'));
    }

    
    public function update(Request $request, Bascula $bascula)
    {
        $request->validate([
            'nombre'=>'required|unique:basculas',
            'slug' => 'required|unique:basculas'
        ]);

        $bascula->update($request->all());

        return redirect()->route('admin.basculas.index')->with('info','La Bascula Se Actualizo Con Exito');
    }

    
    public function destroy(Bascula $bascula)
    {
        $bascula->delete();

        return redirect()->route('admin.basculas.index')->with('info','La Bascula Se Elimino Con Exito');
    }
}
