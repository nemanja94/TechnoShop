<?php

echo "Pocinje - 3\n";

require "../baza/Database.php";

echo "PDO - 7\n";
$pdo = Database::connect();

echo "Upit - 10\n";
$query = $pdo->prepare("SELECT artikl_sifra FROM `Artikl` ORDER BY `Artikl`.`artikl_sifra` ASC");

echo "Izvrsenje upita - 13\n";
$query->execute();

echo "Raskidanje konekcije - 16\n";
Database::disconnect();
//Dodati kod za kreiranje direktorijuma

echo "While petlja - 20\n";
while ($sifra = $query->fetch()) {
    $path = "/var/www/html/projects/TechnoShop/php/slike/" . $sifra;
    if (mkdir($path, 0777, true)) {
        chmod($path, 0777);
        echo "Folder " . $sifra . " je kreiran.";
    } else {
        echo "Folder " . $sifra . " nije kreiran.";
    }
}
//header("Location: unosArtikl.php");
