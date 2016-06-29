<?php

require_once 'layout/essen.php';
require_once 'banco/consultas.php';

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    session_start();
}

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $PE_USER = $_POST['usuario'];
    $PE_PASS = $_POST['senha'];
    echo password_hash($PE_PASS, PASSWORD_DEFAULT);
    if (con_login($PE_USER, $PE_PASS)) {
        $_SESSION['login'] = $PE_USER;
    } else {
        echo 'ERRO';
    }
}

cabecalho();

if (!empty($_SESSION['login'])) {
    con_tabela_disciplinas();
}

rodape();
