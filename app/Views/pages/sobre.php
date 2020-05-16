<!-- DEBUG-VIEW START 2 1 APPPATH/Config/../Views/pages/home_header.php -->
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" id="debugbar_loader" data-time="1589519873"
            src="http://localhost:8080/index.php?debugbar"></script>
    <script type="text/javascript" id="debugbar_dynamic_script"></script>
    <style type="text/css" id="debugbar_dynamic_style"></style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet"
          href="http://localhost:8080/tema_assets/bootstrap/css/bootstrap.min.css?h=3ad8d4903859dcd5bc61764098e977e6">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand" href="index.html">LogoMarca</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item" role="presentation"><a class="nav-link"
                                                            href="http://localhost:8080/home"><i
                                class="fa fa-home"></i>&nbspInício</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="about.html"><i
                                class="fa fa-address-card"></i>&nbspSobre nós</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html"><i
                                class="fa fa-envelope"></i>&nbspFale conosco</a></li>

                <!--  Área visivel quando está logado -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="http://localhost:8080/login">
                        <i class="fa fa-user"></i>&nbspLogin
                    </a>
                </li>
                <!--  Área visivel quando está logado -->

            </ul>
        </div>
    </div>
</nav>
<!-- DEBUG-VIEW START 1 APPPATH/Config/../Views/pages/home_header.php -->
<header class="masthead"
        style="background-image:url('http://localhost:8080/tema_assets/img/home-bg.jpg?h=ed6236475a1226b743bf65e6f1bebb34');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Site de Notícias</h1><span class="subheading">Um site em construção</span></div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row mb-2">
        <form class="form-inline d-flex list-group-horizontal justify-content-end  mt-0"
              action="http://localhost:8080/buscar#input_busca" method="get">
            <div class="input-group " id="input_busca">
                <div class="active-cyan-3 active-cyan-4 ml-3">
                    <input name="valor" class="form-control mt-2 w-100" type="text" placeholder="Search"
                           aria-label="Search">
                </div>
                <button class="btn btn-outline-primary btn-sm" type="submit">buscar</button>
            </div>
        </form>
    </div>
    <div style="font-weight: bolder" class="label mt-4 "></div>

    <div class="row">
        <div class="col-md-10 col-lg-8">
            <!-- DEBUG-VIEW ENDED 1 APPPATH/Config/../Views/pages/home_header.php -->

            <!-- DEBUG-VIEW ENDED 2 1 APPPATH/Config/../Views/pages/home_header.php -->
            <!-- DEBUG-VIEW START 5 4 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->


            <div class="clearfix float-right">
                <!-- DEBUG-VIEW START 3 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->
                <style> /*altera o link da pagina atual para negrito*/
                    .active a {
                        font-weight: bolder;
                        color: #007bff;
                    }
                </style>
                <nav aria-label="Navegação de páginas">
                    <ul class="pagination">

                        <li class="active">
                            <a class="page-link" href="http://localhost:8080/home?page=1">
                                1 </a>
                        </li>
                        <li>
                            <a class="page-link" href="http://localhost:8080/home?page=2">
                                2 </a>
                        </li>
                        <li>
                            <a class="page-link" href="http://localhost:8080/home?page=3">
                                3 </a>
                        </li>

                    </ul>
                </nav>

                <!-- DEBUG-VIEW ENDED 3 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->
            </div>


            <div class="post-preview mt-4">
                <a href="http://localhost:8080/noticias/caiado-recua-sobre-medidas-mais-rigidas-e-reclama-de-falta-de-apoio-nao-vale-a-pena-fazer-um-decreto-por-fazer">
                    <h2 class="post-title ">Caiado recua sobre medidas mais rígidas e reclama de falta de apoio: 'Não
                        vale a pena fazer um decreto por fazer'</h2>
                    <h3 style="text-align: justify"
                        class="post-subtitle"> Governador de Goiás havia dito que implantaria regras mais duras contra o
                        coronavírus, mas declinou. Ele também criticou medida de governador do DF de não receber
                        pacientes do Entorno: 'Retaliação'. ...
                    </h3>
                </a>
                <p class="post-meta">Postado por&nbsp;
                    <a href="#"> João Neto </a> em
                    <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;">14-05-2020
                        17:07 </a>
                </p>
            </div>
            <hr>
            <div class="post-preview mt-4">
                <a href="http://localhost:8080/noticias/lista-50-discos-de-rock-e-metal-sem-uma-unica-musica-fraca">
                    <h2 class="post-title ">Lista: 50 discos de rock e metal sem uma única música fraca</h2>
                    <h3 style="text-align: justify"
                        class="post-subtitle"> Uma das tarefas mais difíceis para uma banda é atingir a perfeição em
                        algum trabalho. Por mais que um disco seja maravilhoso, a chance de em algum momento uma música
                        menos brilhante surgir é grande, afinal de contas, ninguém é perfeito e até mesmo os gênios de
                        vez em quando erram a mão. ...
                    </h3>
                </a>
                <p class="post-meta">Postado por&nbsp;
                    <a href="#"> João Neto </a> em
                    <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;">14-05-2020
                        14:00 </a>
                </p>
            </div>
            <hr>
            <div class="post-preview mt-4">
                <a href="http://localhost:8080/noticias/exames-do-bozo-deram-negativo-aham">
                    <h2 class="post-title ">Exames do Bozo deram negativo, aham</h2>
                    <h3 style="text-align: justify"
                        class="post-subtitle"> Após longa novela, os três exames de detecção do novo coronavírus
                        realizados pelo presidente Jair Bolsonaro (sem partido) foram divulgados e apresentaram
                        resultados negativos. ...
                    </h3>
                </a>
                <p class="post-meta">Postado por&nbsp;
                    <a href="#"> João Neto </a> em
                    <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;">13-05-2020
                        20:25 </a>
                </p>
            </div>
            <hr>
            <div class="post-preview mt-4">
                <a href="http://localhost:8080/noticias/em-depoimento-ex-superintendente-da-pf-no-rio-diz-que-desconhece-os-motivos-para-sua-exoneracao">
                    <h2 class="post-title ">Em depoimento, ex-superintendente da PF no Rio diz que desconhece os motivos
                        para sua exoneração</h2>
                    <h3 style="text-align: justify"
                        class="post-subtitle">Ricardo Saadi foi ouvido no inquérito que apura denúncias, feitas pelo
                        ex-ministro Sergio Moro, de interferência política de Bolsonaro na Polícia Federal. ...
                    </h3>
                </a>
                <p class="post-meta">Postado por&nbsp;
                    <a href="#"> João Neto </a> em
                    <a class="disabled" style="pointer-events: none; cursor: default; text-decoration: none;">13-05-2020
                        19:52 </a>
                </p>
            </div>
            <hr>


            <div class="clearfix float-right">
                <!-- DEBUG-VIEW START 4 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->
                <style> /*altera o link da pagina atual para negrito*/
                    .active a {
                        font-weight: bolder;
                        color: #007bff;
                    }
                </style>
                <nav aria-label="Navegação de páginas">
                    <ul class="pagination">

                        <li class="active">
                            <a class="page-link" href="http://localhost:8080/home?page=1">
                                1 </a>
                        </li>
                        <li>
                            <a class="page-link" href="http://localhost:8080/home?page=2">
                                2 </a>
                        </li>
                        <li>
                            <a class="page-link" href="http://localhost:8080/home?page=3">
                                3 </a>
                        </li>

                    </ul>
                </nav>

                <!-- DEBUG-VIEW ENDED 4 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->
            </div>

        </div>
        <!--div apoiadores futuramente-->
        <!--    <div  style="border: 0.1px; border-style: outset" class="col-xl">
                <div style="background: #000000" class="flex-md-row mt-1">
                    teste
                </div>
            </div>-->
    </div>

    <!-- DEBUG-VIEW ENDED 5 4 APPPATH/Config/../Views/Pager/bootstrap_pager.php -->
    <!-- DEBUG-VIEW START 7 6 APPPATH/Config/../Views/modais/modal_confirm.php -->
    <!-- DEBUG-VIEW START 6 APPPATH/Config/../Views/modais/modal_confirm.php -->
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>-->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-sm" id="exampleModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ml-5">
                    <h1 class="ml-5"><span class="fa fa-exclamation-triangle" style="color: #ff0007"></span></h1><h5
                            class="ml-3">Deseja sair? </h5>
                </div>
                <div class="modal-footer">
                    <a href="http://localhost:8080/usuario/logout">
                        <button type="button" class="btn btn-success">Sair</button>
                    </a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DEBUG-VIEW ENDED 6 APPPATH/Config/../Views/modais/modal_confirm.php -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i
                                        class="fa fa-circle fa-stack-2x"></i><i
                                        class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Brand 2018</p>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8080/tema_assets/js/clean-blog.js?h=5c5da44b414001c67a91a5784fe4f011"></script>
</body>

</html>
<!-- DEBUG-VIEW ENDED 7 6 APPPATH/Config/../Views/modais/modal_confirm.php -->
