@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">CLIENTE</h1>
@stop

@section('content')

    @if (session('mensaje'))
        <div class="alert alert-success">
            <strong>{{ session('mensaje') }}</strong>
        </div>
    @endif
    

    <div class = "card">
        <div class = "card-body">
           
            <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="white" with-buttons>

                <div class="btn btn-lg btn-default mb-3">
                    <a href="{{ route('clientes.create') }}" class="text-primary">
                        <i class="fas fa-street-view"></i>
                        Agregar Cliente</a>
                </div>

                @php
                    $i = 1;
                @endphp

                @foreach ($clientes as $user)
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

                        <td width="15px"> {{-- esto es como una columna mas  --}}
                            <div class="d-flex"> {{-- esto es lo que hace que los datos esten uno al lado del otro --}}
                                <a href="{{ route('clientes.edit', $user) }}"  
                                    class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit"><i
                                        class="fa fa-lg fa-fw fa-pen"></i></a>{{-- boton editar --}}

                                {{-- boton de eliminar  --}}
                               
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete" data-toggle="modal" data-target="#modalCustom{{ $user->id }}">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                                {{-- MODAL --}}
                                <x-adminlte-modal id="modalCustom{{ $user->id }}" title="Eliminar" size="sm" theme="dark"
                                    icon="fas fa-bell" v-centered static-backdrop scrollable>
                                    <div style="height:80px;">Esta seguro de eliminar </div>
                                    <x-slot name="footerSlot">

                                        <form action="{{ route('clientes.destroy', $user->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <x-adminlte-button class="btn-flat" type="submit" label="Aceptar"
                                                theme="success" />
                                        </form>
                                        <x-adminlte-button theme="danger" label="Cancelar" data-dismiss="modal" />
                                    </x-slot>
                                </x-adminlte-modal>
                                <a href="{{ route('clientes.show', $user->id) }}"
                                    class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                                    <i class="fa fa-lg fa-fw fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@stop
