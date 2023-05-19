@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}

@section('content_header')
    <h3>Crear Nueva Categoria</h3>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categoria.store']) !!} 
                
                <div class="form group">
                    {!! Form::label('FechaCreacion', 'Fecha Creación:') !!}
                    {!! Form::text('FechaCreacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de Creación']) !!}
                
                    @error('FechaCreacion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror           
                </div>

                <div class="form group">
                    {!! Form::label('Nombre', 'Nombre:') !!}
                    {!! Form::text('Nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre']) !!}
                
                    @error('Nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form group">
                    {!! Form::label('Descripcion', 'Descripción:') !!}
                    {!! Form::text('Descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una Descripción']) !!}
                
                    @error('Descripcion')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form group">
                    {!! Form::label('Estado', 'Estado:') !!}
                    {!! Form::text('Estado', null, ['class' => 'form-control', 'placeholder' => 'Activo/No Activo']) !!}
                
                    @error('Estado')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop