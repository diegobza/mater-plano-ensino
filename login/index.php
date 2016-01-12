<?php

require '../layout/essen.php';
require '../banco/db.php'

session_start();

$login = htmlspecialchars($_POST['usuario']);
$senha = htmlspecialchars($_POST['senha']);

$len_login = strlen(trim($login));
$len_senha = strlen($senha);

if ($len_login > 0 && $len_senha > 0) {
    echo "login\n";
    if (getCon()) {
        echo "conectou\n";
    }
}

cabecalho();

echo <<< 'HTML'
        <h2>Acesso ao Sistema</h2>
        <form class="col-sm-offset-3 col-sm-6 text-left" action="index.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a sua senha">
            </div>
            <button class="btn btn-primary">ENTRAR</button>
        </form>

HTML;

rodape();
