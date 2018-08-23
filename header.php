<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <header>
        <nav>
            <div class ="main-wrapper">
                <ul>
                    <li><a href = "index.php">HOME</a></li>
                </ul>
            </div>

            <div class = "nav-login">
                <form action="includes/login.inc.php" method= "post">
                    <input type = "text" name = "uid" placeholder = "Username/Email">
                    <input type = "password" name = "pwd" placeholder = "password">
                    <button type = "submit" name = "submit">GO!</button>
                </form>

                <a href = "signup.php">Sign up!</a>
            </div>
        </nav>
    </header>