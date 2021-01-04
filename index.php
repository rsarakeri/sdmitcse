<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "sdmitcse";

$conn = mysqli_connect($server_name,$user_name,$password,$dbname);

if ($conn)
{
    echo "<h1>connection established</h1>";
}
?>