<!DOCTYPE html>
<html>
<head>
    <title>Projeto Visão Ambiental</title>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat" />
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="container">                       
                <img class="profile-image img-responsive pull-left" src="/assets/images/logo-2.png" alt="Projeto Ambiental Sustentavel" />
                <div class="profile-content pull-left">
                    <h1 class="name">Projeto</h1>
                    <h2 class="desc">Visão Ambiental</h2>   
                    <ul class="social list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>                   
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li> 
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                
                    </ul> 
                </div>
                <a class="btn btn-success pull-right" href="{{ url('search') }}"><i class="fa fa-graduation-cap"></i> Portal Aluno/Professor</a>             
            </div>

        </header>
        <div class="menu">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Página Inicial</a></li>
                                <li><a href="/noticias">Notícias</a></li>
                                <li><a href="/publicacoes">Publicações</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/oprojeto">O Projeto</a></li>
                                        <li><a href="/colaboradores">Colaboradores</a></li>
                                        <li><a href="/parceiros">Parceiros</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Veja mais...</li>
                                        <li><a href="#">Contato</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="{{ url('register')}}">Registrar</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')


            <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h1 class="name">Projeto</h1>
                    <h2 class="desc">Visão Ambiental</h2> 
                    <p>Esta página foi criada com o objetivo de promover a conscientização da visão ambiental de sustentabilidade, divulgando políticas que visem a conservação do meio ambiente e a sustentabilidade de projetos econômicos de qualquer natureza.</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="/">Página Inicial</a></li>
                            <li><a href="/noticias">Notícias</a></li>
                            <li><a href="/publicacoes">Publicações</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="/oprojeto">O Projeto</a></li>
                            <li><a href="/colaboradores">Colaboradores</a></li>
                            <li><a href="/parceiros">Parceiros</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Redes Sociais</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <small class="copyright">Todos os direitos reservados - 2017 Projeto Visão Ambiental <i class="fa fa-heart"></i></small>
        </div>
    </footer>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel();
</script>
</body>
</html>