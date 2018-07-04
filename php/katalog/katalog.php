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


    if (!empty($_POST)) {

        // Ne prikazuj greske
        $naslovError = null;
        $artiklError = null;
        $cenaError = null;
        $opisError = null;
        $sifraError = null;

        // Preuzmi vrednosti od korisnika
        $naslov = '<p class="text-center te">Popunite zahtevana polja</p>';
        $naziv = htmlspecialchars($_POST['naziv']);
        $cena = htmlspecialchars($_POST['cena']);
        $opis = htmlspecialchars($_POST['opis']);
        $sifra = htmlspecialchars($_POST['sifra']);

        // Omoguci unos u bazu
        $valid = true;

        // Proveri da li su sva polja popunjena kako treba
        if (empty($naziv)) {
            $naslovError = '<h2>Niste uneli jedno od traženih polja</h2>';
            $artiklError = 'Unesite naziv';
            $valid = false;
        }

        if (empty($cena)) {
            $naslovError = '<h2>Niste uneli jedno od traženih polja</h2>';
            $cenaError = 'Unesite cenu';
            $valid = false;
        }

        if (empty($opis)) {
            $naslovError = '<h2>Niste uneli jedno od traženih polja</h2>';
            $opisError = 'Unesite opis';
            $valid = false;
        }

        if (empty($sifra)) {
            $naslovError = '<h2>Niste uneli jedno od traženih polja</h2>';
            $sifraError = 'Unesite šifru';
            $valid = false;
        }

        // Ako jesu popunjana kako treba, zapocni unos u bazu
        if ($valid) {

            try {

                $pdo = Database::connect();

                $query = $pdo->prepare(
                    'INSERT INTO
                    TechnoShop.Katalog  (artikl_id, kategorija_id, podkategorija_id, proizvodjac_id)
                VALUES
                    (:naziv, :opis, :sifra, :cena);'
                );

                $query->bindParam(':naziv', $naziv);
                $query->bindParam(':cena', $cena);
                $query->bindParam(':opis', $opis);
                $query->bindParam(':sifra', $sifra);

                $query->execute();

                Database::disconnect();

                //Dodati kod za kreiranje direktorijuma

                $path = "/var/www/html/projects/TechnoShop/php/slike/" . $sifra;

                if (mkdir($path, 0777)) {
                    chmod($path, "nemanja");
                    echo " radi";
                } else {
                    echo " Ne radi";
                }


                header('Location: unosArtikl.php');

            } catch (PDOException $e) {

                echo $e->getMessage();

            }
        }
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
        Forma za unos novih artikala
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
        <form action="unosArtikl.php" method="post" enctype="multipart/form-data">

            <hr>

            <div class="control-group <?php echo !empty($artiklError) ? 'error' : ''; ?>">
                <div class="controls">
                    <select name="artikl" class="form-control">
                        <?php getArtikl(); ?>
                    </select>
                    <?php if (!empty($artiklError)) : ?>
                        <span class="help-inline text-danger"><?php echo $artiklError; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <hr>

            <div class="control-group <?php echo !empty($cenaError) ? 'error' : ''; ?>">
                <div class="controls">
                    <select name="katagorija" class="form-control">
                        <?php getKategorije() ?>
                    </select>
                    <?php if (!empty($cenaError)) : ?>
                        <span class="help-inline text-danger"><?php echo $cenaError; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <hr>

            <div class="control-group <?php echo !empty($sifraError) ? 'error' : ''; ?>">
                <div class="controls">
                  <select name="podkategorija" class="form-control">
                      <?php getPodkategorije(); ?>
                  </select>
                    <?php if (!empty($sifraError)) : ?>
                        <span class="help-inline text-danger"><?php echo $sifraError; ?></span>
                    <?php endif; ?>
                </div>
            </div>

            <hr>

            <div class="control-group <?php echo !empty($opisError) ? 'error' : ''; ?>">
                <div class="controls">
                <textarea class="form-control" rows="5" cols="50" name="opis" type="text"
                          placeholder="Opis artikla"></textarea>
                    <?php if (!empty($opisError)) : ?>
                        <span class="help-inline text-danger"><?php echo $opisError; ?></span>
                    <?php endif; ?>
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