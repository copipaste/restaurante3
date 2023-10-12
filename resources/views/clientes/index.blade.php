@extends('adminlte::page')

@section('title', 'Lista de Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    <p>Lista de clientes.</p>
   <div class=card-header>
        <a href="{{route('clientes.create')}}" class="btn btn-primary">Agregar</a>
   </div> 
    </div>
   <div class="card">
    <div class="card-body">
    <table class= "table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>fechaNacimiento</th>
                <th>sexo</th>
                <th>telefono</th>
                <th>email</th>
              
                <th>direccion</th>
                <th>nit</th>
                <th>tipo</th>
                <th>edad</th>
                <th colspan ="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->fechaNacimiento }}</td>
                    <td>{{ $user->sexo }}</td>
                    <td>{{ $user->telefono }}</td>
                    <td>{{ $user->email }}</td>
                  
                    <td>{{ $user->direccion }}</td>
                    <td>{{ $user->nit }}</td>
                    <td>{{ $user->tipo }}</td>
                    <td>{{ $user->edad }}</td>
                    <td width="15px"><a href="{{ route('clientes.edit',$user)}}" class="btn btn-primary btn-sm">Editar</a></td>
                    <td width="15px">
                        <form action="{{route('clientes.destroy',$user)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <x-adminlte-button class="btn-flat" type="submit" theme="danger" label="eliminar"  />
                        </form>
                    </td>
                  
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@stop

