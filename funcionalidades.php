<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Funcionalidades</title>
  </head>
  <body>
      <div class="inicio">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #383838;">
            <a class="navbar-brand" href="index.php"><img src="Academia_site1.jpg" height="85px" href="index.php"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link mb-3 ml-3" href="index.php">INICIO<span class="sr-only">(Página
                                atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-3 ml-3" href="sobre.php">SOBRE</a>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-warning mb-3 ml-3" href="funcionalidades.php">FUNCIONALIDADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-3 ml-3" href="Personal_tela.php">PERSONAIS</a>
                    </li>
                    <li class="justify-content-center">
                        <a href="Cadastrar.php" class="nav-link mb-3 ml-3" href="#" role="button">CADASTRO</a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link mb-3 ml-3" href="#" role="button" data-toggle="modal"
                            data-target="#ExemploModalCentralizado">LOGIN</a>
                    </li>
                    <nav class="nav-link mb-3 ml-3">
                        <a class="navbar-brand" href="https://www.instagram.com/gymoficialapp/">
                            <img src="imagem/instagram-logo.svg"
                                width="30" height="30" alt="Instagram">
                        </a>
                    </nav>
                </ul>
          </nav>
      </div>
      </nav>
        <h2 class="d-flex justify-content-center">Preguiça aqui? Nunca mais!</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!--as imagens estao tremulas-->
                <div class="carousel-item active">
                <img class="d-block w-100" src="imagem\Treino.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagem\incentivo.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="imagem\encontre.jpg" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <h2 class="d-flex justify-content-center">E MUITO MAIS...</h2>

         <!-- Modal -->
         <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
         aria-labelledby="TituloModalCentralizado" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <form class="form-group" action="autenticar_usuario.php" method="POST">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                             placeholder="Informe seu E-mail: ">
                         <small id="email" class="form-text text-muted"></small>

                         <div class="form-group">
                             <label for="senha">Senha</label>
                             <input type="password" class="form-control" id="senha" name="senha"
                                 placeholder="Informe sua senha:">
                         </div>
                         <button type="submit" class="btn btn-warning">Enviar</button>
                         <a class="btn btn-warning" href="Cadastrar.php">Registre-se</a>
                     </form>
                 </div>
             </div>
         </div>
     </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>