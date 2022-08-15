<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: #383838;
        }
    </style>

    <title>Adicione Um treino</title>
  </head>
  <body>
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
            <li class="nav-item active">
                <a class="btn btn-warning mb-3 ml-3" href="#">ADICIONAR TREINO</a>
            </li>
            <nav class="nav-link mb-3 ml-3">
                <a class="navbar-brand" href="https://www.instagram.com/p/B45nQoanUAI/">
                    <img src="imagem/instagram-logo.svg"
                        width="30" height="30" alt="Instagram">
                </a>
            </nav>
        </ul>
    </nav>
    <div class ="card col-md-6 offset-md-3">
        <div class="card-header container my-3 px-3">
            Adicione um treino
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="Salvar_treino.php?u=<?=$_GET['u']?>" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" required="required" placeholder="Informe o nome do treino">
                        </div>
                        <div class="form-group">
                            <label for="equipamento">Nome do equipamento</label>
                            <input type="text" class="form-control" name="equipamento" id="equipamento" required="required" placeholder="Informe o equipamento que será usado">
                        </div>
                        <div class="form-group">
                            <label for="serie">Serie</label>
                            <input type="text" class="form-control" name="serie" id="serie" required="required" placeholder="Informe as repetições">
                        </div>
                        <div class="form-group">
                            <label for="tempoDescanco">Tempo de descanço</label>
                            <input type="text" class="form-control" name="tempoDescanco" id="tempoDescanco" required="required" placeholder="Informe o tempo de descanço">
                        </div>
                        <div class="form-group">
                            <label for="dias">Dias</label>
                            <div>
                                <p>
                                    <input type="checkbox" name="domingo" value="true">
                                    <label>Domingo</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="segunda" value="true">
                                    <label>Segunda</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="terca" value="true">
                                    <label>Terça</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="quarta" value="true">
                                    <label>Quarta</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="quinta" value="true">
                                    <label>Quinta</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="sexta" value="true">
                                    <label>Sexta</label>
                                </p>
                                <p>
                                    <input type="checkbox" name="sabado" value="true">
                                    <label>Sabado</label>
                                </p>
                            </div>
                        </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-warning">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>