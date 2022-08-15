<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="https://meyerweb.com/eric/tools/css/reset/reset200802.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
        background-color: #373737;
    }
    </style>
    <title>GYM</title>
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
                        <li class="nav-item active">
                            <a class="btn btn-warning mb-3 ml-3" href="index.php">INICIO<span class="sr-only">(Página
                                    atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-3 ml-3" href="sobre.php">SOBRE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-3 ml-3" href="funcionalidades.php">FUNCIONALIDADES</a>
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

    </div>

    <div class=" col-lg-12 d-none d-lg-block mt-4" style="padding: 0;">
        <img src="imagem\background.jpg" alt="GYM background" style="width:100%; height:100%;">
    </div>

    <div class=".img-fluid d-lg-none">
        <img src="imagem\background_mobile.jpg" alt="GYM background" style="width:110%; height:100vh;">
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div>
</body>

</html>