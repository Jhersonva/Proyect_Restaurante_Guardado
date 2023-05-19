@extends('adminlte::page')

{{--@section('title', 'RESTAURANTE')--}}

@section('content_header')

<div>
    <h1>Bienvenido</h1>
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
           
            <div class="card">
                <a href="admin/categoria">
                <div class="card-header p-3 pt-2">
                    
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <!--<img src="img/icon_categorias.ico" alt="" width="35px" height="30px">-->
                    
                        <i class="material-icons opacity-10">Categorias</i>
                    
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total de Categorias</p>
                        <h4 class="mb-0">0</h4>
                    </div>
                </div>
            
                <hr class="dark horizontal my-0">
            </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <a href="admin/menus">
                            <div class="card-header p-3 pt-2">
                                <div
                                class="icon icon-lg icon-shape bg-gradient-green shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">Menú</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total Menú</p>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <a href="admin/ordenes">
                            <div class="card-header p-3 pt-2">
                                <div
                                class="icon icon-lg icon-shape bg-gradient-red shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <!--<img src="img/icon_categorias.ico" alt="">-->
                                    <i class="material-icons opacity-10">Ordenes en Cola</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total ordenes en Cola</p>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <a href="reportes">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-red text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">Total de Ventas de Hoy</i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Total</p>
                                    <h4 class="mb-0">$0</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                        </a>
                    </div>
                </div>
            </div>
            <!--end cards-->

            <!--escrip-->
    

               
           

@stop

@section('content')
    <img src="https://cdn.pixabay.com/photo/2016/05/26/14/11/chef-1417239_1280.png" alt="" width="100%" height="400">
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop