<!DOCTYPE html>
<html lan="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Site Institucional do SENAI - Brusque</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/meuscript.js"></script>

    </head>
    <body>
        <div class="container-fluid">
            <header class="jumbotron text-center" id="topo">
                <h1>SENAI/SC Brusque</h1>
                <p>Alo mundo do bootstrap</p>
                
            <form role="form" class="form-inline">
                <!-- Gerador de Bootstrap Form 
                     http://embed.plnkr.co/ZrnnkFR3Yv9HGQHrRMiW/preview -->
                <!-- Em caso de sucesso na validação: <div class="form-group has-feedback has-success"> -->
                <!-- Em caso de falha na validação: <div class="form-group has-feedback has-error"> -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="seunome@provedor.com.br" size="40px"/>
                    <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
                </div>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
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
                                <img src="img/saiba_mais_sobre_o_senai.png" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Chania">
                            </div>

                            <div class="item">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Flower">
                            </div>

                            <div class="item">
                                <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=460%C3%97365&w=460&h=365" alt="Flower">
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
        </section>
        <section id="cursos" class="container-fluid">
            <h1>Cursos</h1>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Curso 1</p>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</button>
                    </div>
                </div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Curso 1</h4>
      </div>
      <div class="modal-body">
        <p>Curso 1.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>
            </div>
            
            
            
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Curso 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Curso 3</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>Curso 4</p>
                    </div>
                </div>
            </div>



        </section>
        <section id="noticias" class="container-fluid">
            <h1>Notícias</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </section>
        <section id="fotos" class="container-fluid">
            <h1>Fotos</h1>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://ichef-1.bbci.co.uk/news/ws/624/amz/worldservice/live/assets/images/2015/04/12/150412094505_chipmunk_624x351_bbc_nocredit.jpg" class="thumbnail">
      <img img src="http://ichef-1.bbci.co.uk/news/ws/624/amz/worldservice/live/assets/images/2015/04/12/150412094505_chipmunk_624x351_bbc_nocredit.jpg" alt="Chania">
    </a>
  </div>
<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="http://www.emitir.com.br/wp-content/uploads/2013/09/lindas-imagens-Papagaio.jpg" class="thumbnail">
      <img src="http://www.emitir.com.br/wp-content/uploads/2013/09/lindas-imagens-Papagaio.jpg" alt="img2">
    </a>
  </div>
  ...
</div>
</div>
            
        </section>
        <section id="videos" class="container-fluid">
            <h1>Vídeos</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </section>
        <section id="contato" class="container-fluid">
            <h1>Contato</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </section>
        <section id="local" class="container-fluid">
            <h1>Localização</h1>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        </section>
        <script src="js/meuscript.js"></script>
    </body>
</html>