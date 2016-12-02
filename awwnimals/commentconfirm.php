#!/usr/local/php5/bin/php-cgi
<!doctype html>
<html lang = "en">
<head>
    <title>Website Title</title>
    <meta charset = "utf-8">
    <link rel = "stylesheet" href = "awwnimals.css">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
</head>

<body>
<div id = "wrapper"> <!---Wrapper--->
    <header> <!---Header--->
        <h1>
        </h1>
    </header> <!---End Header--->

    <nav> <!---Navigation Links--->
        <ul>
            <li><a href = "index.html">Home</a></li>
            <li><a href = "about.html">Animals</a>
                <ul>
                    <li><a href = "dogs.html">Dogs</a></li>
                    <li><a href = "cats.html">Cats</a></li>
                    <li><a href = "bunnies.html">Bunnies</a></li>
                </ul>
            </li>

            <li><a href = "comments.html">Comments</a></li>
        </ul>
    </nav> <!---End Navigation Links--->

    <div id = "dailypic">Daily pic</div>

    <div id = "relatedlinks">Related Links</div>

    <main> <!---Main Framework--->
        <div id = "pagename">
            <h1>Comments</h1>
        </div>
        <div id = "animalpicture">Animal Picture</div>

        <div id = "comment">

            <p>
                Thank you, &nbsp;
                <?php
                    echo $_POST["name"];
                ?>
            </p>

            <p>
                Here is your comment: <br>
                <?php
                    echo $_POST["comment"];
                ?>
            </p>
        </div>

    </main> <!---End Main Framework--->



    <footer>  <!---Footer--->
        Footer
    </footer> <!---End Footer--->
</div>  <!---End Wrapper--->
</body>
</html>
