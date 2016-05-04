<?php

require 'db.php';

function con_login($usuario, $senha)
{
    $con = getCon();
    if ($con) {
        $stmt = $con->prepare('SELECT nome, login, senha FROM usuario WHERE login = ?');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->bind_result($nome, $login, $hash);
        $result = $stmt->fetch();
        $con->close();
        if ($result) {
            if (password_verify($senha, $hash)) {
                $_SESSION['USER_NAME'] = $nome;
                return true;
            }

            return false;
        }
    }

    return false;
}
