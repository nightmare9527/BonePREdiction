<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="constyle.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">SpinePREdiction</a>
        <nav class="navbar">
            <ul class="choice">
            <li><a href="homeCH.php">首頁</a></li>
            <li><a href="#">關於我們</a></li>
            <li><a href="contactCH.php">聯絡我們</a></li>
            <li><a href="index.php">登入</a>
                <ul class="dropdown">
                    <li><a href="CreateACH.php">Create Account</a></li>
                    <li><a href="LoginCH.php">Login</a></li>
                </ul>
            </li>
            <li><a href="#">語言</a>
                <ul class="dropdown">
                    <li><a href="aboutEN.php">English</a></li>
                    <li><a href="#">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
</header>
    <div class="container">
        <h1 class="big-title">這是一個脊柱側彎預測網站：</h1>
        <p>第一步： </p>
        <pre> 
        登錄，如果您沒有帳戶，請先建立帳戶。
        登入時，請輸入您的電子郵件和先前設定的密碼。
        </pre>

        <p>第二步： </p>
        <pre> 
        您將進入用戶頁面，有四個選項可供選擇。

            第一項：上傳，上傳新的病患數據，
            請插入每個單獨的資料框，
            資料將插入資料庫，並且
            預測結果將顯示在頁面上。

            第二項：搜索，插入患者編號
            以搜尋舊患者資料。

            第三項：更新，更新舊病患數據，
            請輸入病患編號和所有要更新的資料。

            第四項：刪除，刪除舊患者數據，
            請插入患者編號以刪除患者的數據。
        </pre>
        <p>第三步：</p>
        <pre> 
        使用後請記得登出。
        </pre>
    </div>
</body>
</html>