<?php
$connection = new mysqli('localhost', 'root', '', 'frik');


function OpenCon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "frik";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}
