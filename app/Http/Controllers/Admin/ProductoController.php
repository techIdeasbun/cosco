<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    
    public function index()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos'));
    }

    
    public function create()
    {
        return view('admin.productos.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|unique:productos',
            'slug' => 'required|unique:productos'
        ]);

       Producto::create($request->all());

       return redirect()->route('admin.productos.index')->with('info','El Producto Se Creo Con Exito');
    }

   
    public function show(Producto $producto)
    {
        return view('admin.productos.show', compact('producto'));
    }

    
    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', compact('producto'));
    }

    
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre'=>'required|unique:productos',
            'slug' => 'required|unique:productos'
        ]);

        $producto->update($request->all());

        return redirect()->route('admin.productos.index')->with('info','El Producto Se Actualizo Con Exito');
    }

   
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('admin.productos.index')->with('info','El Producto Se Elimino Con Exito');
    }
}
