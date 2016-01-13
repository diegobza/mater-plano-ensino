<?php

require 'layout/essen.php';

session_start();

cabecalho();

if (isset($_SESSION['login']) && $_SESSION['login'] != '') {
    
}

$mi = htmlspecialchars($_GET['mi']);

switch ($mi) {
    case '1':
        menuitem_emails();
        break;

    default:
        plano_ensino();
        break;
}

rodape();
