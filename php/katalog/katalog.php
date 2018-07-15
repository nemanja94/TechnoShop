<?php
include_once '../header.php';
include '../baza/Database.php';

try {
    echo "pocetak try";
    $pdo = Database::connect();

    echo "Pisanje upita";
    $query = $pdo->prepare("SELECT * FROM TechnoShop.Katalog");

    echo "Izvrsenje upita";
    $rs = $query->execute();

    echo "Dobijanje broja rezultata";
    $nm = $rs->num_rows;

    echo $nm;
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once '../footer.php';

