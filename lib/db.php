<?php
function db_init($host, $dbuser, $dbpassword, $dbname)
{
    $conn = mysqli_connect($host, $dbuser, $dbpassword);
    mysqli_select_db($conn, $dbname);
    return $conn;
}