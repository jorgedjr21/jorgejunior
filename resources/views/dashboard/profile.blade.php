@extends('layouts/dashboard')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Perfil
        <small>{{$user->name}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('user.profile')}}">Perfil</a></li>
        <li class="active">{{$user->name}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


    <!-- Default box -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Seus Dados</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-6 col-sm-12">
                <dl class="dl-horizontal">
                    <dt>Nome</dt>
                    <dd>{{$user->name}}</dd>
                    <dt>País</dt>
                    <dd>{{$user->country->name}}</dd>
                    <dt>Email</dt>
                    <dd>{{$user->email}}</dd>
                </dl>
            </div>
            <div class="col-md-6 col-sm-12">
                <dl class="dl-horizontal">
                    <dt>Chave de usuário</dt>
                    <dd>{{$user->ukey}}</dd>
                    <dd>A chave de usuário é utilizada para envio e recuperação de dados na API</dd>
                </dl>
                <span></span>
            </div>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
@endsection