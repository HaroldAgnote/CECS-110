#!/usr/local/php5/bin/php
<!doctype html>
<html lang = "en">
<head>
    <title>Website Title</title>
    <meta charset = "utf-8">
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link rel = "stylesheet" href = "css/home.css">
    <link rel = "stylesheet" href = "css/basic.css">
    <link href = "https://fonts.googleapis.com/css?family=Architects+Daughter" rel = "stylesheet">
</head>

<body>
<nav class = "navbar navbar-inverse">
    <div class = "container-fluid">
        <div class = "navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
            </button>
            <a class = "navbar-brand" href = "index.html">Logo</a>
        </div>
        <div class = "collapse navbar-collapse" id = "myNavbar">
            <ul class = "nav navbar-nav">
                <li><a href = "index.html">Home</a></li>
                <li><a href = "about.html">About</a></li>
                <li class = "dropdown">
                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button"
                       aria-haspopup = "true" aria-expanded = "false">Animals<span class = "caret"></span></a>
                    <ul class = "dropdown-menu">
                        <li class = "dropdown-submenu">
                            <a class = "submenu" tabindex = "-1" href = "#">Pets<span class = "caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "dogs.html">Dogs</a></li>
                                <li><a href = "cats.html">Cats</a></li>
                                <li><a href = "#">Birds</a></li>
                                <li><a href = "#">Hamsters/Gerbils</a></li>
                            </ul>
                        </li>
                        <li class = "dropdown-submenu">
                            <a class = "submenu" tabindex = "-1" href = "#">Farm Animals<span
                                    class = "caret"></span></a>
                            <ul class = "dropdown-menu">
                                <li><a href = "bunnies.html">Bunnies</a></li>
                                <li><a href = "#">Sheep</a></li>
                                <li><a href = "#">Placeholder</a></li>
                                <li><a href = "#">Placeholder</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class = "active"><a href = "comments.html"><span class = "glyphicon glyphicon-star"></span>&nbsp;Comments</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class = "container-fluid text-center">
    <div class = "row content">
        <div class = "col-sm-2 sidenav">
            <p><a href = "#">Link</a></p>
            <p><a href = "#">Link</a></p>
            <p><a href = "#">Link</a></p>
        </div>
        <div class = "col-sm-8 text-left">
            <div class = "page-header text-center">
                <h1>Comments</h1>
                <div class = "text-left">
                    <h3>
                        Thank you,
                        <?php
                        echo $_POST["name"];
                        ?>
                        !
                    </h3>
                    <br>
                    <h4>
                        Your favorite animal is
                        <?php
                        echo $_POST['favAnimal'];
                        ?>
                    </h4>
                    <br>
                    <p>
                    <h4>Here's your comment:</h4> <br>
                    <?php
                    echo $_POST["comment"];
                    ?>
                    </p>
                </div>
            </div>

        </div>

        <div class = "col-sm-2 sidenav">
            <div id = "dailypic">Daily pic</div>
        </div>

    </div>

</div>
</div>

<!-- FOOTER -->
<footer>
    <p class = "pull-right"><a href = "#">Back to top</a></p>
    <p>&copy; 2016 Aww-nimals Inc &middot; <a href = "mailto:contact@awwnimals.com">contact@awwnimals.com</a> </p>
</footer>
</div>  <!---End Wrapper--->
<script src = "js/jquery-3.1.1.min.js"></script>
<script src = "js/bootstrap.min.js"></script>
<script src = "js/dailypic.js"></script>
<script src = "js/menus.js"></script>
</body>
</html>
