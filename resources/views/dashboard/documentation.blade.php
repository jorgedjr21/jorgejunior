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
                        <li>Dispositivos</li>
                        <ul><li>
                                <a href="#getDevices" id="getDevices">Como funciona a visualização dos dispositivos?</a>
                            </li>
                            <li><a href="#createDevice" id="CreateDevice">Criando Dispositivos com a API.</a></li>
                            <li><a href="#removeDevice" id="removeDevice">Removendo Dispositivos com a API</a></li>
                            <li><a href="#updateDevice" id="updateDevice">Atualizar dados do Dispositivo com a API</a></li>
                        </ul>
                        <li>Transmissão de dados</li>
                        <ul>
                            <li><a href="#whatisstream" id="whatisstream">O que é transmissão de dados?</a></li>
                            <li><a href="#testapi" id="testapi">Existe alguma maneira de testar as rotas e a api?</a></li>
                            <li><a href="#sendStream" id="sendStream">Fazendo a transmissão de um dado.</a></li>
                            <li><a href="#getStream" id="getStream">Como recupero os dados transmitidos?</a></li>
                        </ul>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">

        <div class="row">
            <div class="col-lg-12">
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

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-question-circle"></i>
                        <h3 class="box-title"><a href="#whatisstream" id="whatisstream">O que é transmissão de dados?</a></h3>
                    </div>
                    <div class="box-body">
                        A api funciona através do conceito de transmissão de dados, onde o usuário é responsável por transmitir e receber um dado. A transmissão consiste no envio e recebimento de um dado através de rotas. Vale ressaltar que não é possivel editar ou deletar um dado após ele ser transmitido.
                        Além disso, é possivel criar, editar, remover e visualizar dispositivos.
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#createDevice" id="CreateDevice">Criando Dispositivos com a API</a></h3>
                    </div>
                    <div class="box-body">
                        <p>Para criar um dispositivo, é necessário fazer uma requisição para a seguinte rota: <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>POST </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.createdevice',['ukey'=>':chavedeusuario']) !!}</i></p>
                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd><i>name</i> - nome do dispositivo (OBRIGATÓRIO)</dd>
                            <dd><i>description</i> - descrição do dispositivo (OPCIONAL)</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo os dados do dispositivo criado ou uma mensagem caso algum <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
    "device": {
        "name": "Arduino 3",
        "description": "Teste",
        "dkey": "Zc0ezGVCIQrI6wpXBi5dLF6aQ3hgu2qwJcyuHmijjESULfDbXISs6lNtFP3h",
        "updated_at": "2016-08-08 22:18:07",
        "created_at": "2016-08-08 22:18:07"
    }
}
                        </pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#updateDevice" id="updateDevice">Atualizar dados do Dispositivo com a API</a></h3>
                    </div>
                    <div class="box-body">
                        <p>Para atualizar os dados de um dispositivo, é necessário fazer uma requisição para a seguinte rota: <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>PUT </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.editdevice',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i></p>
                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd><i>name</i> - nome do dispositivo (OBRIGATÓRIO)</dd>
                            <dd><i>description</i> - descrição do dispositivo (OPCIONAL)</dd>
                            <dt>OBS</dt>
                            <dd>os dados devem ser enviados através do formato <i>x-www-form-urlencoded</i> para serem recebidos com sucesso</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através das requisições na api</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo os dados do dispositivo criado ou uma mensagem caso algum <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
    "device": {
        "name": "Arduino 3",
        "description": "Teste",
        "dkey": "Zc0ezGVCIQrI6wpXBi5dLF6aQ3hgu2qwJcyuHmijjESULfDbXISs6lNtFP3h",
        "updated_at": "2016-08-08 22:18:07",
        "created_at": "2016-08-08 22:18:07"
    }
}
                        </pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#removeDevice" id="removeDevice">Removendo Dispositivos com a API</a></h3>
                    </div>
                    <div class="box-body">
                        <p>Para remover um dispositivo, é necessário fazer uma requisição para a seguinte rota: <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>DELETE </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.deletedevice',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i><br>
                            <small class="text-warning">Caso hajam dados já transmitidos por um dispositivo, não será possivel exclui-lo</small></p>

                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd>não há</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através das requisições na api</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo mensagem de sucesso ou não caso algum <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
    "message": "Dispositivo Excluido",
    "status_code": "200"
}
                        </pre>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#getStream" id="getStream">Como recupero os dados transmitidos?</a></h3>
                    </div>
                    <div class="box-body">
                        <p>É possivel recuperar os dados transmitidos de duas maneiras: </p>
                        <p><strong>Recuperar todos os dados transmitidos:</strong> para isso, basta fazer uma requisição para a seguinte rota.</strong> <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>GET </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.devicestream',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i><br></p>

                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd>não há</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através das requisições na api</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo todos as transmissões realizadas por este dispositivo ou mensagem, caso algum erro ocorra <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
  "streams": [
    {
      "data": "{\"a\":1,\"b\":2,\"c\":3,\"d\":4,\"e\":5}",
      "created_at": "2016-08-04 22:32:38",
      "updated_at": "2016-08-04 22:32:38"
    },
    {
      "data": "{\"teste\":\"testando\"}",
      "created_at": "2016-08-04 22:32:53",
      "updated_at": "2016-08-04 22:32:53"
    }
  ]
}
                        </pre>
                        <hr>
                        <p><strong>Recuperar o último dado transmitido:</strong> para isso, basta fazer uma requisição para a seguinte rota.</strong> <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>GET </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.devicestreamlast',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i><br></p>

                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd>não há</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através das requisições na api</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo o ultimo dado transmitido ou uma mensagem caso algum <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
  "stream": {
    "data": "teste",
    "created_at": "2016-08-09 14:48:40",
    "updated_at": "2016-08-09 14:48:40"
  }
}
                        </pre>


                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

            <div class="col-lg-12">
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

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-question-circle"></i>
                        <h3 class="box-title"><a href="#testapi" id="testapi">Existe alguma maneira de testar as rotas e a api?</a></h3>
                    </div>
                    <div class="box-body">
                       <p> Sim! É Recomendado o uso de um cliente REST para testar as requisições e as rotas da api.</p>
                        <p>Para isso, você pode utilizar o <a href="https://www.getpostman.com" target="_blank">POSTMAN</a> que é um cliente gratuito e bem fácil de usar!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#getDevices" id="getDevices">Como funciona a visualização dos dispositivos?</a></h3>
                    </div>
                    <div class="box-body">
                        <p>Para <strong>visualizar</strong> todos os dispositivos criados, é necessário fazer uma requisição para a seguinte rota: <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>GET </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.devices',['ukey'=>':chavedeusuario']) !!}</i></p>
                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd>não há</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo o usuário e seus dispositivos ou uma mensagem caso algum <span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
    "user": {
        "name": "Jorge David",
        "email": "jorgedjr21@gmail.com",
        "ukey": "5llt9a4ArBxcxdbc9J8Ps8AfGV1qLLWVPXAzMMAcjFIh0qGNH4oYSJkWRfpE",
        "created_at": "2016-07-31 21:06:27",
        "updated_at": "2016-08-05 01:13:28",
        "country": {
            "name": "Brasil",
            "code": "BR"
        },
        "devices": [
            {
                "name": "Arduino 2",
                "dkey": "gr5IaVzO6JKZfbpao82cJCk5M6MeQrNW2qt5LmCgyFaqfor6SdLhntg8mLKc",
                "description": "adasd",
                "created_at": "2016-07-31 21:07:58",
                "updated_at": "2016-07-31 21:07:58"
            },
            {
                "name": "Teste2",
                "dkey": "L4JSysAuJRoH213FOFycBfpvKTj6kOx1AN0QETU8DCPj8XReAioy7giql5gE",
                "description": "Testando Descrição",
                "created_at": "2016-08-06 06:05:13",
                "updated_at": "2016-08-06 06:20:13"
            }
        ]
    }
}</pre>
                        <hr>
                        <p>Para <strong>visualizar um</strong> dispositivo em especifico, é necessário fazer uma requisição para a seguinte rota</p>
                        <p class="lead text-center text-info"><i><strong>GET </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.device',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i></p>
                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd>não há</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através da requisição anterior</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo o dispositivo e o usuário que criou este dispositivo</dd>
                        </dl>
                        <pre>
                            {
    "device": {
        "name": "Teste2",
        "dkey": "L4JSysAuJRoH213FOFycBfpvKTj6kOx1AN0QETU8DCPj8XReAioy7giql5gE",
        "description": "Testando Descrição",
        "created_at": "2016-08-06 06:05:13",
        "updated_at": "2016-08-06 06:20:13",
        "user": {
            "name": "Jorge David",
            "email": "jorgedjr21@gmail.com",
            "ukey": "5llt9a4ArBxcxdbc9J8Ps8AfGV1qLLWVPXAzMMAcjFIh0qGNH4oYSJkWRfpE",
            "created_at": "2016-07-31 21:06:27",
            "updated_at": "2016-08-05 01:13:28"
        }
    }
}
                        </pre>

                        <p>Os metodos HTTP necessários para fazer a requisição estão em <strong>negrito</strong> antes da rota!</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <i class="fa fa-hdd-o"></i>
                        <h3 class="box-title"><a href="#sendStream" id="sendStream">Fazendo a transmissão de um dado.</a></h3>
                    </div>
                    <div class="box-body">
                        <p>Para fazer a transmissão de dados, é necessário fazer uma requisição para a seguinte rota: <small class="text-danger">é necessário atentar ao método HTTP utilizado</small></p>
                        <p class="lead text-center text-info"><i><strong>POST </strong>{!! app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.devicesavestream',['ukey'=>':chavedeusuario','dkey'=>':chavededispositivo']) !!}</i></p>
                        <dl class="dl-horizontal">
                            <dt>Parâmetros: </dt>
                            <dd><i>data</i> - Dados a serem transmitidos</dd>
                            <dt>Obs</dt>
                            <dd>Não existe restrição há formato para o dado enviado, pode ser um json contendo vários dados ou um único dado inteiro, por exemplo!</dd>
                            <dt>Parâmetros de URL:</dt>
                            <dd><i>:chavedeusuário</i> - chave de usuário disponível através de sua página de perfil</dd>
                            <dd><i>:chavedodispositivo</i> - chave do dispositivo em questão, que pode ser encontrada na página de dispositivos do usuário ou através da requisição anterior</dd>
                            <dt>Retorna</dt>
                            <dd>json contendo os dados transmitidos ou uma mensagem caso algum<span class="text-danger">erro ocorra.</span></dd>
                        </dl>
                        <pre>{
  "stream": {
    "data": "teste",
    "updated_at": "2016-08-09 14:48:40",
    "created_at": "2016-08-09 14:48:40"
  }
}
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- /.content -->
@endsection