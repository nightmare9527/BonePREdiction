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
            <li><a href="homeEN.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="contactEN.php">Contact</a></li>
            <li><a href="index.php">Login</a>
                <ul class="dropdown">
                    <li><a href="index2.php">Create Account</a></li>
                    <li><a href="index.php">Login</a></li>
                </ul>
            </li>
            <li><a href="#">Language</a>
                <ul class="dropdown">
                    <li><a href="#">English</a></li>
                    <li><a href="aboutCH.php">繁體中文</a></li>
                </ul>
            </li>
            </ul>
        </nav>
</header>
    <div class="container">
        <h1 class="big-title">This is a scoliosis prediction web:</h1>
        <p>First Step: </p>
        <pre> 
        Login, if you don't have a account 
        please create a account first.
        For Login enter your email and the 
        password setted previously to login.
        </pre>

        <p>Second Step: </p>
        <pre> 
        You will reach the user page, there are 
        four options to choose among.

            First:  Upload, upload a new patient data,
            please insert every single data box
            data will be insert into database, and the 
            predicted result will be show on the page

            Second:  Search, insert patient number 
            to search for a old patient data

            Third:  Update, update a old patient 
            data enter patient number and the 
            all the data to be update.

            Forth:  Delate, delete a old patient 
            data, insert patient number to delete 
            a patient's data
        </pre>
        <p>Third Step:</p>
        <pre> 
        Remember to logout after use
        </pre>
    </div>
</body>
</html>