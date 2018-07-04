<?php

require '../baza/Database.php';

function getArtikl()
{

    try {

        $pdo = Database::connect();
        $query = $pdo->prepare("SELECT artikl_id, artikl_naziv FROM TechnoShop.Artikl ORDER BY artikl_naziv ASC;");
        $query->execute();
        Database::disconnect();

        while ($row = $query->fetch()) {
            echo '<option value="' . $row['artikl_id'] . '">' . $row['artikl_naziv'] . '</option>';
        }

    } catch (PDOException $e) {

        echo $e->getMessage();

    }
}

function getKategorije()
{

    try {

        $pdo = Database::connect();
        $query = $pdo->prepare("SELECT kategorija_id, kategorija_naziv FROM TechnoShop.Kategorije ORDER BY kategorija_naziv ASC;");
        $query->execute();
        Database::disconnect();

        while ($row = $query->fetch()) {
            echo '<option value="' . $row['kategorija_id'] . '">' . $row['kategorija_naziv'] . '</option>';
        }

    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}

function getPodkategorije()
{

    try {

        $pdo = Database::connect();
        $query = $pdo->prepare("SELECT podkategorija_id, podkategorija_naziv FROM TechnoShop.Podkategorija ORDER BY podkategorija_naziv ASC;");
        $query->execute();
        Database::disconnect();

        while ($row = $query->fetch()) {
            echo '<option value="' . $row['podkategorija_id'] . '">' . $row['podkategorija_naziv'] . '</option>';
        }

    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}

function getProizvodjac()
{

    try {

        $pdo = Database::connect();
        $query = $pdo->prepare("SELECT proizvodjac_id, proizvodjac_naziv FROM TechnoShop.Proizvodjac ORDER BY proizvodjac_naziv asc ");
        $query->execute();
        Database::disconnect();

        while ($row = $query->fetch()) {
            echo '<option value="' . $row['proizvodjac_id'] . '">' . $row['proizvodjac_naziv'] . '</option>';
        }

    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}

if (isset($_POST['unesi'])) {

    $artikl = null;
    $kategorija = null;
    $podkategorija = null;
    $proizvodjac = null;

    if (isset($_POST['artikl']) && 
        isset($_POST['katagorija']) && 
        isset($_POST['podkategorija']) && 
        isset($_POST['proizvodjac'])) {
        
        $artikl = htmlspecialchars($_POST['artikl']);
        $kategorija = htmlspecialchars($_POST['katagorija']);
        $podkategorija = htmlspecialchars($_POST['podkategorija']);
        $proizvodjac = htmlspecialchars($_POST['proizvodjac']);

        try {

            $pdo = Database::connect();

            $query = $pdo->prepare(
                'INSERT INTO
                TechnoShop.Katalog  (artikl_id, kategorija_id, podkategorija_id, proizvodjac_id)
            VALUES
                (:artikl, :katagorija, :podkategorija, :proizvodjac);'
            );

            $query->bindParam(':artikl', $artikl);
            $query->bindParam(':katagorija', $kategorija);
            $query->bindParam(':podkategorija', $podkategorija);
            $query->bindParam(':proizvodjac', $proizvodjac);

            $query->execute();

            Database::disconnect();

            //Dodati kod za kreiranje direktorijuma

            //header('Location: katalog.php');

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

    } else {
        echo "<h1>Jedno od poljla nije podeseno</h1>";
    }
}

include_once('../header.php');
?>



<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php"><span class="text-danger">Techno</span> <span>Shop</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav p-1 m-1">
            <a href="../index.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Početna strana</a>
            <a href="../artikli/unosArtikl.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos
                artikala<span class="sr-only">(current)</span></a>
            <a href="../kategorije/unosKategorija.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos
                kategorija</a>
            <a href="../podkategorije/unosPodkategorija.php"
               class="nav-link btn btn-outline-warning text-secondary mr-1">Unos podkategorija</a>
            <a href="../proizvodjac/unosProizvodjac.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos
                proizvođača</a>
            <a href="../slike/unosSlika.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos slika</a>
            <a href="katalog.php" class="nav-link btn btn-outline-warning text-secondary active">Katalog</a>
        </div>
    </div>
</nav>
<!-- Navbar -->


<!-- Opis stranice -->
<br>
<br>
<div class="container">
    <h3>
        Forma za uredjivanje kataloga
        <small>
            Ovde možete uneti nove ili izbirsati postojeće artikle iz kataloga.
        </small>
    </h3>
</div>
<br>
<hr>
<br>
<!-- Opis stranice -->

<!--Forma za unos artikala-->
<div class="container col-lg-7 col-md-7 text-center bg-dark pb-3 rounded">
    <p>
        <a class="btn btn-primary"
           style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
           data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
           aria-controls="collapseExample">
            Forma za unos artikala
        </a>
    </p>
    <div class="collapse p-3 rounded" id="collapseExample">
        <form action="katalog.php" method="post" enctype="multipart/form-data">

            <hr>

            <div class="control-group">
                <div class="controls">
                <label class="text-light text">Odaberite artikl</label>
                    <select name="artikl" class="form-control">
                        <?php getArtikl(); ?>
                    </select>
                </div>
            </div>

            <hr>

            <div class="control-group">
                <div class="controls">
                <label class="text-light text">Odaberite kategoriju</label>
                    <select name="katagorija" class="form-control">
                        <?php getKategorije() ?>
                    </select>
                </div>
            </div>

            <hr>

            <div class="control-group">
                <div class="controls">
                <label class="text-light text">Odaberite podkategoriju</label>
                  <select name="podkategorija" class="form-control">
                      <?php getPodkategorije(); ?>
                  </select>
                </div>
            </div>

            <hr>

            <div class="control-group">
                <div class="controls">
                <label class="text-light text">Odaberite proizvodjaca</label>
                  <select name="proizvodjac" class="form-control">
                      <?php getProizvodjac(); ?>
                  </select>
                </div>
            </div>

            <hr>

            <button type="submit" name="unesi" class="btn btn-success">Unesi</button>
        </form>
    </div>
</div>
<!--Forma za unos artikala-->

<?php
    include_once('../footer.php');
?>