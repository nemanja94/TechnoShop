<?php
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
                    <a class="nav-link" href="../index.php">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Akcije</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Katalog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="frontend/kontakt.php">
                        Kontakt
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Radnje -->
    <div class="container mt-5">
        <h2 class="text-dark text-center">TechnoShop R&D D.O.O</h2>
        <br />

        <!-- Prva radnja -->
        <div class="container">

            <hr class="text-dark" />
            <h2 class="text-warning p-1 text-center bg-dark border border-warning rounded shadow">Radnja 1</h2>
            <hr class="text-dark" />

            <div class="row justify-content-center align-items-center">

                <div class="center-block border border-warning rounded shadow bg-dark text-warning p-3 m-3">
                    <p class="">
                        11550 Lazarevac,
                        <br />
                        <span>Rovinjskog 3 (Nikole Vujačić 4)</span>
                    </p>
                    <hr class="bg-warning" />
                    <p>Telefon: 011/8110-976</p>
                    <hr class="bg-warning" />
                    <p>Mobilni: 011/8110-976</p>
                    <hr class="bg-warning" />
                    <p>Fax: 011/8110-976</p>
                    <hr class="bg-warning" />
                    <p>
                        Email:
                        <a> kontakt@technoshop.net</a>
                    </p>
                </div>

                <div class="embed-responsive embed-responsive-16by9 col-lg-7 col-md-6 center-block rounded border border-warning shadow m-3 p-0">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2851.3437916693897!2d20.25484091510366!3d44.385064012815505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a01fc0e51177f%3A0xca431ff52969903b!2sTechno+Shop+R%26D!5e0!3m2!1ssr!2srs!4v1530734267370"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
        <!-- Prva radnja -->

        <!-- Druga radnja -->
        <div class="container mx-auto">

            <hr class="text-dark" />
            <h2 class="text-warning p-1 text-center bg-dark border border-warning rounded shadow">Radnja 2</h2>
            <hr class="text-dark" />

            <div class="row my-5 justify-content-center align-items-center">

                <div class="embed-responsive embed-responsive-16by9 col-lg-7 col-md-6 center-block rounded border border-warning shadow m-3 p-0">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2851.3437916693897!2d20.25484091510366!3d44.385064012815505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a01fc0e51177f%3A0xca431ff52969903b!2sTechno+Shop+R%26D!5e0!3m2!1ssr!2srs!4v1530734267370"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="center-block border border-warning rounded shadow bg-dark text-warning p-3 m-3">
                    <p class="">
                        11550 Lazarevac,
                        <br />
                        <span>Rovinjskog 3 (Nikole Vujačić 4)</span>
                    </p>
                    <hr />
                    <p>Telefon: 011/8110-976</p>
                    <hr />
                    <p>Mobilni: 011/8110-976</p>
                    <hr />
                    <p>Fax: 011/8110-976</p>
                    <hr />
                    <p>
                        Email:
                        <a> kontakt@technoshop.net</a>
                    </p>
                </div>

            </div>
        </div>
        <!-- Druga radnja -->

    </div>
    <!-- Radnje -->

    <!-- Footer -->
    <footer class="bg-dark p-3 text-center rounded-top">
        <p class="text-light mb-0">Copyright &copy; TechnoShop R&D 2018</p>
    </footer>
    <!-- Footer -->

</div>
<!-- Stranica -->

<?php
include_once('../php/footer.php');
?>