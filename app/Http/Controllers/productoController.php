<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\Hash;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads = [
            'categoria_id',
            'nombre',
            'precio',
            'imagen',
            'stock',
            'descripcion',
            'disponibilida',
            ['label' => 'Acciones', 'no-export' => true],
        ];
        $producto = producto::all();
        return view('producto.index', compact('producto', 'heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'categoria_id' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
            'disponibilida' => 'required'
        ]);

        $producto = producto::create([
            'categoria_id' => 1,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'imagen' => $request->imagen,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion,
            'disponibilida' => true
            //$disponibilidad = $request->input('disponibilida') === 'si' ? 1 : 0
        ]);

        return redirect()->route('producto.index', $producto);
        //return redirect()->route('producto.index', compact($producto))->with('success', 'producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = producto::find($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = producto::find($id);
        return view('producto.edit', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'categoria_id' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'imagen' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
            'disponibilida' => 'required'
        ]);
        //buscamos al personal a actualizar
        $producto = producto::findOrFail($id);
        //actualizamos el personal
        $producto->update($request->all());

        //redireccionamos a la vista index
        return redirect()->route('producto.index')->with('sucess', 'producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'producto eliminado con éxito');
    }
}
