@extends('adminlte::page')

@section('title', 'Agregar Producto')

@section('content_header')
    <h1>Agregar Producto</h1>
@stop

@section('content')
    <p></p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'producto.store']) !!}

            <div class="form-group">
                {!! Form::label('categoria_id','Categoria_Id')!!}
                {!! Form::number('categoria_id',null, ['class'=>'form-control', 'placeholder'=> 'Categoria']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre','Nombre')!!}
                {!! Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=> 'Producto']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('precio','Precio')!!}
                {!! Form::number('precio',null, ['class'=>'form-control', 'placeholder'=> 'introduzaca su precio']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('imagen','imagen')!!}
                {!! Form::file('imagen',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('stock','Stock')!!}
                {!! Form::number('stock',null, ['class'=>'form-control', 'placeholder'=> 'introduzaca stock']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','descripcion')!!}
                {!! Form::text('descripcion',null, ['class'=>'form-control', 'placeholder'=> 'introduzaca su Contraseña']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('disponibilida','Disponibilidad')!!}
                {!! Form::text('disponibilida',null, ['class'=>'form-control', 'placeholder'=> '']) !!}
            </div>
        
            <div class="form-group">
                        <x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-save" />
                        <a href="{{ route('producto.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>

            
            {!! Form::close() !!}
        </div>
    </div>
@stop