<!DOCTYPE html>
<html lan="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>
        <!-- Fontes -->
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>


    </head>
    <body>
        <div class="container-fluid">
            <header class="jumbotron text-center" id="topo">
                <h1>SENAI/SC Brusque</h1>

            <?php include 'formCadastro.php' ?>

            </header>

            <!-- Barra de Navegação -->

            <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="250">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">SENAI</a>
                    </div>
                    <div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="#inicio">Início</a></li>
                                <li><a href="#cursos">Cursos</a></li>
                                <li><a href="#noticias">Notícias</a></li>
                                <li><a href="#fotos">Fotos</a></li>
                                <li><a href="#videos">Vídeos</a></li>
                                <li><a href="#contato">Contato</a></li>
                                <li><a href="#local">Localização</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>    
            <!-- Fim da Barra de Navegação -->

            <section id="inicio" class="container-fluid">

                <!-- Carrossel de imagens -->
                <div clas="row">                
                    <!--
                    Uma linha dividida em 12 colunas, sendo uma coluna central
                    tamanho 8 e um distanciamento de 2
                    
                    Sistema de Grid no Bootstrap
                    http://www.w3schools.com/bootstrap/bootstrap_grid_examples.asp
                    -->
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval="2000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="http://www.fiero.org.br/ArquivosUpload/noticias/3/LOGO%20NOVA%20IMMA%20E%20SENAI%20PROJETO%20GUAPOR%C3%89%204.jpg" alt="Chania">
                                </div>

                                <div class="item">
                                    <img src="http://ielsc.org.br/sites/default/files/senai_iel.jpg" alt="Chania">
                                </div>

                                <div class="item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRJxm0NDYscV0GVCRLrwj6bJXu8M_q2oBYyUjVEWDyFuseRTjMKw" alt="Flower">
                                </div>

                                <div class="item">
                                    <img src="http://www.manutencaoesuprimentos.com.br/imagens/senai-rj-tem-3795-vagas-para-cursos-tecnicos-gratuitos.jpg" alt="Flower">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div> <!-- row -->
                <!-- fim do carrossel de imagens -->
                <!-- CURSOS -->
            </section>
            
            
            <!-- Cursos -->
                <?php include 'cursos.php'?>
            
            <!-- Noticias -->
            <section id="noticias" class="container-fluid">

<?php 
include 'postagens/menu.php';

$posts = DBRead('posts', "WHERE status = 1 ORDER BY data DESC");

if (!$posts)
    echo '<h2>Nenhuma postagem encontrada!</h2>';
else
    foreach ($posts as $post):/*
        $categ = DBRead('categorias', "WHERE id = '" . $post['categoria'] . "'");
        $categ = ( $categ ) ? $categ[0]['titulo'] : 'SEM CATEGORIA';
        ?>

                <h2>
                    <a href="single.php?id=<?php echo $post['id']; ?>" title="<?php echo $post['titulo']; ?>">
        <?php echo $post['titulo']; ?>
                    </a>
                </h2>
                <p>
                    por <b><?php echo $post['autor']; ?></b>
                    em <b><?php echo date('d/m/Y', strtotime($post['data'])) ?></b> |
                    <b><?php echo $categ; ?></b> |
                    Visitas <b><?php echo $post['visitas']; ?></b>
                </p>

                <p>
        <?php
        $str = strip_tags($post['conteudo']);
        $len = strlen($str);
        $max = 500;

        if ($len <= $max)
            echo $str;
        else
            echo substr($str, 0, $max) . '...';
        */?>
                </p>
                <hr>
 
 
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p><h4>
                            <a href="single.php?id=<?php echo $post['id']; ?>" title="<?php echo $post['titulo']; ?>">
                            <?php echo $post['titulo']; ?>
                            </a></h4></p>
                        <p><h6>
                            <?php
                            $str = strip_tags($post['conteudo']);
                            $len = strlen($str);
                            $max = 500;

                            if ($len <= $max)
                                echo $str;
                            else
                                echo substr($str, 0, $max) . '...';
                            ?>
                        </h6></p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><h5 class="h5">Mais informações</h5></button>
                    </div>
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">
                                    <a href="single.php?id=<?php echo $post['id']; ?>" title="<?php echo $post['titulo']; ?>">
                            <?php echo $post['titulo']; ?>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <p>
                            <?php
                            $str = strip_tags($post['conteudo']);
                            $len = strlen($str);
                            $max = 500;

                            if ($len <= $max)
                                echo $str;
                            else
                                echo substr($str, 0, $max) . '...';
                            ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>               
            <?php endforeach; ?>
            </section>

            <section id="fotos" class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <h1 class="page-header">Galeria De Fotos</h1>
                    </div>

                    <div class="col-lg-3 col-md-5 col-xs-1 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail" href="#">
                            <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                        </a>
                    </div>


            </section>
            <section id="videos" class="container-fluid">
                <div class="text-center">
                    <h1>Galeria Vídeos</h1>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLXTxMOByxQKOZcxIvbgx_93ItPjnbqYIk" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
            <!-- Contato -->
            <?php include 'formContato.php'; ?>

            <!-- Localização -->
            <section id="local" class="container-fluid">
                <div class="text-center">
                    <h1>Localização</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d5972.578301415663!2d-48.91459628134629!3d-27.11484556231412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94df47b2050e1221%3A0xb0ebeaaf853b447!2sAv.+Primeiro+de+Maio%2C+670+-+Primeiro+de+Maio%2C+Brusque+-+SC%2C+88353-202!3m2!1d-27.1156975!2d-48.910202!5e0!3m2!1spt-BR!2sbr!4v1447800510027" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </section>

            <!-- Javascript -->
            <script src="js/jquery-1.11.3.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/meuscript.js"></script>
            <script src="js/validator.js"></script>
            <script src="js/meuscript.js"></script>
            <script src="js/formScript.js"></script>
            <script src="js/cadastroScript.js"></script>
            <script src="js/curso.js"></script>

    </body>
</html>