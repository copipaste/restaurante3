<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = User::where('tipo', 'cliente')->get();
        //return dd($clientes);
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'fechaNacimiento' => ['required', 'date'],
            'sexo' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'direccion' => ['required', 'string', 'max:255'],
            'nit' => ['required', 'string', 'max:255'],
            'tipo' => ['required', 'string', 'max:255'],
            'edad' => ['required', 'string', 'max:255'],
        ]);
        $cliente = User::create([
            'nombre' => $request->nombre,
            'fechaNacimiento' => $request->fechaNacimiento,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'direccion' => $request->direccion,
            'nit' => $request->nit,
            'tipo' => 'cliente',
            'edad'  => $request->edad,
        ]);
        return redirect()->route('clientes.index', $cliente);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = User::find($id);
        return dd($cliente);
            return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = User::find($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = User::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->email = $request->input('email');

        $cliente->save();

        return redirect('clientes')->with('success', 'Cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = User::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado con éxito');
    }
}
