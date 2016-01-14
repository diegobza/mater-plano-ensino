<?php

require 'layout/essen.php';

session_start();

cabecalho();

if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $nome = $_SESSION['nome'];
    echo <<< HTML
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="#">Início</a></li>
                <li><a href="#">Disciplinas</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="login">
                <div class="form-group">
                    $nome
                    <input type="hidden" name="logout" value="1">
                </div>
                <button class="btn btn-default"><i class="fa fa-sign-out"></i> Sair</button>
            </form>
        </div>
    </nav>
    <div class="container">

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
