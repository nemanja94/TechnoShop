<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <title>MetHotels</title>
</head>

<body class="bg-light">

  <!-- Jumbotron -->
  <div class="container">
    <header>
      <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner rounded" style="box-shadow: 1.5px 2.5px 4.5px rgba(0, 0, 0, 0.5);">
            <div class="carousel-item active">
              <img class="d-block w-100" src="slike/3.svg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>800 x 400</h5>
                <p>Prvi slajd - Mesto za reklamu ili neki proizvod na akciji</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="slike/2.svg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>800 x 400</h5>
                <p>Drugi slajd - Mesto za reklamu ili neki proizvod na akciji</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="slike/11.svg" alt="Third slide">
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
      <br>
    </header>
  </div>
  <!-- Jumbotron -->


  <!-- Stranica -->
  <div class="container">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning rounded-bottom sticky-top" style="box-shadow: 1.5px 2.5px 4.5px rgba(0, 0, 0, 0.5);">
      <a class="navbar-brand" href="index.html"><h4 class="mb-0">MetHotels</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Početna <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rezervacije</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">O nama</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gost
                    </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="prijava.html">Prijava</a>
              <a class="dropdown-item" href="registracija.html">Regstracija</a>
            </div>
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
        <br>
        <div class="row">
          <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-light bg-success" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
              <img class="card-img-top" src="slike/kartice - orvi deo.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                <p class="card-text">Kartica sa opisom ponuda</p>
                <hr>
                <a href="#" class="btn btn-light">Otvori stranicu</a>
              </div>
            </div>
          </div>

          <br>
          <br>

          <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-light bg-success" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
              <img class="card-img-top" src="slike/kartice - orvi deo.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                <p class="card-text">Kartica sa opisom ponuda</p>
                <hr>
                <a href="#" class="btn btn-light">Otvori stranicu</a>
              </div>
            </div>
          </div>

          <br>
          <br>

          <div class="col-sm-4 text-center" style="margin-bottom: 2%;">
            <div class="card text-light bg-success" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
              <img class="card-img-top" src="slike/kartice - orvi deo.svg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Kartice sa istaknutim ponudama</h5>
                <p class="card-text">Kartica sa opisom ponuda</p>
                <hr>
                <a href="#" class="btn btn-light">Otvori stranicu</a>
              </div>
            </div>
          </div>

          <br>

        </div>
      </div>
      <!-- Kartice sa  -->

      <!-- Prvi deo -->

      <br>
      <hr class="bg-light">
      <br>

      <!-- Drugi deo -->
      <div class="container text-center">
        <h2 class="text-dark">Naša tri najbolja apartmana</h2>
        <br>
        <a href="#"><img class="slike img-fluid" src="../slike/3.svg"></a>
        <br>
        <a href="#" class="btn btn-success" style="margin-top: -80px;">Otvori stranicu</a>
        <div class="container mt-5">
          <h2 class="text-dark text-center"></h2>
          <br>
          <div class="row mb-5">
            <div class="col-sm-6 text-center mt-1%" style="margin-bottom: 2%;">
              <div class="card text-light bg-success" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <img class="card-img-top" src="slike/kartice - orvi deo.svg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kartice sa istaknutim apartmanima</h5>
                  <p class="card-text">Kartica sa opisom apartmanima</p>
                  <hr>
                  <a href="#" class="btn btn-light">Otvori stranicu</a>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="col-sm-6 text-center" style="margin-bottom: 2%;">
              <div class="card text-light bg-success" style="box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 8px 22px 0 rgba(0, 0, 0, 0.30);">
                <img class="card-img-top" src="slike/kartice - orvi deo.svg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Kartice sa istaknutim apartmanima</h5>
                  <p class="card-text">Kartica sa opisom apartmanima</p>
                  <hr>
                  <a href="#" class="btn btn-light">Otvori stranicu</a>
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
    <footer class="bg-dark" style="padding: 1em;
    background-color: black;
    clear: left;
    text-align: center;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;">
      <p class="text-light mb-0">Copyright &copy; TechnoShop</p>
    </footer>
    <!-- Footer -->

  </div>
  <!-- Stranica -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
