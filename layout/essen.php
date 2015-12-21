<?php

function menuitem_emails()
{
    echo "        <h2>Lista de E-mails</h2>\n";
    echo "        <div class=\"table-responsive col-md-offset-2 col-md-8\">\n";
    echo "            <table class=\"table table-bordered table-hover text-left\">\n";
    echo "                <thead>\n";
    echo "                    <tr>\n";
    echo "                        <th class=\"col-sm-6\">Coordenações</th>\n";
    echo "                        <th class=\"col-sm-6\">E-mails</th>\n";
    echo "                    </tr>\n";
    echo "                </thead>\n";
    echo "                <tbody>\n";
    echo "                    <tr title=\"Prof. Gildson Bezerra\">\n";
    echo "                        <td>Administração</td>\n";
    echo "                        <td>administracao@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Prof. Carlos Alberto\">\n";
    echo "                        <td>Ciências Contábeis</td>\n";
    echo "                        <td>contabeis@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Prof.ª Érika Benjamim\">\n";
    echo "                        <td>Direito</td>\n";
    echo "                        <td>direito@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Prof. Diego Bezerra\">\n";
    echo "                        <td>Sistemas de Informação</td>\n";
    echo "                        <td>sistemas@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                </tbody>\n";
    echo "                <thead>\n";
    echo "                    <tr>\n";
    echo "                        <th>Administrativo</th>\n";
    echo "                        <th>E-mails</th>\n";
    echo "                    </tr>\n";
    echo "                </thead>\n";
    echo "                <tbody>\n";
    echo "                    <tr title=\"Leila Maria\">\n";
    echo "                        <td>Estágio</td>\n";
    echo "                        <td>estagio@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Sônia Paiva\">\n";
    echo "                        <td>Registro Escolar</td>\n";
    echo "                        <td>graduacao@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Amanda Gabriela\">\n";
    echo "                        <td>Secretaria</td>\n";
    echo "                        <td>secretariafmc@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                    <tr title=\"Helyab Lucena\">\n";
    echo "                        <td>TCC</td>\n";
    echo "                        <td>tcc@materchristi.edu.br</td>\n";
    echo "                    </tr>\n";
    echo "                </tbody>\n";
    echo "            </table>\n";
    echo "        </div>\n";
}

function plano_ensino()
{
    echo "        <h1>Plano de Ensino Online</h1>\n";
    echo "        <a class=\"btn btn-primary\" href=\"login/\">ENTRAR</a>\n";
}

function cabecalho()
{
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "    <meta charset=\"utf-8\">\n";
    echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo "    <title>Nossa Mater - Plano de Ensino</title>\n";
    echo "    <link rel=\"icon\" href=\"favicon.png\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Exo+2\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pe/layout/css/bootstrap.min.css\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pe/layout/css/font-awesome.min.css\">\n";
    echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/pe/layout/css/mater.css\">\n";
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
    echo "        <div class=\"col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8\">\n";
    echo "            <div class=\"col-md-4 col-sm-4 col-xs-6 text-left\">\n";
    echo "                <a class=\"deco-none\" href=\"#\"><b>Nossa Mater</b></a>\n";
    echo "                <ul class=\"list-unstyled\">\n";
    echo "                    <li>Graduação</li>\n";
    echo "                    <li>Pós-Graduação</li>\n";
    echo "                    <li>Extensão</li>\n";
    echo "                    <li>Estágio</li>\n";
    echo "                    <li><abbr title=\"Núcleo de Práticas Jurídicas\">NPJ</abbr> | <abbr title=\"Núcleo de Práticas Empresariais\">NPE</abbr></li>\n";
    echo "                </ul>\n";
    echo "            </div>\n";
    echo "            <div class=\"col-md-4 col-sm-4 col-xs-6 text-left\">\n";
    echo "                <a class=\"deco-none\" href=\"#\"><b>Mais</b></a>\n";
    echo "                <ul class=\"list-unstyled\">\n";
    echo "                    <li>Eventos</li>\n";
    echo "                    <li>Biblioteca</li>\n";
    echo "                    <li>Canal do Aluno</li>\n";
    echo "                    <li>Canal do Professor</li>\n";
    echo "                    <li><a class=\"deco-none\" href=\"http://moodle-fac.materchristi.edu.br\" target=\"_blank\"><abbr title=\"Ambiente Virtual de Aprendizagem\">AVA</abbr></a></li>\n";
    echo "                </ul>\n";
    echo "            </div>\n";
    echo "            <div class=\"col-md-4 col-sm-4 col-xs-12 text-left\">\n";
    echo "                <a class=\"deco-none\" href=\"#\"><b>Contato</b></a>\n";
    echo "                <ul class=\"list-unstyled\">\n";
    echo "                    <li><a class=\"deco-none\" href=\"/pe/?mi=1\">E-mails</a></li>\n";
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
