<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gym.css">
    <style type="text/css">
        body{
            background-color: #383838;
        }
    </style>

    <title>Cadastro</title>
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
                    <li class="nav-item">
                        <a class="nav-link mb-3 ml-3" href="funcionalidades.php">FUNCIONALIDADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-3 ml-3" href="Personal_tela.php">PERSONAIS</a>
                    </li>
                    <li class="justify-content-center">
                        <a href="Cadastrar.php" class="btn btn-warning mb-3 ml-3" href="#" role="button">CADASTRO</a>
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
    <div class="row">
        <div class="col-lg-6 bg-white">
            <!--my é margem para todos os lados. o 5 é quantidade que de espaçamento -->
            <!--distancia entre os objetos-->
            <form action="enviar.php" method="POST" class="container my-5 px-5">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required="required"
                        placeholder="Informe seu nome completo: ">
                </div>
                <div class="form-group">
                    <label for="dataNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="datadeNascimento" id="datadeNascimento"
                        placeholder="Informe sua data de nascimento: ">
                </div>
                <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" id="cpf" placeholder="Informe o seu endereço: ">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" required="required"
                        placeholder="Informe seu E-mail: ">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" required="required"
                        placeholder="Informe uma senha: ">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contato">Contato</label>
                    <input type="text" class="form-control" name="contato" id="contato" placeholder="Informe o seu contato: ">
                </div>
                <label for="genero">Genero</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="m" value="M" checked>
                    <label class="form-check-label" for="m">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" id="f" value="F">
                    <label class="form-check-label" for="f">
                        Feminino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="p" value="P">
                    <label class="form-check-label" for="p">
                        Personal
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" id="c" value="C" checked>
                    <label class="form-check-label" for="c">
                        Cliente
                    </label>
                </div>
                <div id="cliente" class="hidden">
                    <div class="form-group">
                        <label for="informacoes">Informações</label>
                        <textarea class="form-control" name="informacoes" id="informacoes"
                            placeholder="Deixe aqui algumas informações para seu personal trainer, caso deseje aderir: "
                            rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" name="peso" id="peso" placeholder="Informe seu peso: ">
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura</label>
                        <input type="text" class="form-control" name="altura" id="altura"
                            placeholder="Informe sua altura: ">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Informe o seu CPF: ">
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-warning">Cadastrar</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 d-none d-lg-block mt-4">
          <img class="logo" src="imagem\Academia_site.jpg" alt="Logo GYM">
        </div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>