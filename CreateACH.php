<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Page</title>
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
            <li><a href="LoginCH">登入</a>
                <ul class="dropdown">
                    <li><a href="#">創建帳號</a></li>
                    <li><a href="LoginCH.php">登入</a></li>
                </ul>
            </li>
            <li><a href="#">語言選擇</a>
                <ul class="dropdown">
                    <li><a href="index2.php">English</a></li>
                    <li><a href="#">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </header>
    <form action="process2.php" method="post">
        <div class="container">
            <h2>創建帳號</h2>
            <input type="text" name="new_account_name" placeholder="帳號名稱">
            <input type="text" name="email" placeholder="電子郵件">
            <input type="password" name="new_password" placeholder="密碼">
            <input type="password" name="confirm_password" placeholder="確認密碼">
            <button>創建帳號</button>
        </div>
    </form>
</body>
</html>