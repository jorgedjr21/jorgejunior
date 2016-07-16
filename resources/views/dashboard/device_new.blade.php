@extends('layouts/dashboard')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Adicionar
        <small>novo dispositivo</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('device.listall')}}">Dispositivos</a></li>
        <li class="active">Novo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

        @if(session('error'))
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Erro!</h4>
            {{session('error')}}
        </div>
        @endif

        @if(session('success'))
           <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
               {{session('success')}}
           </div>
        @endif
    <!-- Default box -->
    <div class="box">
        <form action="{{route('device.savedevice')}}" role="form" method="post">
            {{csrf_field()}}
        <div class="box-header with-border">
            <h3 class="box-title">Novo Dispositivo</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                    <label for="name">Nome do Dispositivo</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Arduino, Raspberry">
                    <span class="help-block">@if($errors->has('name')){{$errors->first('name')}}@endif</span>
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Descrição do dispositivo"></textarea>
                </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-lg btn-info">Salvar Dispositivo</button>
        </div>
        <!-- /.box-footer-->
        </form>
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
@endsection