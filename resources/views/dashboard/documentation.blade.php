@extends('layouts/dashboard')

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Documentação
        <small>para uso da API</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{route('user.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Documentação</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-list-ol"></i>
                    <h3 class="box-title">Índice</h3>
                </div>
                <div class="box-body">
                    <ol>
                        <li>Chaves para uso da API
                            <ul>
                                <li><a href="#getUkey" id="getUkey" >Encontrando a minha <strong>Chave de Usuário</strong></a></li>
                                <li><a href="#getDkey" id="getDkey">Onde encontro a <strong>Chave do Dispositivo?</strong></a></li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="box box-solid" >
                <div class="box-header with-border">
                    <i class="fa fa-key"></i>
                    <h3 class="box-title"><a href="#getUkey" id="getUkey" >Encontrando a minha Chave de Usuário</a></h3>
                </div>
                <div class="box-body">
                    <p class="text-bold">Mas para que serve a chave de usuário?</p>
                    <p>Esta chave serve para prover mais segurança para a transmissão de dados como um todo. Ela identifica a quem pertence os dispostivos e é única, por esta razão, você deve mante-la em <strong>em segredo!</strong></p>
                    <p class="text-bold">Onde posso encontra-la?</p>
                    <p>A chave de usuário pode ser encontrada na página do seu perfil. Você pode acessar esta página através do menu superior ou por
                        <a href="{{route('user.profile')}}">aqui</a></p>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-key"></i>
                    <h3 class="box-title"><a href="#getDkey" id="getDkey">Onde encontro a chave do dispositivo?</a></h3>
                </div>
                <div class="box-body">
                    <p class="text-bold">Mas para que serve a chave do dispositivo?</p>
                    <p>A chave do dispositivo serve para identificar qual dispositivo fez a transmissão de um dado. Ela também é única para cada dispositivo e <span class="text-danger">não deve ser compartilhada</span>!</p>
                    <p class="text-bold">Onde posso encontra-la?</p>
                    <p>A chave de dispositivo pode ser encontrada diretamente na página onde são listados todos os dispositivos criados por você. Para acessa-la basta utilizar o menu lateral, ou clicar
                        <a href="{{route('device.listall')}}">aqui</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-hdd-o"></i>
                    <h3 class="box-title">Onde encontro a chave do dispositivo?</h3>
                </div>
                <div class="box-body">

                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection