<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="homeCH.php">首頁</a></li>
            <li><a href="aboutCH.php">關於我們</a></li>
            <li><a href="contactCH.php">聯絡我們</a></li>
            <li><a href="#">登入</a>
                <ul class="dropdown">
                    <li><a href="CreateACH.php">創建帳號</a></li>
                    <li><a href="#">登入</a></li>
                </ul>
            </li>
            <li><a href="#">語言選擇</a>
                <ul class="dropdown">
                    <li><a href="index.php">English</a></li>
                    <li><a href="LoginCH.php">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </header>
    <form action="processCH.php" method="post">
        <div class="container">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="電子郵件">
            <input type="password" name="password" placeholder="密碼">
            <button type="submit">登入</button>
            <a href="index2.php" class="create-account-btn">創建帳號</a>
        </div>
    </form>
</body>
</html>