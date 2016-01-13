<?php

function getCon()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'beeblebrox';
    $database = 'materpe';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        return;
    } else {
        return $conn;
    }
}
