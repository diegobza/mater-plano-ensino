<?php

require 'layout/essen.php';
require 'banco/consultas.php';

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    session_start();
}

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
    $PE_USER = htmlspecialchars($_POST['usuario']);
    $PE_PASS = htmlspecialchars($_POST['senha']);
    if (con_login($PE_USER, $PE_PASS)) {
        $_SESSION['login'] = $PE_USER;
    } else {
    }
}

cabecalho();

if (!empty($_SESSION['login'])) {
    con_tabela_disciplinas();
}

rodape();
