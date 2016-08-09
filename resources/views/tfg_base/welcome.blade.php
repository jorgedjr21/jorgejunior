
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TFG UNIFEI CCO - API RESFTUL">
    <meta name="author" content="Jorge David">
    <link rel="icon" href="{{asset("assets/icons/favicon.ico")}}">
    <title>Jorge Junior - Página Pessoal</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{elixir('css/all.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<style>
    /* Move down content because we have a fixed navbar that is 50px tall */
    body {
        padding-top: 50px;
        padding-bottom: 20px;
    }
</style>
<body>
<!-- Fixed navbar -->
<div class="navbar main-menu navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="">API TFG</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" id="menu">
                <li><a href="{{url('/')}}">Home</a></li>
                @if(is_null($user))
                    <li><a href="{{route('user.registerpage')}}">Registrar</a></li>
                    <li><a href="{{route('user.loginpage')}}">Login</a></li>
                    @else
                    <li><a href="{{route('user.profile')}}">{{$user->name}}</a></li>
                    <li><a href="{{route('user.logout')}}">Sair</a></li>
                    @endif
                <!--<li><a data-scroll data-options="easing: easeOutQuart" href="#contact">Contact</a></li>-->
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>API RESTFUL</h1>
        @if(is_null($user))
        <p>Bem vindo a API RESTFUL desenvolvida. Para acessa-la, basta fazer o login ou registrar-se.</p>
        <p><a class="btn btn-primary btn-lg" href="{{route('user.registerpage')}}" role="button">Registrar</a></p>
            @else
            <p>Bem vindo a API RESTFUL desenvolvida. Acesse sua página e comesse a utilizar a api agora mesmo.</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('user.dashboard')}}" role="button">Acesse já</a></p>
        @endif
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Documentação</h2>
            @if(is_null($user))
            <p>A documentação está disponível na área do usuário. Para acessa-la, é necessário fazer o login ou registrar-se.</p>
                @else
            <p>A documentação está disponivel neste <a href="{{route('user.docs')}}">link</a></p>
            @endif
        </div>
        <div class="col-md-4">
            <h2>Criado por</h2>
            <p class="lead">Jorge Junior</p>
            <p>jorgedjr21@gmail.com</p>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
<script src="{{elixir('js/all.js')}}"></script>
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>