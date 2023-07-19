<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "blog";

if($database != "blog" ){
    header('HTTP/1.0 404 Not Found');
    die();
}

$con = mysqli_connect("$host", "$username","$password","$database");





?>