<?php
function OpenCon(){
$dbhost="localhost";
$dbname="login_db";
$username="root";
$password="";

$mysqli = new mysqli($dbhost, $username, $password, $dbname);

if($mysqli->connect_errno){
    die("Connection error: ". $mysqli->connect_error);
}
return $mysqli;
}