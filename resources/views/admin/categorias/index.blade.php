@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}


@section('content')
<div class="card">

    
    <div class="content bg-danger py-3 px-4">
        <h3 class="font-weight-bolder text-light">Agregar Categoria</h3>
    </div>

    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.categoria.create')}}">Agregar Categoria</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha FechaCreación</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categorias)
                    <tr>
                        <td>{{$categorias->id}}</td>
                        <td>{{$categorias->FechaCreacion}}</td>
                        <td>{{$categorias->Nombre}}</td>
                        <td>{{$categorias->Descripcion}}</td>        
                        <td>{{$categorias->Estado}}</td> 
                        
                        <td width="10px">
                            <a class="btn btn-dark btn-sm" href="{{route('admin.categoria.edit', $categorias)}}">Editar</a>
                        </td>
                        <td width="10px">

                            <form action="{{route('admin.categoria.destroy', $categorias)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop


