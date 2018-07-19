<?php
include_once('php/header.php');
?>

<!-- Jumbotron -->
<div class="container mt-5 mx-0 justify-content-center align-items-center">
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide border border-warning rounded shadow" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner rounded shadow">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded " src="../slike/3.svg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>800 x 400</h5>
                            <p>Prvi slajd - Mesto za reklamu ili neki proizvod na akciji</p>
                        </div>
                    </div>
                    <div class="carousel-item shadow">
                        <img class="d-block w-100 rounded" src="../slike/2.svg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>800 x 400</h5>
                            <p>Drugi slajd - Mesto za reklamu ili neki proizvod na akciji</p>
                        </div>
                    </div>
                    <div class="carousel-item shadow">
                        <img class="d-block w-100 rounded" src="../slike/11.svg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>800 x 400</h5>
                            <p>Treći slajd - Mesto za reklamu ili neki proizvod na akciji</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Prethodni</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Sledeci</span>
                </a>
            </div>
        </div>
        <br />
    </header>
</div>
<!-- Jumbotron -->


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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        Početna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Akcije</a>
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

    <!-- Sadrzaj stranice -->
    <div class="container">

        <!-- Prvi deo -->

        <!-- Kartice sa  -->
        <div class="container mt-5">
            <h2 class="text-dark text-center">Naše najbolje ponude</h2>
            <br />
            <div class="row">
                <div class="col-sm-4 text-center my-3">
                    <div class="card text-light bg-warning" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                        <img class="card-img-top rounded rounded rounded rounded rounded" src="../slike/kartice - orvi deo.svg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                            <p class="card-text">Kartica sa opisom ponuda</p>
                            <hr />
                            <a href="#" class="btn btn-secondary text-light">Otvori stranicu</a>
                        </div>
                    </div>
                </div>

                <br />
                <br />

                <div class="col-sm-4 text-center my-3">
                    <div class="card text-light bg-warning" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                        <img class="card-img-top rounded rounded rounded rounded rounded" src="../slike/kartice - orvi deo.svg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                            <p class="card-text">Kartica sa opisom ponuda</p>
                            <hr />
                            <a href="#" class="btn btn-secondary text-light">Otvori stranicu</a>
                        </div>
                    </div>
                </div>

                <br />
                <br />

                <div class="col-sm-4 text-center my-3">
                    <div class="card text-light bg-warning" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                        <img class="card-img-top rounded rounded rounded rounded rounded" src="../slike/kartice - orvi deo.svg" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                            <p class="card-text">Kartica sa opisom ponuda</p>
                            <hr />
                            <a href="#" class="btn btn-secondary text-light">Otvori stranicu</a>
                        </div>
                    </div>
                </div>

                <br />

            </div>
        </div>
        <!-- Kartice sa  -->

        <!-- Prvi deo -->

        <br />
        <hr class="bg-light" />
        <br />

        <!-- Drugi deo -->
        <div class="container text-center">
            <h2 class="text-dark">Naša tri najbolja apartmana</h2>
            <br />
            <a href="#">
                <img class="rounded shadow img-fluid" src="../slike/3.svg" />
            </a>
            <br />
            <a href="#" class="btn btn-warning" style="margin-top: -80px;">Otvori stranicu</a>
            <div class="container mt-5">
                <h2 class="text-dark text-center"></h2>
                <br />
                <div class="row mb-5">
                    <div class="col-sm-6 text-center my-3">
                        <div class="card text-light bg-warning" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                            <img class="card-img-top rounded rounded rounded rounded rounded" src="../slike/kartice - orvi deo.svg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Kartice sa istaknutim apartmanima</h5>
                                <p class="card-text">Kartica sa opisom apartmanima</p>
                                <hr />
                                <a href="#" class="btn btn-secondary text-light">Otvori stranicu</a>
                            </div>
                        </div>
                    </div>

                    <br />
                    <br />

                    <div class="col-sm-6 text-center my-3">
                        <div class="card text-light bg-warning" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                            <img class="card-img-top rounded rounded rounded rounded rounded" src="../slike/kartice - orvi deo.svg" alt="Card image cap" />
                            <div class="card-body">
                                <h5 class="card-title">Kartice sa istaknutim apartmanima</h5>
                                <p class="card-text">Kartica sa opisom apartmanima</p>
                                <hr />
                                <a href="#" class="btn btn-secondary text-light">Otvori stranicu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Drugi deo -->

    </div>
    <!-- Sadrzaj stranice -->

    <!-- Footer -->
    <footer class="bg-dark p-3 text-center" style="bottom: 0; border-top-left-radius: 6px; border-top-right-radius: 6px;">
        <p class="text-light mb-0">Copyright &copy; TechnoShop R&D 2018</p>
    </footer>
    <!-- Footer -->

</div>
<!-- Stranica -->

<?php
include_once('php/footer.php');
?>