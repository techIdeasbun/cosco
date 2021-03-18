<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Transporte;

class TransporteController extends Controller
{
    
    public function index()
    {
        $transportes = Transporte::all();
        return view('admin.transportes.index', compact('transportes'));
    }

    
    public function create()
    {
        return view('admin.transportes.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:transportes',
            'slug' => 'required|unique:transportes'
        ]);

       Transporte::create($request->all());

       return redirect()->route('admin.transportes.index')->with('info','El Transporte Se Creo Con Exito');

      //return $request->all();
    }

    
    public function show(Transporte $transporte)
    {
        return view('admin.transportes.show', compact('transporte'));
    }

    
    public function edit(Transporte $transporte)
    {
        return view('admin.transportes.edit', compact('transporte'));
    }

    
    public function update(Request $request, Transporte $transporte)
    {
        $request->validate([
            'nombre'=>'required|unique:transportes',
            'slug' => 'required|unique:transportes'
        ]);

        $transporte->update($request->all());

        return redirect()->route('admin.transportes.index')->with('info','El Transporte Se Actualizo Con Exito');
    }

   
    public function destroy(Transporte $transporte)
    {
        $transporte->delete();

        return redirect()->route('admin.transportes.index')->with('info','El Transporte Se Elimino Con Exito');
    }
}
