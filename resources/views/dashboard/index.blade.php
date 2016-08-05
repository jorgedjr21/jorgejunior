@extends('layouts/dashboard')

        @section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Home
        <small>seus dados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-book"></i>
                    <h3 class="box-title">Documentação da API</h3>
                </div>
                <div class="box-body">
                    <p class="lead text-center text-bold">A documentação para uso da API está disponivel <a href="{{route('user.docs')}}">aqui</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Default box -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner"><h3>{{count($user->devices)}}</h3><p>@if(count($user->devices)< 2) Dispositivo @else Dispositivos @endif</p></div>
                <div class="icon"></div>
                <a href={{route('device.listall')}} class="small-box-footer">Mais Detalhes</a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner"><h3>{{$streams}}</h3><p>Transmissões de dados</p></div>
                <div class="icon"></div>
                <a href={{route('device.listall')}} class="small-box-footer">Mais Detalhes</a>
            </div>
        </div>
    </div>



</section>
<!-- /.content -->
@endsection