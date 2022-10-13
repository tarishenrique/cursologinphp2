<?php

function emptyInputSignup($nome, $email, $usuario, $senha, $senharepete)
{

    if (empty($name) || empty($email) || empty($usuario) || empty($senha) || empty($senharepete)) {
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