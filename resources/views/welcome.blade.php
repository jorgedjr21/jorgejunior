
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mirchu team make this design. mirchu web and technology blog">
    <meta name="author" content="Waqas Hussain">
    <link rel="icon" href="{{secure_asset("assets/icons/favicon.ico")}}">
    <title>Jorge Junior - Página Pessoal</title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{elixir('css/all.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{secure_asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{secure_asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Fixed navbar -->
<div class="navbar main-menu navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="" title="MaterialStrap"><img src="{{secure_asset('build/images/JJ.png')}}" alt="logo" title="MaterialStrap" /></a> </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" id="menu">
                <li><a data-scroll data-options="easing: easeOutQuart" href="#banner">Home</a></li>
                <li><a data-scroll data-options="easing: easeOutQuart" href="#mywork">My Work</a></li>
                <li><a data-scroll data-options="easing: easeOutQuart" href="#about">About</a></li>
                <li><a data-scroll data-options="easing: easeOutQuart" href="#skills">Skills</a></li>
                <!--<li><a data-scroll data-options="easing: easeOutQuart" href="#contact">Contact</a></li>-->
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<section id="banner" class="section">
    <div class="container">
        <div class="intro">
            <h1 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s"><i class="mdicon location-history"></i></h1>
            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1.0s">Olá, sou Jorge <span>Junior</span></h2>
            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1.2s">Desenvolvedor Web e Empreendedor, com experiência em php</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Carousel -->
</section>

<section id="mywork" class="section">
    <div class="container">
        <div class="row">
            <h2 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">My Work</h2>
            <div class="portfolio-grid">
                <div class="col-md-4 col-sm-6 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="#" data-target="#portfolio1" class="thumbnail hcaption">
                        <img src="{{secure_asset('build/images/logo_guimo_black320.png')}}" alt="Guimo" title="Guimo" />
                    </a>
                    <div id="portfolio1" class="hide-none hover-text">
                        <h5>Guimo</h5>
                        <p>Web Developer/Co-Founder</p>
                        <a class="nivo-light" data-lightbox-gallery="portfolio" href="http://guimo.toys" target="_blank" title="Guimo">
                            <i class="mdicon fullscreen"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="portfolio-grid">
                <div class="col-md-4 col-sm-6 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                    <a href="#" data-target="#portfolio2" class="thumbnail hcaption">
                        <img src="{{secure_asset('build/images/tclogofw.png')}}" alt="Track&Care" title="Track&Care" />
                    </a>
                    <div id="portfolio2" class="hide-none hover-text">
                        <h5>Track&Care</h5>
                        <p>Web Developer/IoT</p>
                        <a class="nivo-light" data-lightbox-gallery="portfolio" href="http://trackncare.tk" target="_blank" title="T&C">
                            <i class="mdicon fullscreen"></i>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<section id="about">
    <div class="sectionIcon wow bounceIn" data-wow-duration="0.8s" data-wow-delay="1s"><i class="fa fa-angle-down"></i></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">

                <h2 class="heading">About</h2>
                <div class="col-md-6">
                    <p class="text-left">
                        Olá novamente! Sou Jorge, estudente de Ciência da Computação na Universidade Federal de Itajubá (UNIFEI) e desenvolvedor web com experiência em desenvolvimento com PHP. Atualmente sou desenvolvedor na Startup
                        <a href="http://guimo.toys" target="_blank">Guimo</a>, um brinquedo inteligente mas que também ensina.Agradeço pela visita!
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-left">
                        Minha jornada como desenvolvedor começou em 2011, quando comecei a estudar Ciência da Computação. Na Universidade, participei de 2 Hackathons, ficando em 2º em uma oportunidade e 4º na outra. Já fiz dois estágios de férias através do programa Ninja Startup Job, do Centro de Empreendedorismo da Unifei.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="parallax-1" class="bgParallax" data-speed="15">
    <div class="color-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <h2 class="heading">CoFounder @ Guimo</h2>
                    <a href="http://guimo.toys" target="_blank" class="btn line-btn btn-lg">Conheça o Guimo!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="container">
        <h2 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">Skills</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-success wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        75% PHP
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.0s" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        70% jQuery
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.2s" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        60% Laravel 5
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.4s" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                        70% MySQL
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-success wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                        30% Angular Js
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.1s" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                        25% Android
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.3s" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        75% Bootstrap
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1.5s" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                        75% HTML5
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--<section id="contact">
    <div class="container">
        <div class="row">
            <h2 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">Contact</h2>
            <div class="col-md-12">
                <form role="form" id="contact-form" class="contact-form">
                    <div class="row">
                        <div class="col-md-6 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="form-group">
                                <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn main-btn pull-right wow bounceIn" data-wow-duration="1s" data-wow-delay="1s">Send a message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>-->
<section id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">Location</h4>
                <address class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                    <strong>Jorge Junior</strong><br>
                    Itajubá, MG, Brasil<br>
                </address>
                <address class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                    <abbr title="Phone">P:</abbr> +55 35 99162-8045 <wbr>
                    <br>
                    <a href="mailto:#">jorgejunior@guimo.toys</a>
                </address>
            </div>
            <div class="col-md-4">
                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">Social Circle</h4>
                <div class="clearfix"></div>
                <ul class="list-inline social">
                    <li class="wow bounceIn" data-wow-duration="1.0s" data-wow-delay="0.8s"><a href="https://www.facebook.com/jorgejd.21" target="_blank" class="fb"><i class="mdicon facebook"></i></a></li>
                    <!--<li class="wow bounceIn" data-wow-duration="1.0s" data-wow-delay="1.0s"><a href="https://twitter.com/mirchu_net" class="twt"><i class="mdicon twitter"></i></a></li>-->
                    <!--<li class="wow bounceIn" data-wow-duration="1.0s" data-wow-delay="1.2s"><a href="https://plus.google.com/+MirchuNet" class="dr"><i class="mdicon google-plus-fill"></i></a></li>-->
                    <li class="wow bounceIn" data-wow-duration="1.0s" data-wow-delay="1.4s"><a href="https://www.linkedin.com/in/jorgejd21" target="_blank" class="be"><i class="mdicon linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">"Cada sonho que você deixa pra trás, é um pedaço do seu futuro que deixa de existir."</h4>
                <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">Steve Jobs</p>
            </div>
        </div>
    </div>
</section>
<a href="#" class="back-to-top"><i class="mdicon up"></i></a>

<!-- Bootstrap core JavaScript
    ================================================== -->
<script src="{{elixir('js/all.js')}}"></script>
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>