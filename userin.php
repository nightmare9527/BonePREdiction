<?php
session_start();
if($_SESSION['eamil']==0){
    header("Location:index.php");
}
// if(empty($_FILES["image"])==TRUE){ 

// }
// else {  
//     $tempname = $_FILES["image"]["tmp_name"];
//     $filename = $_FILES["image"]["name"];
//     $folder3="yolov7-main/datasets/Vert_newCheck/images/try/".$filename;
//     // Store the path of source file 
//     $source = $tempname;  
//     // Store the path of destination file 
//     $destination = $filename;  
//     if( !copy($source, $destination) ) {  
//         die("File can't be copied! \n");  
//     }
//     $out=shell_exec('python C:\Users\user\visualpy\yolov7-main\detect.py --weights C:\Users\user\visualpy\yolov7-main\runs/train/exp93/weights/best.pt --source C:\Users\user\visualpy\yolov7-main\datasets/Vert_newCheck/images/try'); 
//     unlink($folder3);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Page</title>
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="homeEN.php">Home</a></li>
            <li><a href="aboutEN.php">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="index.php">Login</a>
                <ul class="dropdown">
                    <li><a href="index2.php">Create Account</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </li>
            <li><a href="#">Language</a>
                <ul class="dropdown">
                    <li><a href="#">English</a></li>
                    <li><a href="userin3.php">繁體中文</a></li>
                </ul>
            </li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
</body>
    <form action="result2.php" method="post" enctype="multipart/form-data" id="myForm">
        <div class="container">
            <h2>Welcome</h2>
            <input type="text" name="patient_no" placeholder="patiant number">
            <input type="text" name="patient_name" placeholder="patient name">
            <input type="date" name="date" placeholder="birth date">
            <label class="text">MALE
            <input type="checkbox" id="male" name="sex" value="MALE">
            <span class="checkmark"></span>
            </label>
            <label class="text">FEMALE
            <input type="checkbox" id="female" name="sex" value="FEMALE">
            <span class="checkmark"></span>
            </label>
            <!--<input class="radioinput" type="radio" id="male" name="sex" value="MALE">
            <label class="ridiolabel" for="male">MALE</label>
            <input class="radioinput" type="radio" id="female" name="sex" value="FEMALE">
            <label class="ridiolabel" for="female">FEMALE</label>-->
            <input type="file" name="image" accept=".jpg, .jpeg, .png">
            <div class="btn-group">
            <button class="button" type="submit" name="upload">UPLOAD</button>
            <button class="button" type="submit" name="search">SEARCH</button>
            <button class="button" type="submit" name="update">UPDATE</button>
            <button class="button" type="submit" name="delete">DELETE</button>
            </div>
        </div>
    </form>
    <script>
    // Function to clear input fields
    function clearFields() {
        document.getElementById("myForm").reset();
    }

    // Call the clearFields function when the form is submitted
    document.getElementById("myForm").addEventListener("submit", clearFields);
    </script>
</html> 