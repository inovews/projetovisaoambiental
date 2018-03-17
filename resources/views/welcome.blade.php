<!DOCTYPE html>
<html>
<head>
    <title>Projeto Visão Ambiental</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat" />
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="container">                       
                <img class="profile-image img-responsive pull-left" src="assets/images/logo-2.png" alt="Projeto Ambiental Sustentavel" />
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
                <a class="btn btn-success pull-right" href="#" target="_blank"><i class="fa fa-graduation-cap"></i> Portal Aluno/Professor</a>              
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
                                <li class="active"><a href="#">Página Inicial</a></li>
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
                                <li class="active"><a href="#">Registrar</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="banner-container">
            <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach($banners as $k => $banner)
                    <div class="carousel-item {{ $k == 0? 'active':'' }}">
                        <img src="{{ url('uploads/'.$banner->picture) }}" class="banner-image"/>
                        <div class="carousel-caption">
                            @if(!$banner->hide_name)
                            <h2>{!! $banner->name !!}</h2>
                            @endif
                            @if($banner->summary)
                            <p>{!! $banner->summary !!}</p>
                            @endif
                            @if($banner->action_url)
                            <a class="btn btn-primary" target="_blank" href="{{ $banner->action_url }}">{{ $banner->action_name ?: 'veja mais...' }}</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Próxima</span>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="blog-section">
                <div class="container">
                    <div class="row">
                        <div class="site-heading text-center">
                            <h3>Notícias</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua. Ut enim ad minim </p>
                            <div class="border"></div>
                        </div>
                    </div>
                    <div class="row text-center">
                        @foreach($noticias as $noticia)
                        <div class="col-sm-6 col-md-4">
                            <div class="blog-box">
                                <div class="blog-box-image">
                                    <img src="{{ url('uploads/'.$noticia->picture) }}" class="img-responsive" alt="{{ $noticia->title }}">
                                </div>
                                <div class="blog-box-content">
                                    <h4><a href="{{ route('website.noticias.show', $noticia->id) }}">{{ $noticia->title }}</a></h4>
                                    <p>{!! substr(strip_tags($noticia->content), 0, 150) !!} {{ strlen(strip_tags($noticia->content)) > 150 ? "..." : "" }}</p>
                                    <a href="{{ route('website.noticias.show', $noticia->id) }}" class="btn btn-default site-btn">Veja mais...</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row pb-3">
                    @foreach($publicacoes as $publicacoe)
                    <div class="col-md-6">
                        <div class="news">
                            <figure>
                                <a href="{{ route('website.publicacao.show', $publicacoe->id) }}">
                                    <img src="{{ url('uploads/'.$publicacoe->picture) }}" class="img-responsive" alt="{{ $publicacoe->title }}">
                                </a>
                            </figure>
                            <div class="media mt-2">
                                <div class="media-left">
                                    <div class="date bg-primary">
                                        <strong>{{ date('d', strtotime($publicacoe->created_at)) }}</strong> {{ date('M , Y', strtotime($publicacoe->created_at)) }}
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading text-primary">{{ $publicacoe->title }}</h4>
                                    <div class="text limit">
                                        <p>{!! substr(strip_tags($publicacoe->content), 0, 75) !!} {{ strlen(strip_tags($publicacoe->content)) > 75 ? "..." : "" }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel bg-light">
                    <div class="panel-body">
                        <h2 class="side-heading">Popular Links</h2>
                        <ul>
                            <li><a href="#">Notícias e Eventos</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Galerias</a></li>
                            <li><a href="#">Conteudos</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </div>
                </div>

                <aside class="panel bg-light">
                    <div class="panel-body">
                        <h2 class="side-heading">Eventos</h2>

                        <div id="news-carousel" class="carousel slide side-news" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="news carousel-item active">
                                    <figure>
                                        <a href="#">
                                            <img src="https://images.pexels.com/photos/720243/pexels-photo-720243.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
                                        </a>
                                    </figure>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="date bg-primary">
                                                <strong>24</strong> Oct 2017
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-primary">Cumque ab et.</h4>
                                            <div class="text limit">
                                                <p>Tempora error provident nisi repellat at minima. Aut modi laborum culpa. Ut dolorem quod sunt quos dolore quis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="news carousel-item ">
                                    <figure>
                                        <a href="#">
                                            <img src="http://bpocallaghan.co.za/uploads/photos/news-2-tn.jpg">
                                        </a>
                                    </figure>
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="date bg-primary">
                                                <strong>09</strong> Oct 2017
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-primary">Consequatur minima id culpa.</h4>
                                            <div class="text limit">
                                                <p>Illum culpa et qui ad. Dolores quas quia facilis quibusdam nihil quae aut.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#news-carousel" role="button" data-slide="prev">
                                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#news-carousel" role="button" data-slide="next">
                                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>


        <!--<section class="panel panel-default">
            <div class="panel-body">
                <div class="card-body">
                    <h3 class="text-primary"><i class="fa fa-newspaper-o"></i> Boletim de Notícias</h3>
                    <p>Inscreva-se no nosso boletim informativo para receber as últimas notícias do <strong>Projeto Ambiental Sustentavel</strong>.</p>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="form-group col-6 col-sm-5">
                                <label class="sr-only" for="newsletter">Seu Nome</label>
                                <input type="text" name="fullname" class="form-control d-block" placeholder="Seu Nome">
                            </div>
                            <div class="form-group col-6 col-sm-5">
                                <label class="sr-only" for="newsletter">Seu E-mail</label>
                                <input type="text" name="email" class="form-control d-block" placeholder="Seu E-mail">
                            </div>
                            <div class="form-group col-12 col-sm-2">
                                <button type="submit" class="btn btn-primary btn-block btn-ajax-submit">Inscrever-se
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>-->
    </div>

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
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel();
</script>
</body>
</html>