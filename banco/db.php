<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'beeblebrox');
define('DB_NAME', 'materpe');

function getCon()
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL';

        return;
    }

    $mysqli->set_charset("utf8");

    return $mysqli;
}
