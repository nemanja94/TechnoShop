<?php

$strana = " - Usluge - Krimpovanje";
include_once('../../php/header.php');

?>

    <!-- Stranica -->
    <div class="container">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning rounded-bottom sticky-top shadow">
            <a class="navbar-brand" href="../../index.php">
                <h4 class="mb-0">Techno Shop</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText"
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
                        <a class="nav-link" href="usluge_servis_racunara.php">Usluge</a>
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
        <hr/>
        <div class="container">

            <!--Tabs-->
            <div class="container">
                <ul class="nav nav-pills nav-fill p-3 border border-warning rounded shadow bg-light">
                    <li class="nav-item m-2">
                        <a class="nav-link text-dark border" href="usluge_servis_racunara.php">Servis računara</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link text-dark border" href="usluge_servis_stampaca.php">Servis Štampača</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link text-dark border" href="usluge_krimpovanje_kablova.php">Krimpovanje
                            kablova</a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link bg-dark border border-warning text-warning shadow active"
                           href="usluge_azurirnaje_softvera_navigacija.php">Azurirnaje softvera navigacija</a>
                    </li>
                </ul>
            </div>
            <!--Tabs-->

            <div class="row mt-5">
                <!--Krimpovanje-->
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="card text-light bg-dark border border-warning shadow">
                        <div class="card-body">
                            <h5 class="card-title text-light">Ažuriranje mapa za auto</h5>
                            <hr class="bg-warning">
                            <p class="card-text text-light">Cena: 500rsd</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="card text-light bg-dark border border-warning shadow">
                        <div class="card-body">
                            <h5 class="card-title text-light">Ažuriranje mapa za kamion</h5>
                            <hr class="bg-warning">
                            <p class="card-text text-light">Cena: 1000rsd</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="card text-light bg-dark border border-warning shadow">
                        <div class="card-body">
                            <h5 class="card-title text-light">Instalacija i ubacivanje mapa za Android</h5>
                            <hr class="bg-warning">
                            <p class="card-text text-light">Cena: 1000rsd</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-md-6 col-lg-4 my-3">
                    <div class="card text-light bg-dark border border-warning shadow">
                        <div class="card-body">
                            <h5 class="card-title text-light">Krimpovanje ? kabla</h5>
                            <hr class="bg-warning">
                            <p class="card-text text-light">Cena: 75rsd</a>
                        </div>
                    </div>
                </div>-->
                <!--Krimpovanje-->
            </div>
        </div>
        <!-- Kartice koje prikazuju usluge -->

    </div>
    <!-- Stranica -->

<?php
include_once('../../php/footer.php');
?>