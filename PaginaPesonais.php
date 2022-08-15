<!DOCTYPE html>
<?php
    require_once('Academia.php');
    $academia = Academia::desserializar();                
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    
    body{
        background-color:#383838;
    }

    </style>
    <title>Area do Personal</title>
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
                <li class="nav-item">
                    <a class="btn btn-warning mb-3 ml-3" href="#">ALUNOS</a>
                </li>
                <li class="justify-content-center">
                    <a href="sair.php" class="nav-link mb-3 ml-3" href="#" role="button">LOGOUT</a>
                </li>
                <nav class="nav-link mb-3 ml-3">
                    <a class="navbar-brand" href="https://www.instagram.com/gymoficialapp/">
                        <img src="imagem/instagram-logo.svg"
                            width="30" height="30" alt="Instagram">
                    </a>
                </nav>
            </ul>
        </nav>
        <div class="col-md-8 bg-dark offset-md-2">
            <div class="card">
                <div class="card-header">
                    Alunos
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Peso</th>
                                <th>Altura</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($academia->getUsuarios() as $key => $value) {
                                if($value instanceof Cliente){
                        ?>
                            <tr>
                                <td><?=$value->getNome()?></td>
                                <td><?=$value->getPeso()?></td>
                                <td><?=$value->getAltura()?></td>
                                <td><button class="btn btn-outline-warning detalhar" data-valor="<?=$key?>" data-toggle="modal" data-target="#ModalDetalhar">Ver treino</button></td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <div class="modal fade" id="ModalDetalhar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Treinos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.detalhar').click(function(){
                var key = $(this).data('valor');
                $.get('detalhar.php?u='+key, function(data){
                    $('.modal-body').html(data);
                }, 'text');
            });
            $('.excluir').click(function(){
                $.get('remover.php?key='+key, function(data){
                }, 'text');
            })
        });
    </script>
  </body>
</html>