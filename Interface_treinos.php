<!DOCTYPE html>
<?php
require_once('Cliente.php');
require_once('Academia.php');
require_once('Treinos.php');
session_start();
error_reporting(0);
$dias=[];
$usuario=unserialize($_SESSION['usuario']);
foreach ($usuario->getTreinos() as $key => $value) {
    $dado="";
    foreach ($value->getExercicios() as $key => $exercio) {
        $e=$exercio->listarExercicios();
        $dado.="<div class='card sp-5 mx-4 my-4'>";
        $dado.="<div class='card-body'>";
        $dado.="<h5 class='card-title'>".$e[0]."</h5>";
        $dado.="<div class='card-text'>";
        $dado.="<p>Equipamento ".$e[1]."</p>";
        $dado.="<p>Serie ".$e[2]."</p>";
        $dado.="<p>Tempo de descanso ".$e[3]."</p>";
        $dado.="</div>";
        $dado.="</div>";
        $dado.="</div>";
    }
    foreach ($value->getdias() as $key => $dia) {
        if($dia){
            if($dias[$key]=="Não possui treino nesse dia"){
                $dias[$key]=$dado;
            }else{
                $dias[$key].=$dado;
            }
        }else{
            if($dias[$key]=="" or $dias[$key]==null){
                $dias[$key]="Não possui treino nesse dia";
            }
        }
    }
}
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
        body{
            background-color: #383838;
        }
        .sp-5{
            margin: 3px;
        }
    </style>

    <title>Treinos</title>
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
                <a class="btn btn-warning mb-3 ml-3" href="Interface_treinos.php">MEUS TREINOS<span class="sr-only">(Página
                        atual)</span></a>
            </li>
            <li class="justify-content-center">
                <a href="sair.php" class="nav-link mb-3 ml-3" href="#" role="button">LOGOUT</a>
            </li>
            <nav class="nav-link mb-3 ml-3">
                <a class="navbar-brand" href="#">
                    <img src="imagem/instagram-logo.svg"
                        width="30" height="30" alt="Instagram">
                </a>
            </nav>
        </ul>
    </nav>
    <div class="accordion container" id="accordionExample">
        <div class="">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        DOMINGO
                        </button>
                    </h2>
                </div>


                <div id="collapseOne" class="collapse px-3  show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="mx-4 my-4 row">
                        <?=$dias[0]?>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    SEGUNDA
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body row">
                    <?=$dias[1]?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                TERÇA
                </button>
            </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body row">
                <?=$dias[2]?>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                QUARTA
                </button>
            </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body row">
                <?=$dias[3]?>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                QUINTA
                </button>
            </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body row">
                <?=$dias[4]?>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                SEXTA
                </button>
            </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body row">
                <?=$dias[5]?>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    SÁBADO
                    </button>
                </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body row">
                    <?=$dias[6]?>
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