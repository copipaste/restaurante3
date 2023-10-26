<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;


class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insumos = Insumo::all();
        $heads = [
            'Nombre',
            'Estado',
            'Stock',
            'Fecha compra',
            'Fecha vencimiento',
            'Registrador',
            'Almacen',
            ['label' => 'Acciones', 'no-export' => true],
        ];
        return view('insumos.index', compact('heads','insumos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'status' => 'required',
            'stock' => 'required',
            'unidad' => 'required',
            'minimoStock' => 'required',
            'almacen_id' => 'required',
            'empleado_id' => 'required',
            'proveedor_id' => 'required',
            'fechaCompra' => 'required',
            'fechaVencimiento' => 'required',
        ]);
 
        $insumo = Insumo::create([
            'nombre' => $request->nombre,
            'status' => $request->status,
            'stock' => $request->stock,
            'unidad' => $request->unidad,
            'minimoStock' => $request->minimoStock,
            'registrador' => $request->registrador,
            'almacen_id' => $request->almacen_id,
            'empleado_id' => $request->empleado_id,
            'proveedor_id' => $request->proveedor_id,
        ]);

        $insumo = new Insumo();
        $insumo->nombre = $request->nombre;
        $insumo->descripcion = $request->descripcion;
        $insumo->status = $request->status;

        if( $request->hasFile('url')){
            
            $file = $request->file('url');
            $destinationPath = 'images/category/';
            $filename = time(). '-' .$file->getClientOriginalName();
            $uploadSuccess = $request->file('url')->move($destinationPath, $filename);
            $categoria->url = $destinationPath . $filename;
        }

    
        $categoria->save();
        $this->saveToLog($request,'store',$categoria);
        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
