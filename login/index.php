<?php

require '../layout/essen.php';

session_start();

$login = htmlspecialchars($_POST['usuario']);
$senha = htmlspecialchars($_POST['senha']);

cabecalho();

echo $login . "\n";

echo <<< 'HTML'
        <h2>Acesso ao Sistema</h2>
        <form class="col-sm-offset-3 col-sm-6 text-left" action="index.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite a sua senha">
            </div>
            <button class="btn btn-primary">ENTRAR</button>
        </form>

HTML;

rodape();
