<?php

require 'layout/essen.php';

session_start();

cabecalho();

if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    echo <<< HTML
        <nav class="navbar navbar-default">
            <p class="navbar-text">aa</p>
            <a class="btn btn-default navbar-btn">Sair</a>
        </nav>
HTML;
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
