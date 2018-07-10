<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <!-- Latest compiled and minified jQuery -->
    <script src="../../jquery/jquery-3.2.1.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="../../js/bootstrap.js"></script>

    <style media="screen">
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
    </style>

    <title>Online aukcije</title>
</head>
<body>
<div>
    <nav class="navbar navbar-inverse" style="z-index: 2; top: 0px; left: 0px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>
                <a class="navbar-brand" href="../../index.php">Online aukcije</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../prijava/prijava.php">Prijavi se</a>
                    </li>
                    <li>
                        <a href="../registracija/registracija.php">Registruj se</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- jumbotron -->
    <div class="jumbotron  text-center slideDown"
         style="border-bottom: 6px solid black; border-radius: 4px; z-index: 1; top: 0px; left: 0px;">
        <div class="container">
            <h1>Online aukcije
                <small>Greška pri konekciji sa bazom</small>
            </h1>
            <hr>
            <p class="text-justify text-danger">

                <?php

                echo $greska . "<br>" . $savet . "<br>Potrebno je podesiti: <br>&nbsp;&nbsp;&nbsp; Fajl: " . $fajl . "<br>&nbsp;&nbsp;&nbsp; Linija: 6, 7 i 8";

                ?>

            </p>
        </div>
    </div>
</div>
</body>
</html>