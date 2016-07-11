
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mirchu team make this design. mirchu web and technology blog">
    <meta name="author" content="Waqas Hussain">
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
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
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

<a href="#" class="back-to-top"><i class="mdicon up"></i></a>

<!-- Bootstrap core JavaScript
    ================================================== -->
<script src="{{elixir('js/all.js')}}"></script>
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>