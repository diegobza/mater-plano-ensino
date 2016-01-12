<?php

function getCon()
{
    $servername = 'localhost';
    $username = 'root';
    $password = 'beeblebrox';

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        return;
    } else {
        return $conn;
    }
}
