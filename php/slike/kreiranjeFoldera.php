<?php

echo 'Pocinje';

require '../baza/Database.php';

$pdo = Database::connect();

$query = $pdo->prepare('SELECT *  FROM `Artikl` ORDER BY `Artikl`.`artikl_sifra` ASC;');

$query->execute();

Database::disconnect();
//Dodati kod za kreiranje direktorijuma
while ($sifra = $query->fetch()) {
    $path = "/var/www/html/projects/TechnoShop/php/slike/" . $sifra;
    if (mkdir($path, 0777)) {
        chmod($path, "root");
        echo "Folder " . $sifra . " je kreiran.";
    } else {
        echo "Folder " . $sifra . " nije kreiran.";
    }
}
//header('Location: unosArtikl.php');
