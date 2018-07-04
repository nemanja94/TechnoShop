<?php
include_once('header.php');
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><span class="text-danger">Techno</span> <span>Shop</span></a>
</nav>
<!-- Navbar -->

<!-- Opis stranice -->
<hr>
<div class="container">
    <h3>
        Opcije za unos
        <small>
            Ovde možete odabrati sta zelite da izmenite.
        </small>
    </h3>

</div>
<br>
<hr>
<br>
<!-- Opis stranice -->

<!-- Kartice sa opcijama za unos -->
<div class="container">
    <div class="row">
        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Artikli</h5>
                    <p class="card-text">Unos i uklanjanje artikala iz baze.....</p>
                    <a href="artikli/unosArtikl.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Kategorije</h5>
                    <p class="card-text">Unos i uklanjanje kategorija iz baze.</p>
                    <a href="kategorije/unosKategorija.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Podkategorije</h5>
                    <p class="card-text">Unos i uklanjanje podkategorija iz baze.</p>
                    <a href="podkategorije/unosPodkategorija.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Podpodkategorije</h5>
                    <p class="card-text">Unos i uklanjanje podpodkategorija.</p>
                    <a href="podpodkategorije/unosPodpodkategorija.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Proizvođači</h5>
                    <p class="card-text">Unos i uklanjanje proizvođača iz baze.</p>
                    <a href="proizvodjac/unosProizvodjac.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Slike</h5>
                    <p class="card-text">Unos slika u bazu za artikle..................</p>
                    <a href="slike/unosSlika.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-white bg-primary"
                 style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <div class="card-body">
                    <h5 class="card-title">Katalog</h5>
                    <p class="card-text">Unos i uklanjanje artikala iz kataloga.</p>
                    <a href="katalog/katalog.php" class="btn bg-white">Otvori stranicu</a>
                </div>
            </div>
        </div>

        <br>

    </div>
</div>
<!-- Kartice sa opcijama za unos -->

<?php
    include_once('footer.php');
?>

<!-- Menu Toggle Script -->
<!-- <script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script> -->
