<?php

if (isset($_POST["submit"])) {

    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];

    require_once 'conecta_db.php';
    require_once 'funcoes.php';

    if (emptyInputLogin($usuario, $senha)) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $usuario, $senha);
} else {
    header("location: ../login.php");
    exit();
}