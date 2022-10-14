<?php

if (isset($_POST["submit"])) {

    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $usuario = $_POST["txtUsuario"];
    $senha = $_POST["txtSenha"];
    $senharepete = $_POST["txtSenhaRepete"];

    require_once 'conecta_db.php';
    require_once 'funcoes.php';

    if (emptyInputSignup($nome, $email, $usuario, $senha, $senharepete)) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsuario($usuario)) {
        header("location: ../signup.php?error=invalidusuario");
        exit();
    }
    if (invalidEmail($email)) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (senhaValidar($senha, $senharepete)) {
        header("location: ../signup.php?error=senhasnaoiguais");
        exit();
    }
    if (usuarioExiste($conn, $usuario, $email)) {
        header("location: ../signup.php?error=usuariojaexiste");
        exit();
    }

    criarUsuario($conn, $nome, $email, $usuario, $senha);
} else {

    echo "<h1>Falha ao cadastrar cliente</h1>

    <a class=\"btn btn-success\" href=\"../signup.php\" role=\"button\">Cadastrar Novo Usuário</a>
    <a class=\"btn btn-info\" href=\"../index.php\" role=\"button\">Página Inicial</a>
    ";
}