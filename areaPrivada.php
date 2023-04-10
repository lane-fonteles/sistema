<?php

    session_start();

    if(!isset($_SESSION['id_usuario'])):

        header("location: index.php");
        exit;

    endif;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="style/area_privada.css">
    <link rel="shortcut icon" href="imagens/icon/faicon.jpg">
</head>
<body>


<div id="cortes">
<nav>
        <div class="logo">BioCapilar </div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
        </div>

        <ul>
            <li> <a href="#"> Home </a> </li>
            <li> <a href="#" class="active">Rotas</a> </li>
            <li> <a href="#">Promotor</a> </li>
            <li> <a href="#">Dowload</a> </li>
        </ul>
    </nav>


<a href="sair.php">Sair</a>

</div>


</body>
</html>