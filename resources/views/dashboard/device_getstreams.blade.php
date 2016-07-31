@extends('layouts/dashboard')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{$device->name}}
        <small>Streams</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('device.listall')}}">Dispositivos</a></li>
        <li class="active">Streams</li>
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
                <a href="{{route('device.newdevice')}}" class="btn btn-box-tool" data-toggle="tooltip" data-placement="top" title="Adicionar Dispositivo"><i class="fa fa-plus-circle text-success"></i></a>
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover table-bordered">
                <tr>
                    <th class="text-center">Dispositivo</th>
                    <th class="text-center">Dado</th>
                </tr>
                @forelse($streams as $stream)
                    <tr>
                        <td class="text-center">{{$device->name}}</td>
                        <td class="text-center">{{$stream->data}}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-danger text-center text-bold danger"> Nenhuma transmissão realizada!</td>
                    </tr>
                @endforelse
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            {{$streams->links()}}
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
@endsection