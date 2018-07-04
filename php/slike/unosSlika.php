<?php

require '../baza/Database.php';

if (!empty($_FILES)) {

    $artikl_sifra = htmlspecialchars($_GET['sifra']);

    $fileName = $_FILES['slika']['name'];
    $fileTmpName = $_FILES['slika']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError == 0) {
            if ($fileSize < 100000) {
                $slika = $artikl_sifra . '-' . uniqid('', true) . "." . $fileActualExt;
                $fileDestination = htmlspecialchars($artikl_sifra) . '/' . htmlspecialchars($slika);
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo 'Slika je previse velika';
            }
        } else {
            echo 'Dogodila se greska ' . $fileError;
        }
    } else {
        echo "Odabrani fajl ne moze biti unet jer nije u formatu koji su dozvoljeni";
    }


    try {

        $pdo = Database::connect();

        $queryArtikli = $pdo->prepare(
            'INSERT INTO
                    TechnoShop.Slike  (artikl_sifra, slika) VALUES (:artikl, :slika);'
        );

        $queryArtikli->bindParam(':artikl', $artikl_sifra);
        $queryArtikli->bindParam(':slika', $slika);

        $queryArtikli->execute();

        Database::disconnect();

        header('Location: unosSlika.php');

    } catch (PDOException $e) {

        echo $e->getMessage();

    }

}

include_once('../header.php');

?>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php"><span class="text-danger">Techno</span> <span>Shop</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav p-1 m-1">
        <a href="../index.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Početna strana</a>
        <a href="../artikli/unosArtikl.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos artikala<span class="sr-only">(current)</span></a>
        <a href="../kategorije/unosKategorija.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos kategorija</a>
        <a href="../podkategorije/unosPodkategorija.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos podkategorija</a>
        <a href="../proizvodjac/unosProizvodjac.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos proizvođača</a>
        <a href="../slike/unosSlika.php" class="nav-link btn btn-outline-warning text-secondary mr-1 active">Unos slika</a>
        <a href="../katalog/katalog.php" class="nav-link btn btn-outline-warning text-secondary">Katalog</a>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

<!-- Opis stranice -->
<br>
<br>
<div class="container">
    <h3>
        Forma za unos novih slika
        <small>
            Ovde možete uneti nove slike.
        </small>
    </h3>
</div>
<br>
<hr>
<br>
<!-- Opis stranice -->

<!-- Kartice koje prikazuju artikla i omogućuju unos slika za odabrani artikl -->
<div class="container">
    <div class="row">

        <?php

        try {

            //Prikaz kartica sa podacima o artiklima
            $pdo = Database::connect();

            $queryArtikli = $pdo->prepare(
                'SELECT * FROM TechnoShop.Artikl'
            );

            $queryArtikli->execute();

            $c = 0;

            while ($rowArtikli = $queryArtikli->fetch()) {

                echo '<div class="col-sm-4" style="margin-bottom: 2%;">
                        <div class="card text-white bg-dark" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">';

                //Prikaz slika u carusel-u
                $sifraArtikla = $rowArtikli['artikl_sifra'];

                $querySlike = $pdo->prepare(
                    'SELECT * FROM TechnoShop.Slike WHERE artikl_sifra = :sifraArtikla;'
                );

                $querySlike->bindParam('sifraArtikla', $sifraArtikla);

                $querySlike->execute();

                echo '
                    <div id="' . $c . '" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">';

                $brojac = 0;

                while ($rowSlike = $querySlike->fetch()) {

                    $folder = htmlspecialchars($rowSlike['artikl_sifra']);
                    $slika = htmlspecialchars($rowSlike['slika']);

                    if ($brojac <= 0) {
                        echo '
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="' . $folder . '/' . $slika . '">
                            </div>';
                        $brojac++;
                    } else {
                        echo '
                            <div class="carousel-item">
                                <img class="d-block w-100" src="' . $folder . '/' . $slika . '">
                            </div>';
                        $brojac++;
                    }

                }
                //Prikaz slika u carusel-u

                echo '</div>
                    <a class="carousel-control-prev" href="#' . $c . '" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#' . $c . '" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                    <div class="card-body">
                        <h3 class="card-title">Naziv: ' . $rowArtikli['artikl_naziv'] . '</h3>
                        <p class="card-title">Opis: ' . $rowArtikli['artikl_opis'] . '</p>
                        <p class="card-title">Šifra: ' . $rowArtikli['artikl_sifra'] . '</p>
                        <p class="card-title">Cena: ' . $rowArtikli['artikl_cena'] . 'rsd</p>
                        <hr>
                        <form action="unosSlika.php?sifra=' . $rowArtikli['artikl_sifra'] . '" method="post" enctype="multipart/form-data">
                            <label class="col-form-label">Odaberite sliku</label>
                            <input class="input-group" type="file" name="slika">
                            <br>
                            <button class="btn btn-success">Unesi</button>
                        </form>
                    </div>
                </div>
            </div>';

                $c++;

            }

            Database::disconnect();
            //Prikaz kartica sa podacima o artiklima

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

        ?>
    </div>
</div>
<!-- Kartice koje prikazuju kategorije -->

<?php
    include_once('../footer.php');
?>
