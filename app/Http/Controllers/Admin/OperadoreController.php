<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Operadore;

class OperadoreController extends Controller
{
   
    public function index()
    {
        $operadores = Operadore::all();
        return view('admin.operadores.index', compact('operadores'));
    }

   
    public function create()
    {
        return view('admin.operadores.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:operadores',
            'slug' => 'required|unique:operadores'
        ]);

       Operadore::create($request->all());

       return redirect()->route('admin.operadores.index')->with('info','El Operador Se Creo Con Exito');
    }

    
    public function show(Operadore $operadore)
    {
        return view('admin.operadores.show', compact('operadore'));
    }

    
    public function edit(Operadore $operadore)
    {
        return view('admin.operadores.edit', compact('operadore'));
    }

    
    public function update(Request $request, Operadore $operadore)
    {
        $request->validate([
            'nombre'=>'required|unique:operadores',
            'slug' => 'required|unique:operadores'
        ]);

        $operadore->update($request->all());

        return redirect()->route('admin.operadores.index')->with('info','El Operador Se Actualizo Con Exito');
    }

    
    public function destroy(Operadore $operadore)
    {
        $operadore->delete();

        return redirect()->route('admin.operadores.index')->with('info','El Operador Se Elimino Con Exito');
    }
}
