<?php
include_once '../header.php';
include '../baza/Database.php';

try {
    $pdo = Database::connect();
    $query = $pdo->prepare("SELECT * FROM TechnoShop.Katalog");
    $rs = $query->execute();
    echo $nm = $rs->num_rows;
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once '../footer.php';

