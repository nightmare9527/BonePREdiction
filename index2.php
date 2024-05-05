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
            <li><a href="homeEN.php">Home</a></li>
            <li><a href="aboutEN.php">About</a></li>
            <li><a href="contactEN.php">Contact</a></li>
            <li><a href="#">Login</a>
                <ul class="dropdown">
                    <li><a href="index2.php">Create Account</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </li>
            <li><a href="#">Language</a>
                <ul class="dropdown">
                    <li><a href="#">English</a></li>
                    <li><a href="CreateACH.php">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
    </header>
    <form action="process2.php" method="post">
        <div class="container">
            <h2>Create Account</h2>
            <input type="text" name="new_account_name" placeholder="Account Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="new_password" placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Password Comfirm">
            <button>Create Account</button>
        </div>
    </form>
</body>
</html>