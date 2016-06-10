<?php

function menuitem_disciplinas()
{
    echo <<< HTML
        <table class="table">
            <thead>
                <tr>
                    <th>Disciplina</th>
                    <th>CH</th>
                </tr>
            </thead>
        </table>

HTML;
}

function plano_ensino()
{
    echo "        <h1>Plano de Ensino Online</h1>\n";
}

function cabecalho()
{
    $config = include 'config.php';
    echo <<< HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossa Mater - Plano de Ensino</title>
    <link rel="icon" href="/pe/favicon.png">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Exo+2">
    <link rel="stylesheet" type="text/css" href="/{$config['folder']}/layout/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/{$config['folder']}/layout/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/{$config['folder']}/layout/css/mater.css">
</head>
<body class="text-center">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/{$config['folder']}">
                    <img alt="PlanoEnsino" src="...">
                </a>
            </div>

HTML;

    if (empty($_SESSION['login'])) {
        echo <<< HTML
            <form method="post" class="navbar-form navbar-right" role="login">
                <div class="form-group">
                    <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-default">Entrar</button>
            </form>

HTML;
    } else {
        echo <<< HTML
            <form method="post" class="navbar-form navbar-right" role="logout">
                <input name="logout" type="hidden" class="form-control">
                <button type="submit" class="btn btn-default">Sair</button>
            </form>
            <p class="navbar-text navbar-right">{$_SESSION['USER_NAME']}</p>

HTML;
    }

    echo <<< HTML
        </div>
    </nav>

HTML;
}

function rodape()
{
    echo <<< 'HTML'
    <div id="div-horizonte">
    </div>
    <div id="rodape-img">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <a class="deco-none" href="#"><b>Nossa Mater</b></a>
                    <ul class="list-unstyled">
                        <li>Graduação</li>
                        <li>Pós-Graduação</li>
                        <li>Extensão</li>
                        <li>Estágio</li>
                        <li><abbr title="Núcleo de Práticas Jurídicas">NPJ</abbr> | <abbr title="Núcleo de Práticas Empresariais">NPE</abbr></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <a class="deco-none" href="#"><b>Mais</b></a>
                    <ul class="list-unstyled">
                        <li>Eventos</li>
                        <li>Biblioteca</li>
                        <li>Canal do Aluno</li>
                        <li>Canal do Professor</li>
                        <li><a class="deco-none" href="http://moodle-fac.materchristi.edu.br" target="_blank"><abbr title="Ambiente Virtual de Aprendizagem">AVA</abbr></a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <a class="deco-none" href="#"><b>Contato</b></a>
                    <ul class="list-unstyled">
                        <li><a class="deco-none" href="/pe/?mi=1">E-mails</a></li>
                        <li>Localização</li>
                        <li>Ouvidoria</li>
                        <li>Telefones</li>
                    </ul>
                </div>
            </div>
            <span class="col-xs-12"><small>Copyright &copy; 2015‒2016 <b>Faculdade de Ciências e Tecnologia Mater Christi</b> &nbsp; | &nbsp; Desenvolvido por <a class="deco-none" href="https://tatulab.com" target="_blank"><b>TatuLab</b></a></small></span>
        </div>
    </div>
    <script src="layout/js/jquery-1.12.0.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
</body>
</html>
HTML;
}
