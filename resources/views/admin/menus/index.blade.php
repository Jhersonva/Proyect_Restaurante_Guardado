@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}

@section('content')
<div class="card">

    <div class="content bg-danger py-3 px-4">
        <h3 class="font-weight-bolder text-light">Platos Disponibles</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.menus.create')}}">Agregar Categoria</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha FechaCreación</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Acción</th>    
                </tr>
            </thead>

            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->FechaCreacion}}</td>
                        <td>{{$menu->Descripcion}}</td>    
                        <td>{{$menu->Precio}}</td>    
                        <td>{{$menu->Estado}}</td> 
                        <td>{{$menu->Accion}}</td>
                        
                        <td width="10px">
                            <a class="btn btn-dark btn-sm" href="{{route('admin.menus.edit', $menu)}}">Editar</a>
                        </td>

                        <td width="10px">
                            <form action="{{route('admin.menus.destroy', $menu)}}" method="POST">
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
</div>
@stop


