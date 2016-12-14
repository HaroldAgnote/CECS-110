#!/usr/local/php5/bin/php-cgi
<!doctype html>
<html lang = "en">
<head>
    <title>Programming Pros - Comments</title>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "basic.css">
</head>

<body>
<div id = "wrapper"> <!---Wrapper--->
    <header> <!---Header--->
        <h1>
            Programming Pros
        </h1>
        <span>Building Something New Every Day</span>
    </header> <!---End Header--->

    <nav> <!---Navigation Links--->
        <ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "about.html">About</a></li>
            <li><a href = "gallery.html">Gallery</a></li>
            <li><a href = "comments.html">Comments</a></li>
        </ul>
    </nav> <!---End Navigation Links--->

    <main> <!---Main Framework--->
        <p>
            <?php
                  echo "Thank you, Professor Allen for a wonderful class and semester!";
            ?>
        </p>
        <p>
            <?php
                echo "Cheers!"
            ?>
        </p>
    </main> <!---End Main Framework--->

    <footer>  <!---Footer--->
              Copyright &copy; 2016 Programming Pros <br>
        <a href= "mailto:contact@programmingpros.com">contact@programmingpros.com</a>
    </footer> <!---End Footer--->
</div>  <!---End Wrapper--->
</body>
</html>
