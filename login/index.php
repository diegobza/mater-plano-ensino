<?php

require '../layout/essen.php';

session_start();

cabecalho();

echo <<< 'HTML'
        <h2>Acesso ao Sistema</h2>
        <form class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 text-left">
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input type="text" class="form-control" id="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Digite a sua senha">
            </div>
            <button class="btn btn-primary">ENTRAR</button>
        </form>

HTML;

rodape();
