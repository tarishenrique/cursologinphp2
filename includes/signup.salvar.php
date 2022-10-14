<?php

if (isset($_POST["submit"])) {

    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];
    $senharepete = $_POST["txtSenhaRepete"];

    require_once 'conecta_db.php';
    require_once 'funcoes.php';

    if (emptyInputSignup($nome, $email, $usuario, $senha, $senharepete) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsuario($usuario) !== false) {
        header("location: ../signup.php?error=invalidusuario");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (senhaValidar($senha, $senharepete) !== false) {
        header("location: ../signup.php?error=senhanaoiguais");
        exit();
    }
    if (usuarioExiste($conn, $usuario, $email) !== false) {
        header("location: ../signup.php?error=usuariojaexiste");
        exit();
    }

    criarUsuario($conn, $nome, $email, $usuario, $senha);
} else {

    header("location: ../signup.php");
    exit();
}