<?php

$strana = " - Usluge - Krimpovanje";
include_once('../../php/header.php');

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
                    <a class="nav-link" href="../../index.php">
                        Početna
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../usluge.php">Usluge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../katalog.php">Katalog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Kartice koje prikazuju usliuge -->
    <hr />
    <div class="container" style="height: 150em;">

            <!--Tabs-->
            <div class="container">
                <ul class="nav nav-tabs nav-fill px-3 col-sm-1 col-md-12">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="usluge_servis_racunara.php">Servis računara</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-warning active" href="usluge_servis_stampaca.php">Servis Štampača</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="usluge_krimpovanje_kablova.php">Krimpovanje kablova</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-dark" href="usluge_azurirnaje_softvera_navigacija.php">Azurirnaje softvera navigacija</a>
                    </li>
                </ul>
            </div>
            <!--Tabs-->

        <div class="row mt-5">
            <!--Servis stampaca-->
            <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-light bg-dark border border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title text-light">Zamena bubnja </h5>
                        <hr class="bg-warning">
                        <p class="card-text text-light">Cena: 3500rsd</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-light bg-dark border border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title text-light">Zamena čipa</h5>
                        <hr class="bg-warning">
                        <p class="card-text text-light">Cena: 3500rsd</a>
                    </div>
                </div>
            </div><div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-light bg-dark border border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title text-light">Punjenje tonera</h5>
                        <hr class="bg-warning">
                        <p class="card-text text-light">Cena: 3500rsd</a>
                    </div>
                </div>
            </div><div class="col-sm-6 col-md-6 col-lg-4 my-3">
                <div class="card text-light bg-dark border border-warning shadow">
                    <div class="card-body">
                        <h5 class="card-title text-light">Punjenje ketridža</h5>
                        <hr class="bg-warning">
                        <p class="card-text text-light">Cena: 3500rsd</a>
                    </div>
                </div>
            </div>
            <!--Servis stampaca-->
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
include_once('../../php/footer.php');
?>