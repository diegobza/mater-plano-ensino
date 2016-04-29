<?php

require '../banco/db.php';

session_start();

if ($_GET['logout'] == '1') {
    session_destroy();
}

$login = trim(htmlspecialchars($_POST['usuario']));
$senha = htmlspecialchars($_POST['senha']);

$len_login = strlen($login);
$len_senha = strlen($senha);

if (!empty($_POST)) {
    if ($len_login > 0 && $len_senha > 0) {
        $conn = getCon();
        if ($conn) {
            $stmt = $conn->prepare('SELECT usuSenha, usuNome FROM tabUsuario WHERE usuLogin = ?');
            $stmt->bind_param('s', $login);
            $stmt->execute();
            $stmt->bind_result($hash, $nome);
            $result = $stmt->fetch();

            if ($result) {
                if (password_verify($senha, $hash)) {
                    $_SESSION['login'] = $login;
                    $_SESSION['nome'] = $nome;
                    header('Location: http://localhost/pe/');
                } else {
                    $bootClass = 'text-danger';
                    $msg = 'Usuário ou senha inválida.';
                }
            } elseif ($result == null) {
                $bootClass = 'text-danger';
                $msg = 'Usuário ou senha inválida.';
            } else {
                echo "Erro durante a busca de dados.\n";
            }

            $stmt->close();
            $conn->close();
        }
    } else {
        $bootClass = 'text-danger';
        $msg = 'Preencha os campos.';
    }
}

echo <<< HTML
    <div class="container">
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
            <p class="$bootClass text-center"><strong>$msg</strong></p>
            <button class="btn btn-primary">ENTRAR</button>
        </form>

HTML;
