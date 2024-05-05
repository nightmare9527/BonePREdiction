<?php
session_start();
include 'database.php';
$is_invalid=false;
$email=$_POST["email"];
$password=$_POST["password"];
/*if(empty($email)){
    die("email is required")
}
if(empty($password)){
    die("password is required")
}*/
$mysqli= OpenCon();
$sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
$result = $mysqli->query($sql); 
$user = $result->fetch_assoc();
if($user){
    if (password_verify($_POST["password"], $user["password_hash"])) {
        $_SESSION['eamil']=$email;
        header("Location:userintest.php");
    }
    else{
        $is_invalid=true;
    }
}
else{
    $is_invalid=true;
}
if($is_invalid){
    header("Location:login_failed.php");
   exit;
}

