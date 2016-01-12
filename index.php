<?php

require 'layout/essen.php';

session_start();

cabecalho();

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
