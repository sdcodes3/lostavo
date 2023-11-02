<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "lostavo";

$con = mysqli_connect($hostname, $username, $password, $database);
if(!$con){
    die("Error while connecting to server.".mysqli_error());
}

?>