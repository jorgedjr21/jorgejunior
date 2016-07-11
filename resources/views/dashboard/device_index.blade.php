@extends('layouts/dashboard')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dispositivos
        <small>cadastrados</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('user.devices')}}">Dispositivos</a></li>
        <li class="active">Listando todos</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


    <!-- Default box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Dispositivos</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i></button>
                <a href="" class="btn btn-box-tool"><i class="fa fa-plus-circle" data-toggle="tooltip" data-placement="top" title="Adicionar Dispositivo"></i></a>
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>Nome</th>
                    <th>Chave de Dispositivo</th>
                    <th>Descrição</th>
                    <th colspan="2">Ações</th>
                </tr>
                @forelse($devices as $device)
                    <tr>
                        <td>{{$device->name}}</td>
                        <td>{{$device->dkey}}</td>
                        <td>{{$device->description}}</td>
                        <td><a href="" class="btn btn-app btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Dispositivo"><i class="fa fa-edit"></i></a></td>
                        <td><a href="" class="btn btn-app btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir Dispositivo"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @empty
                <tr>
                    <td colspan="5" class="text-danger text-center text-bold danger"> Nenhum dispositivo cadastrado!</td>
                </tr>
                @endforelse
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{$devices->links()}}
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
@endsection