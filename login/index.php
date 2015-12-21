<?php

require '../layout/essen.php';

cabecalho();

echo "        <form class=\"col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 text-left\">\n";
echo "            <div class=\"form-group\">\n";
echo "                <label for=\"usuario\">Usuário</label>\n";
echo "                <input type=\"text\" class=\"form-control\" id=\"usuario\" placeholder=\"Digite seu nome de usuário\">\n";
echo "            </div>\n";
echo "            <div class=\"form-group\">\n";
echo "                <label for=\"senha\">Senha</label>\n";
echo "                <input type=\"password\" class=\"form-control\" id=\"senha\" placeholder=\"Digite a sua senha\">\n";
echo "            </div>\n";
echo "            <button class=\"btn btn-primary\">ENTRAR</button>\n";
echo "        </form>\n";

rodape();
