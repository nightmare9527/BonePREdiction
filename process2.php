<?php
include 'database.php';
if(empty($_POST["new_account_name"])){
    die("Name is required");
}
else if(empty($_POST["new_password"])){
    die("password is required");
}
else if(empty($_POST["confirm_password"])){
    die("password confirm is required");
}
else if(empty($_POST["email"])){
    die("email is required");
}
if(! preg_match("/[a-z]/i", $_POST["new_password"])){
    die("password should require a least one alphabat");
}
if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    die("valid email required");
}
if(! preg_match("/[0-9]/", $_POST["new_password"])){
    die("password should require a least one number");
}
if($_POST["new_password"]!=$_POST["confirm_password"]){
    die("password do not match");
}
/*print_r($_POST["new_account_name"]);
print("\n");
print_r($_POST["new_password"]);
print("\n");
print_r($_POST["confirm_password"]);*/
$name=$_POST["new_account_name"];
$email=$_POST["email"];
$password_hash=password_hash($_POST["new_password"], PASSWORD_DEFAULT);
$mysqli= OpenCon();
$sql1="SELECT email FROM user";
$result=mysqli_query($mysqli,$sql1);
$total_records=mysqli_num_rows($result);
while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
    for($i=0;$i<$total_records;$i++){
        if(isset($row[$i])){
        if($email==$row[$i]){
            die("email has been used");
        }
    }
    }
 }
$sql="INSERT INTO user (name, password_hash, email) VALUES ('$name','$password_hash','$email')";
$stmt= $mysqli->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL error: ".$mysqli->error);
}
if($stmt->execute()){
   header("Location:signup-sucess.php");
   exit;
}
/*$stmt->bind_param("sss",$_POST["name"],$password_hash,$_POST["email"]);*/
/*$stmt->bind_param("sss",$name,$email,$password_hash);*/

/*if($stmt->execute()){
    echo "signup successful";
}
else{
    if($mysqli->errno===1062){
        die("email address already been taken");
    }
    
        die($mysqli->error . " " . $mysqli->errno);
    
}

/*print_r($_POST);
var_dump($password_hash);*/
