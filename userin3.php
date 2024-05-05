<?php
session_start();
if($_SESSION['eamil']==0){
    header("Location:LoginCH.php");
}
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
            <li><a href="homeCH.php">首頁</a></li>
            <li><a href="aboutCH.php">關於我們</a></li>
            <li><a href="#">聯絡我們</a></li>
            <li><a href="index.php">登入</a>
                <ul class="dropdown">
                    <li><a href="index2.php">創建帳號</a></li>
                    <li><a href="index.php">登入</a></li>
                </ul>
            </li>
            <li><a href="#">語言</a>
                <ul class="dropdown">
                    <li><a href="userin.php">English</a></li>
                    <li><a href="#">繁體中文</a></li>
                </ul>
            </li>
            <li><a href="logoutCH.php">登出</a></li>
            </ul>
        </nav>
    </header>
</body>
    <form action="result2.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h2>Welcome</h2>
            <input type="text" name="patient_no" placeholder="病利號">
            <input type="text" name="patient_name" placeholder="病人名">
            <input type="date" name="date" placeholder="出生年月日">
            <label class="text">男性
            <input type="checkbox" id="male" name="sex" value="MALE">
            <span class="checkmark"></span>
            </label>
            <label class="text">女性
            <input type="checkbox" id="female" name="sex" value="FEMALE">
            <span class="checkmark"></span>
            </label>
            <!--<input class="radioinput" type="radio" id="male" name="sex" value="MALE">
            <label class="ridiolabel" for="male">MALE</label>
            <input class="radioinput" type="radio" id="female" name="sex" value="FEMALE">
            <label class="ridiolabel" for="female">FEMALE</label>-->
            <input type="file" name="image" accept=".jpg, .jpeg, .png">
            <div class="btn-group">
            <button class="button" type="submit" name="upload">上傳</button>
            <button class="button" type="submit" name="search">搜尋</button>
            <button class="button" type="submit" name="update">更新</button>
            <button class="button" type="submit" name="delete">刪除</button>
            </div>
        </div>
    </form>
</html> 