<?php

require('../baza/Database.php');

$id = null;

if (!empty($_GET['id'])) {

    $id = htmlspecialchars($_GET['id']);

}

if (null == $id) {

    header("Location: unosArtikl.php");

}

try {

    $pdo = Database::connect();

    $query = $pdo->prepare("SELECT *
                                        FROM TechnoShop.Artikl
                                        WHERE TechnoShop.Artikl.artikl_id = :id");

    $query->bindParam(':id', $id);

    $query->execute();

    $row = $query->fetch(PDO::FETCH_ASSOC);

    $naziv = $row['artikl_naziv'];
    $opis = $row['artikl_opis'];
    $cena = $row['artikl_cena'];
    $sifra = $row['artikl_sifra'];
    $akcija = $row['artikl_akcija'];

    Database::disconnect();

} catch (PDOException $e) {

    echo $e->getMessage();

}

include_once('../header.php');

?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php"><span class="text-danger">Techno</span> <span>Shop</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav p-1 m-1">
            <a href="../artikli/unosArtikl.php" class="nav-link btn btn-outline-warning text-secondary mr-1 active">Nazad</a>
        </div>
    </div>
</nav>
<!-- Navbar -->

<!-- Opis stranice -->
<br>
<br>
<div class="container">
    <h3>
        Detalji o artiklu
        <small>
            Ovde možete pogledati postojeće podatke artikla i izmeniti ih.
        </small>
    </h3>
</div>
<br>
<hr>
<br>
<!-- Opis stranice -->

<!--Forma za unos artikala-->
<div class="container">

    <div class="bg-dark col-lg-7 rounded p-3 mb-5 text-light">

        <form action="izmeniArtikl.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <hr>
            <table>
                <tbody>
                <tr>
                    <td>
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label">Naziv artikla</label>
                                <input class="form-control" name="naziv" type="text" value="<?php echo $naziv; ?>">
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label">Cena artikla</label>
                                <input class="form-control" name="cena" type="number"
                                       value="<?php echo $cena; ?>">
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label">Šifra artikla</label>
                                <input class="form-control" name="sifra" type="text"
                                       value="<?php echo $sifra; ?>">
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="control-group">
                            <div class="controls">
                                <label class="control-label">Akcija</label>
                                <select name="akcija" class="custom-select">
                                    <?php
                                    if ($akcija == 'DA') {
                                        echo "<option value='DA'>DA</option><option value='NE'>NE</option>";
                                    } else {
                                        echo "<option value='NE'>NE</option><option value='DA'>DA</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="control-group">

                            <div class="controls">
                        <label class="control-label">Opis artikla</label>
                                <textarea class="form-control" rows="5" cols="100" name="opis" type="text"
                                ><?php echo $opis; ?></textarea>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="text-right">
                        <br>
                        <button class="btn btn-sm btn-success" name="izmeni">Izmeni</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
        <hr>
    </div>
</div>
<!--Forma za unos artikala-->

<?php
include_once('../footer.php');
?>
