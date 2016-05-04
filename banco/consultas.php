<?php

require 'db.php';

function con_login($usuario, $senha)
{
    $con = getCon();
    if ($con) {
        $stmt = $con->prepare('SELECT id, nome, login, senha FROM usuario WHERE login = ?');
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $login, $hash);
        $result = $stmt->fetch();
        $con->close();
        if ($result) {
            if (password_verify($senha, $hash)) {
                $_SESSION['USER_ID'] = $id;
                $_SESSION['USER_NAME'] = $nome;

                return true;
            }

            return false;
        }
    }

    return false;
}

function con_tabela_disciplinas()
{
    echo <<< HTML
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Disciplina</th>
                    <th>CH</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>

HTML;

    $sql = <<< 'SQL'
SELECT
    di.codigo,
    di.nome,
    di.cargahoraria
FROM
    planoensino AS pe INNER JOIN
    disciplina AS di INNER JOIN
    planoprofessor AS pp
ON
    pe.disciplina = di.id AND
    pe.id = pp.planoensino
WHERE
    pe.semestre = 1 AND
    pp.professor = ?;
SQL;

    $con = getCon();
    if ($con) {
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $_SESSION['USER_ID']);
        $stmt->execute();
        $stmt->bind_result($dCod, $dNome, $dCH);
        while ($stmt->fetch()) {
            echo <<< HTML
                <tr>
                    <td>$dCod</td>
                    <td>$dNome</td>
                    <td>$dCH</td>
                    <td><a class="btn btn-default" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true" title="Editar"></i></a></td>
                </tr>

HTML;
        }
    }

    echo <<< HTML
            </tbody>
        </table>
    </div>

HTML;
}
