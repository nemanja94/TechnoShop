<?php

require '../baza/Database.php';

try {
    $pdo = Database::connect();

    $query = $pdo->prepare(
        'SELECT * FROM TechnoShop.Usluge'
    );

    $query->execute();

    Database::disconnect();
}
catch (PDOException $e) {
    echo $e->getMessage();

}

$strana = " - Usluge";
include_once('../header.php');

?>

<!-- Stranica -->
<div class="container">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning rounded-bottom sticky-top shadow">
        <a class="navbar-brand" href="index.html">
            <h4 class="mb-0">Techno Shop</h4>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Početna
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="frontend/usluge.php">Usluge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Katalog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="frontend/kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Kartice koje prikazuju usliuge -->
    <hr />
    <div class="container">
        <div class="row">

            <?php

            while ($row = $query->fetch()) {
                echo '<div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-white bg-dark" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['usluga_naziv'] . '</h5>
                        <hr class="bg-secondary">
                        <a href="ukloniKategoriju.php?id=' . $row['usluga_cena'] . '">
                            <button class="btn btn-danger">Ukloni kategoriju</button>
                        </a>
                    </div>
                </div>
            </div>';
            }

            ?>
        </div>
    </div>
    <!-- Kartice koje prikazuju usluge -->

    <!-- Stranica -->
</div>

<?php
include_once('../footer.php');
?>