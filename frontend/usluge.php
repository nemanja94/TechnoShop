<?php

$strana = " - Usluge";
include_once('../php/header.php');

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
                    <a class="nav-link" href="../index.php">
                        Početna
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="usluge.php">Usluge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="katalog.php">Katalog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
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

            require '../php/baza/Database.php';

            try {
                $pdo = Database::connect();

                $query = $pdo->prepare(
                    'SELECT * FROM TechnoShop.Usluge'
                );

                $query->execute();
            }
            catch (PDOException $e) {
                echo $e->getMessage();

            }

            while ($row = $query->fetch()) {
                echo '<div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-white bg-dark border border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['usluga_naziv'] . '</h5>
                        <hr class="bg-secondary">
                        <p class="card-text">' . $row['usluga_cena'] . '</a>
                    </div>
                </div>
            </div>';
            }

            Database::disconnect();

            ?>

        </div>
    </div>
    <!-- Kartice koje prikazuju usluge -->

    <!-- Footer -->
    <footer class="bg-dark p-3 text-center rounded-top">
        <p class="text-light mb-0">Copyright &copy; TechnoShop R&D 2018</p>
    </footer>
    <!-- Footer -->

    <!-- Stranica -->
</div>

<?php
include_once('../php/footer.php');
?>