<?php

function cabecalho()
{
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "    <meta charset=\"utf-8\">\n";
    echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo "    <title>Nossa Mater - Plano de Ensino</title>\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Exo+2\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"layout/css/bootstrap.min.css\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"layout/css/font-awesome.min.css\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"layout/css/mater.css\">\n";
    echo "</head>\n";
    echo "<body class=\"text-center\">\n";
    echo "    <div id=\"div-site\" class=\"container\">\n";
}

function rodape()
{
    echo "    </div>\n";
    echo "    <div id=\"div-horizonte\">\n";
    echo "    </div>\n";
    echo "    <div id=\"rodape-img\" class=\"container-fluid text-center\">\n";
    echo "        <div id=\"rodape-links\">\n";
    echo "            <div class=\"col-md-offset-4 col-md-2 col-xs-6 text-left\">\n";
    echo "                <a class=\"deco-none\" href=\"#\"><b>Nossa Mater</b></a>\n";
    echo "                <ul class=\"list-unstyled\">\n";
    echo "                    <li>Graduação</li>\n";
    echo "                    <li>Pós-Graduação</li>\n";
    echo "                    <li>Extensão</li>\n";
    echo "                    <li>Estágio</li>\n";
    echo "                    <li><abbr title=\"Núcleo de Práticas Jurídicas\">NPJ</abbr> | <abbr title=\"Núcleo de Práticas Empresariais\">NPE</abbr></li>\n";
    echo "                </ul>\n";
    echo "            </div>\n";
    echo "            <div class=\"col-md-6 col-xs-6 text-left\">\n";
    echo "                <a class=\"deco-none\" href=\"#\"><b>Contato</b></a>\n";
    echo "                <ul class=\"list-unstyled\">\n";
    echo "                    <li>E-mails</li>\n";
    echo "                    <li>Localização</li>\n";
    echo "                    <li>Ouvidoria</li>\n";
    echo "                    <li>Telefones</li>\n";
    echo "                </ul>\n";
    echo "            </div>\n";
    echo "        </div>\n";
    echo "        <span class=\"col-xs-12\"><small>Copyright &copy; 2015‒2016 <b>Faculdade de Ciências e Tecnologia Mater Christi</b> &nbsp; | &nbsp; Desenvolvido por <a class=\"deco-none\" href=\"https://tatulab.com\" target=\"_blank\"><b>TatuLab</b></a></small></span>\n";
    echo "    </div>\n";
    echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>\n";
    echo "    <script src=\"js/bootstrap.min.js\"></script>\n";
    echo "</body>\n";
    echo "</html>\n";
}
