@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}



@section('content')
<div class="card">


    <div class="content bg-danger py-3 px-4">
        <h3 class="font-weight-bolder text-light">Ordenes</h3>
    </div>
    
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha FechaCreación</th>
                    <th>Numero de Transaccion</th>
                    <th>Cola</th>
                    <th>Monto Total</th>
                    <th>Estado</th>
                    <th>Acción</th>
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($ordenes as $orden)
                    <tr>
                        <td>{{$orden->id}}</td>
                        <td>{{$orden->FechaCreacion}}</td>
                        <td>{{$orden->NumeroTransaccion}}</td>
                        <td>{{$orden->Cola}}</td>     
                        <td>{{$orden->MontoTotal}}</td>    
                        <td>{{$orden->Estado}}</td> 
                        
                    
                        <td width="10px">
                            <form action="{{route('admin.ordenes.destroy', $orden)}}" method="POST">
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



