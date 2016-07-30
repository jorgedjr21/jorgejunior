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
        <li><a href="{{route('device.listall')}}">Dispositivos</a></li>
        <li class="active">Listando todos</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
            {{session('success')}}
        </div>
    @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Erro!</h4>
                {{session('error')}}
            </div>
            @endif

    <!-- Default box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Dispositivos</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i></button>
                <a href="{{route('device.newdevice')}}" class="btn btn-box-tool" data-toggle="tooltip" data-placement="top" title="Adicionar Dispositivo"><i class="fa fa-plus-circle text-success"></i></a>
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover table-bordered">
                <tr>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Chave de Dispositivo</th>
                    <th class="text-center">Descrição</th>
                    <th colspan="2" class="text-center">Ações</th>
                </tr>
                @forelse($devices as $device)
                    <tr>
                        <td class="text-center"><a href="{{route('device.getStreams',['device_id'=>$device->id])}}">{{$device->name}}</a></td>
                        <td class="text-center">{{$device->dkey}}</td>
                        <td class="text-center">{{$device->description}}</td>
                        <td class="text-center"><a href="{{route('device.editform',['device_id'=>$device->id])}}" class="btn btn-block btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Dispositivo"><i class="fa fa-edit fa-lg"></i></a></td>
                        <td class="text-center">
                            <form action="{{route('device.delete',['device_id'=>$device->id])}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                            <button type="submit" class="btn btn-block btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Excluir Dispositivo"><i class="fa fa-trash fa-lg"></i></button>
                            </form>
                        </td>
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