<?php

function emptyInputSignup($nome, $email, $usuario, $senha, $senharepete)
{

    if (empty($nome) || empty($email) || empty($usuario) || empty($senha) || empty($senharepete)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUsuario($usuario)
{

    if (!preg_match("/^[a-zA-Z0-9]*$/", $usuario)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function senhaValidar($senha, $senharepete)
{
    if ($senha !== $senharepete) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function usuarioExiste($conn, $usuario, $email)
{
    global $conn;

    $sql = "SELECT * FROM users WHERE usersUsuario = ? OR usersEmail = ?;";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=falhanostmt");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $usuario, $email);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($linha = mysqli_fetch_assoc($resultData)) {
        return $linha;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function criarUsuario($conn, $nome, $email, $usuario, $senha)
{
    global $conn;
    $sql = "INSERT INTO users (usersNome, usersEmail, usersUsuario, usersSenha) VALUES (?, ?, ?, ? )";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=falhanostmt");
        exit();
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $usuario, $senhaHash);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../signup.php?error=nenhum");
    exit();
}