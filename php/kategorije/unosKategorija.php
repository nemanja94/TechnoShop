<?php

require '../baza/Database.php';

if (!empty($_POST)) {

    // Ne prikazuj greske
    $nazivError = null;

    // Preuzmi vrednosti od korisnika
    $naziv = htmlspecialchars($_POST['naziv']);

    // Omoguci unos u bazu
    $valid = true;

    // Proveri da li su sva polja popunjena kako treba
    if (empty($naziv)) {
        $nazivError = 'Unesite naziv';
        $valid = false;
    }

    // Ako jesu popunjana kako treba, zapocni unos u bazu
    if ($valid) {

        try {

            $pdo = Database::connect();

            $query = $pdo->prepare(
                'INSERT INTO TechnoShop.Kategorije  (kategorija_naziv) VALUES (:naziv);'
            );

            $query->bindParam(':naziv', $naziv);

            $query->execute();

            Database::disconnect();

            header('Location: unosKategorija.php');

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

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
        <a href="../kategorije/unosKategorija.php" class="nav-link btn btn-outline-warning text-secondary mr-1 active">Unos kategorija</a>
        <a href="../podkategorije/unosPodkategorija.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos podkategorija</a>
        <a href="../proizvodjac/unosProizvodjac.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos proizvođača</a>
        <a href="../slike/unosSlika.php" class="nav-link btn btn-outline-warning text-secondary mr-1">Unos slika</a>
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
        Forma za unos novih kategorija
        <small>
            Ovde možete uneti nove ili izbirsati postojeće kategorije.
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
            Forma za unos kategorija
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="container">
            <div class="forma">
                <form action="unosKategorija.php" method="post">
                    <hr>
                    <div class="control-group <?php echo !empty($nazivError) ? 'error' : ''; ?>">
                        <div class="controls">
                            <input class="form-control" name="naziv" type="text" placeholder="Naziv kategorije">
                            <?php if (!empty($nazivError)) : ?>
                                <span class="help-inline text-danger"><?php echo $nazivError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <hr>

                    <button type="submit" class="btn btn-success">Unesi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Forma za unos artikala-->

<!-- Kartice koje prikazuju kategorije -->
<hr>
<div class="container">
    <div class="row">

        <?php

        try {

            $pdo = Database::connect();

            $query = $pdo->prepare(
                'SELECT * FROM TechnoShop.Kategorije'
            );

            $query->execute();

            while ($row = $query->fetch()) {

                echo '<div class="col-sm-4" style="margin-bottom: 2%;">
                <div class="card text-white bg-dark" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-body">
                        <h5 class="card-title">' . $row['kategorija_naziv'] . '</h5>
                        <hr class="bg-secondary">
                        <a href="ukloniKategoriju.php?id=' . $row['kategorija_id'] . '">
                            <button class="btn btn-danger">Ukloni kategoriju</button>
                        </a>
                    </div>
                </div>
            </div>';

            }

            Database::disconnect();

        } catch (PDOException $e) {

            echo $e->getMessage();

        }

        ?>
    </div>
</div>
<!-- Kartice koje prikazuju kategorije -->

<!-- bootstrap -->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<!-- bootstrap -->

</body>
</html>
